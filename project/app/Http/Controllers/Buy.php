<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Buy extends Controller
{
    public function basket(){
        return view('basket');
    }

    public function payment(){
        return view('payment');
    }
}
