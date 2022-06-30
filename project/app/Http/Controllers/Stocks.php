<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class Stocks extends Controller
{
    public function index(){
        $stocks = Stock::all();
        return view('stocks', [ 'stocks' => $stocks]);
    }

    public function active(){
        $stocks = Stock::where('is_active', 1);
        return view('stocks', [ 'stocks' => $stocks]);
    }
}
