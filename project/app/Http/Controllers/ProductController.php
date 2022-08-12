<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Stock;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($categories_id, $id){
        $product = Product::find($id);

        $stocks = Stock::paginate(2);
        $products_new = Product::where('is_new', 1)->paginate(6);
        $products_popular = Product::where('is_popular', 1)->paginate(6);

        return view('product', [
            'product' => $product,
            'products_new' => $products_new,
            'products_popular' => $products_popular,
            'stocks' => $stocks,
        ]);
    }
}
