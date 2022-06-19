<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\StockRequest;
use App\Models\Stock;

class AdminStock extends Controller
{
    public function index(){
        $stocks = Stock::all();
        return view('admin.stocks.stocks', [
            'stocks' => $stocks
        ]);
    }

    public function stockNew(){
        return view('admin.stocks.stock_new');
    }


    public function stockUpdate($id){
        $stock = Stock::find($id);

        return view('admin.stocks.stock_update', [
            'stock' => $stock
        ]);
    }

    public function stockUpdateSubmit($id, StockRequest $request){
        $stock = Stock::find($id);

        $stock->title = $request->title;
        $stock->old_price =$request->old_price;
        $stock->new_price= $request->new_price;
        $stock->is_active = $request->is_active;
        $stock->image_uri = $request->image_uri;

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
        $stock->is_active = $request->is_active;
        $stock->image_uri = $request->image_uri;

        $stock->save();

        return redirect()->route('admin-stocks');
    }

}

