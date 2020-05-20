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

Route::get("/", "PagesController@home");
Route::get("/home", "PagesController@home");
Route::post("/add-to-cart/{id}", "ProductsController@addToCart");
Route::post("/change-cart-items", "ProductsController@changeCartItems");
Route::get("/delete-from-cart/{id}", "ProductsController@deleteFromCart");
Route::get("/cart", "ProductsController@showCart");

Route::resource("categories", "CategoriesController");
Route::resource("categories.products", "ProductsController");

Route::get("/signup", "UsersController@getSignup");
Route::post("/signup", "UsersController@postSignup");
Route::get("/signin", "UsersController@getSignin");
Route::post("/signin", "UsersController@postSignin");
Route::get("/user/profile", "UsersController@getProfile");