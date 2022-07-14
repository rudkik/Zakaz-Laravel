<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StockRequest;
use Illuminate\Support\Facades\Storage;

class AdminCategory extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth');
    }

    public function index(){
        $category = Category::all();
        return view('admin.category.category', [
            'category' => $category
        ]);
    }

    public function categoryNew(){
        return view('admin.category.new');
    }


    public function categoryUpdate($id){
        $category = Category::find($id);

        return view('admin.category.edit', [
            'category' => $category
        ]);
    }

    public function categoryUpdateSubmit($id, StockRequest $request){
        $category = Category::find($id);

        $category->title = $request->title;
        $image = $request->file('image_uri')->store('public/category');
        $category->image_uri = $image;

        $category->save();

        return redirect()->route('admin-category');
    }

    public function categoryDelete($id){
        $categorys = Category::find($id);
        $categorys->delete();

        return $this->index();
    }

    public function categoryCreate(StockRequest $request){

        $category = new Category();

        $category->title = $request->title;
        $image = $request->file('image_uri')->store('public/category');
        $category->image_uri = $image;

        $category->save();

        return redirect()->route('admin-category');
    }

}

