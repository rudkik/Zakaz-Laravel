<?php


namespace App\Http\Controllers;
use App\Mail\EmailRecall;
use App\Models\Category;
use App\Models\Product;
use App\Models\Stock;
use Illuminate\Http\Request;

class Frontend extends Controller
{


    public function index(){
        $products = Product::paginate(6);
        $product_cat = Product::paginate(9);

        $categories = Category::all();
        $stocks = Stock::paginate(3);
        $products_new = Product::where('is_new', 1)->paginate(6);
        $products_popular = Product::where('is_popular', 1)->paginate(6);
        return view('index', [
                'products' => $products,
                'products_new' => $products_new,
                'products_popular' => $products_popular,
                'stocks' => $stocks,
                'categories' => $categories,
                'product_cat' => $product_cat,
            ]);
    }
}

