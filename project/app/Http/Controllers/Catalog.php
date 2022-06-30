<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class Catalog extends Controller
{
    public function index(){
        $category = Category::all();

        return view('catalog', [
            'categories' => $category,
        ]);
    }

    public function category($id){
        $category = Category::find($id);

        $products = Product::where('category_id', $id)->get();
        return view('category', [
            'category' => $category,
            'products' => $products,
        ]);
    }
}
