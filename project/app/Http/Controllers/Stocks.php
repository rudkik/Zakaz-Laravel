<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Stocks extends Controller
{
    public function index(){
        return view('stocks');
    }
}
