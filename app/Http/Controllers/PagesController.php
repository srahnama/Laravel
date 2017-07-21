<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        $names = ["shahab", "shahin"];
        return view('welcome',["names" => $names]);

    }
    public function about(){
        $names = ["shahab", "shahin"];
        return view('about',["names" => $names]);

    }
}
