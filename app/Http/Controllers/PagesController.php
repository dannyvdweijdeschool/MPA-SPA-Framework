<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Loads the home page with the background image.
     * 
     * @param $homeImage = the background image of the homepage.
     */
    public function home(){
        $homeImage = asset('images/home_image.jpeg');
        return view('pages.home')->with("homeImage", $homeImage);;
    }
}
