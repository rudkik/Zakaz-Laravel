<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Company extends Controller
{
    public function index(){
        return view('company');
    }
}
