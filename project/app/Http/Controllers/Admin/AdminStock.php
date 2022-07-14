<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\StockRequest;
use App\Models\Stock;
use Illuminate\Support\Facades\Storage;

class AdminStock extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth');
    }

    public function index(){
        $stocks = Stock::all();
        return view('admin.stocks.stocks', [
            'stocks' => $stocks
        ]);
    }

    public function stockNew(){
        return view('admin.stocks.new');
    }


    public function stockUpdate($id){
        $stock = Stock::find($id);

        return view('admin.stocks.edit', [
            'stock' => $stock
        ]);
    }

    public function stockUpdateSubmit($id, StockRequest $request){
        $stock = Stock::find($id);

        $stock->title = $request->title;
        $stock->old_price =$request->old_price;
        $stock->new_price= $request->new_price;
        if (isset($request->is_active)){
            $stock->is_active = $request->is_active;
        }else{
            $stock->is_active = 0;
        }

        $image = $request->file('image_uri')->store('public/stocks');
        $stock->image_uri = $image;

        $stock->save();

        return redirect()->route('admin-stocks');
    }

    public function stockDelete($id){
        $stocks = Stock::find($id);
        $stocks->delete();

        return $this->index();
    }

    public function stockCreate(StockRequest $request){

        $stock = new Stock();

        $stock->title = $request->title;
        $stock->old_price =$request->old_price;
        $stock->new_price= $request->new_price;
        if (isset($request->is_active)){
            $stock->is_active = $request->is_active;
        }else{
            $stock->is_active = 0;
        }

        $image = $request->file('image_uri')->store('public/stocks');
        $stock->image_uri = $image;


        $stock->save();

        return redirect()->route('admin-stocks');
    }

}

