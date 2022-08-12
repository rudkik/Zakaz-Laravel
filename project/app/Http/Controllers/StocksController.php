<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StocksController extends Controller
{
    public function index(){
        $stocks = Stock::all();
        return view('stocks', [ 'stocks' => $stocks]);
    }

    public function active(){
        $stocks = DB::table('stocks')->where('is_active', 1)->get();

        return view('stocks', [ 'stocks' => $stocks]);
    }
}
