<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\OrderProduct;
use App\Product;
use Auth;
use Session;

class UsersController extends Controller
{
    /**
     * Loads the signup page.
     */
    public function getSignup(){
        return view("user.signup");
    }

    /**
     * Makes a new user.
     * 
     * @param $user = the users info.
     * @param $oldUrl = the old url.
     */
    public function postSignup(Request $request){
        $this->validate($request, [
            "name" => "required",
            "email" => "email|required|unique:users",
            "password" => "required|min:4"
        ]);

        $user = new User([
            "name" => $request->input("name"),
            "email" => $request->input("email"),
            "password" => bcrypt($request->input("password"))
        ]);
        $user->save();

        Auth::login($user);

        //if the user was on the checkout page it redirects him back when the user makes an account.
        if(Session::has("oldUrl")){
            $oldUrl = Session::get("oldUrl");
            Session::forget("oldUrl");
            return redirect()->to($oldUrl);
        }

        return redirect()->route("user.profile");
    }

    /**
     * Shows the user the signin page.
     */
    public function getSignin(){
        return view("user.signin");
    }

    /**
     * Loads the user in.
     * 
     * @param $oldUrl = the old url.
     */
    public function postSignin(Request $request){
        $this->validate($request, [
            "email" => "email|required",
            "password" => "required|min:4"
        ]);

        if(Auth::attempt(["email" => $request->input("email"), "password" => $request->input("password")])){
            //if the user was on the checkout page it redirects him back when the user makes an account.
            if(Session::has("oldUrl")){
                $oldUrl = Session::get("oldUrl");
                Session::forget("oldUrl");
                return redirect()->to($oldUrl);
            }
            return redirect()->route("user.profile");
        }
        return redirect()->back();
    }

    /**
     * Loads the profile page with all the orders of the user.
     * 
     * @param $orders = all the orders of the user.
     * @param $order = a order of the user.
     * @param $orderProducts = products from the orders.
     * @param $products = the products that are in the order.
     * @param $orderItems = the products from one order.
     * @param $orderItem = one product from one order.
     */
    public function getProfile(){
        $orders = Auth::user()->orders;
        $orderProducts = [];
        $products = [];
        foreach($orders as $order){
            $orderProducts[$order->id] = OrderProduct::where('order_id', $order->id)->get();
        }
        foreach($orderProducts as $orderItems){
            foreach($orderItems as $orderItem){
                if(!array_key_exists($orderItem->product_id, $products)){
                    $products[$orderItem->product_id] = Product::where('product_id', $orderItem->product_id)->get();
                }
            }
        }
        return view("user.profile")->with("orders", $orders)->with("orderProducts", $orderProducts)->with("products", $products);
    }

    /**
     * Logs the user out.
     */
    public function getLogout(){
        Auth::logout();
        return redirect()->route("user.signin");
    }
}
