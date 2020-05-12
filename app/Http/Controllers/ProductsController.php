<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;

use Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $products = Product::where("category_id", $id)->get();
        $products = $products->sortBy("product_name");
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
        $product = Product::where("product_id", $productId)->get();
        return view("products.show")->with("product", $product);
    }

    public function addToCart(Request $request, $itemId){
        $product = Product::where("product_id", $itemId)->get();
        $cart = new Cart();
        $cart->add($product[0], $product[0]->product_id);

        $request->session()->put("cart", $cart);
        dd($request->session()->get("cart"));
        return redirect()->route("categories.index");
    }
}
