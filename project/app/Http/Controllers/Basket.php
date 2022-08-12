<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;

class Basket extends Controller
{
    public function basket(){
        $products_popular = Product::where('is_popular', 1)->paginate(6);

        return view('basket',[
                'products_popular' => $products_popular,
            ]);
    }

    public function payment(){
        $products_popular = Product::where('is_popular', 1)->paginate(6);

        return view('payment',[
            'products_popular' => $products_popular,
        ]);
    }

    public function addToBasket(Request $request){
        $product = Product::find($request->id);

        if (!isset($_COOKIE['cart_id'])){
            setcookie('cart_id', uniqid());
        }
        $cart_id = $_COOKIE['cart_id'];
        \Cart::session($cart_id);

        \Cart::add([
            'id' => $product->id,
            'name' => $product->title,
            'price' => $product->price,
            'quantity' => (int) $request->qty,
            'attributes' => [
                'img' => $product->image_uri
            ]

        ]);
        return response()->json(\Cart::getContent());
    }
}
