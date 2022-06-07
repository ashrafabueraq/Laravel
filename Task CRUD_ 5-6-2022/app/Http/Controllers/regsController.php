<?php

namespace App\Http\Controllers;
use App\Models\registration;

use Illuminate\Http\Request;

class regsController extends Controller
{
    function getdata(){
        $data = registration::all();

        return view('registration', compact('data'));
    }

    function getid(){
        $id = request('id');
        $data = registration::where('id', $id)->first();

        return view('regesid', compact('data'));
    }
}
