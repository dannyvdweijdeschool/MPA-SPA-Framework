<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $homeImage = asset('images/home_image.jpeg');
        return view('pages.home')->with("homeImage", $homeImage);;
    }
}
