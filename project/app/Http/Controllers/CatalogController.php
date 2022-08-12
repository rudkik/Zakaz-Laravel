<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{

    public function index(){
        $categories = Category::all();
        $products = Product::all();

        return view('catalog', [
            'categories' => $categories,
            'products' => $products,
        ]);
    }

    public function category($id){

        $products = Product::where('category_id', $id)->get();
        return view('category', [
            'products' => $products,
        ]);
    }

    public function search(Request $request){
        $search = $request->search;

        $products = Product::where('title', 'LIKE', "%{$search}%")->orderBy('title')->paginate(12);

        return view('category', [
            'products' => $products,
        ]);
    }

    public function filter(Request $request){
        $search = $request->search;

        $products = Product::where('title', 'LIKE', "%{$search}%")->orderBy('title')->paginate(12);

        return view('category', [
            'products' => $products,
        ]);
    }
}
