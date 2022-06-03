<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    function home(){
        return view('home');
    }

    function calculate(){
        return view('calculate');
    }
}
