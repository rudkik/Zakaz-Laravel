<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class AdminProduct extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth');
    }

    public function index(){
        $products = Product::all();
        return view('admin.product.product', [
            'products' => $products
        ]);
    }

    public function productNew(){
        return view('admin.product.new');
    }


    public function productUpdate($id){
        $product = Product::find($id);

        return view('admin.product.edit', [
            'product' => $product
        ]);
    }

    public function productUpdateSubmit($id, ProductRequest $request){
        $product = Product::find($id);

        $product->title = $request->title;
        $product->availability = $request->availability;
        $product->volume = $request->volume;
        $product->material = $request->material;
        $product->usebility = $request->usebility;
        $product->size = $request->size;
        $product->weight = $request->weight;
        $product->new_string = $request->new_string;
        $product->article = $request->article;
        $product->garenti_count = $request->garenti_count;
        $product->payment = $request->payment;
        $product->category_id = $request->category_id;

        $image = $request->file('image_uri')->store('public/products');
        $product->image_uri = $image;

        $product->save();

        return redirect()->route('admin-products');
    }

    public function productDelete($id){
        $products = Product::find($id);
        $products->delete();

        return $this->index();
    }

    public function productCreate(ProductRequest $request){

        $product = new Product();

        $product->title = $request->title;
        $product->availability = $request->availability;
        $product->volume = $request->volume;
        $product->material = $request->material;
        $product->usebility = $request->usebility;
        $product->size = $request->size;
        $product->weight = $request->weight;
        $product->new_string = $request->new_string;
        $product->article = $request->article;
        $product->garenti_count = $request->garenti_count;
        $product->payment = $request->payment;
        $product->category_id = $request->category_id;

        $image = $request->file('image_uri')->store('public/products');
        $product->image_uri = $image;



        $product->save();

        return redirect()->route('admin-products');
    }

}

