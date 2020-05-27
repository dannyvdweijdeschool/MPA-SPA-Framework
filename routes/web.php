<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [
    "uses" => "PagesController@home",
    "as" => "pages.home"
]);

Route::get("/home", "PagesController@home");

Route::post("/add-to-cart/{id}", [
    "uses" => "ProductsController@addToCart",
    "as" => "products.add"
]);

Route::post("/change-cart-items", [
    "uses" => "ProductsController@changeCartItems",
    "as" => "products.changeAmount"
]);

Route::get("/delete-from-cart/{id}", [
    "uses" => "ProductsController@deleteFromCart",
    "as" => "pages.delete"
]);

Route::get("/cart", [
    "uses" => "ProductsController@showCart",
    "as" => "pages.cart"
]);

Route::get("/checkout", [
    "uses" => "ProductsController@checkout",
    "as" => "products.checkout"
]);

Route::resource("categories", "CategoriesController");
Route::resource("categories.products", "ProductsController");

Route::group(["prefix" => "user"], function(){
    Route::group(["middleware" => "guest"], function(){
        Route::get("/signup", [
            "uses" => "UsersController@getSignup",
            "as" => "user.signup"
        ]);
        Route::post("/signup", [
            "uses" => "UsersController@postSignup",
            "as" => "user.signup"
        ]);
        Route::get("/signin", [
            "uses" => "UsersController@getSignin",
            "as" => "user.signin"
        ]);
        Route::post("/signin", [
            "uses" => "UsersController@postSignin",
            "as" => "user.signin"
        ]);
    });
    Route::group(["middleware" => "auth"], function(){
        Route::get("/profile", [
            "uses" => "UsersController@getProfile",
            "as" => "user.profile"
        ]);
        Route::get("/signout", [
            "uses" => "UsersController@getLogout",
            "as" => "user.signout"
        ]);
    });
});