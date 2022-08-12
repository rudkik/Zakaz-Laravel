<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


use App\Models\Category;
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
        $categories = Category::all();
        return view('admin.product.products', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function productNew(){
        $categories = Category::all();
        return view('admin.product.new',[
            'categories' => $categories
        ]);
    }


    public function productUpdate($id){
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.product.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function productUpdateSubmit($id, ProductRequest $request){
        $product = Product::find($id);

        $product->title = $request->title;
        $product->volume = $request->volume;
        $product->material = $request->material;
        $product->usebility = $request->usebility;
        $product->size = $request->size;
        $product->weight = $request->weight;
        $product->new_string = $request->new_string;
        $product->price = $request->price;
        $product->article = $request->article;
        $product->garenti_count = $request->garenti_count;
        $product->payment = $request->payment;
        $product->category_id = $request->category_id;
        if (NULL == $request->availability){
            $product->availability = 0;
        }else{
            $product->availability = $request->availability;
        }
        if (NULL == $request->is_popular){
            $product->is_popular = 0;
        }else{
            $product->is_popular = $request->is_popular;
        }
        if (NULL == $request->is_new){
            $product->is_new = 0;
        }else{
            $product->is_new = $request->is_new;
        }
        if (NULL == $request->is_active){
            $product->is_active = 0;
        }else{
            $product->is_active = $request->is_active;
        }

        if (null != $request->file('image_uri')){
            $image = $request->file('image_uri')->store('public/products');
            $product->image_uri = $image;
        }

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
        $product->volume = $request->volume;
        $product->material = $request->material;
        $product->usebility = $request->usebility;
        $product->size = $request->size;
        $product->weight = $request->weight;
        $product->new_string = $request->new_string;
        $product->price = $request->price;
        $product->article = $request->article;
        $product->garenti_count = $request->garenti_count;
        $product->payment = $request->payment;
        $product->category_id = $request->category_id;

        if (NULL == $request->availability){$product->availability = 0;}else{
            $product->availability = $request->availability;}
        if (NULL == $request->is_popular){$product->is_popular = 0;}else{
            $product->is_popular = $request->is_popular;}
        if (NULL == $request->is_new){$product->is_new = 0;}else{
            $product->is_new = $request->is_new;}
        if (NULL == $request->is_active){$product->is_active = 0;}else{
            $product->is_active = $request->is_active;}

        if ($request->file('image_uri') != NULL){
            $image = [];
            foreach ($request->file('image_uri') as $file){
                $image[] = $file->store('public/products');
            }
            dd($request->files);
            $product->image_uri = $image;
        }

        $product->save();

        return redirect()->route('admin-products');
    }

}

