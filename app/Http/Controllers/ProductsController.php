<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\Cart;
use App\Category;
use App\OrderProduct;

use Session;
use Auth;

class ProductsController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $category = Category::findOrFail($id);
        $products = $category->products;
        return view("products.index")->with("products", $products);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  int  $productId
     * @return \Illuminate\Http\Response
     */
    public function show($id, $productId)
    {
        $product = Product::where("id", $productId)->get();
        return view("products.show")->with("product", $product);
    }

    /**
     * Adds the chosen product to the shopping cart.
     * 
     * @param int $itemId = id of the product.
     * @param $product = the product.
     * @param $cart = the cart that containts the item(s).
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request, $itemId){
        $amount = $request->input('amount');
        $product = Product::where("id", $itemId)->get();
        $cart = new Cart();
        $cart->add($request,$product[0], $product[0]->id,$amount);

        return redirect()->route("categories.index");
    }

    /**
     * Changes the amount for the item(s) that the client has changed.
     * 
     * @param $amounts = The amounts of the inputs.
     * @param $cart = everything thats in the cart.
     * @param $ids = array with all the ids of the items in the cart.
     */
    public function changeCartItems(Request $request){
        $amounts = [];
        $cart = new Cart();
        $ids = $cart->getIdsInCart();
        foreach($ids as $id){
            $amounts[$id] = $request->input('amount' . $id);
        }
        $cart->checkAmountOfItems($request,$ids, $amounts);
        return view("products.cart")->with("cart", $cart);
    }

    /**
     * Deletes the item form the list.
     * 
     * @param int $id = id of the item.
     * @param $cart = everything thats in the cart.
     */
    public function deleteFromCart(Request $request,$id){
        $cart = new Cart();
        $cart->deleteItemFromCart($request,$id);
        return view("products.cart")->with("cart", $cart);
    }

    /**
     * Shows whats inside the cart.
     * 
     * @param $cart = everything thats in the cart.
     */
    public function showCart(){
        if(!Session::has("cart")){
            return view("products.cart")->with("cart", null);
        }
        $cart = new Cart();
        return view("products.cart")->with("cart", $cart);
    }

    /**
     * Loads the checkout view.
     */
    public function checkout(){
        return view("products.checkout");
    }

    /**
     * Saves the order of the user to the database.
     * 
     * @param $cart = the cart of the user.
     * @param $order = the cart made into an order.
     */
    public function postCheckout(Request $request){
        if(Session::has("cart")){
            $cart = new Cart();
            $order = new Order();
            $order->name = $request->input("name");
            $order->user_id = Auth::id();
            $order->total_price = $cart->totalPrice;
    
            $order = Auth::user()->orders()->save($order);
            foreach($cart->items as $item){
                $orderItem = new OrderProduct([
                    "order_id" => $order->id,
                    "product_id" => $item->item->id,
                    "product_amount" => $item->qty,
                    "total_price" => $item->price 
                ]);
                $orderItem->save();
            }
            Session::forget("cart");
            return redirect()->route("user.profile");
        }
    }
}
