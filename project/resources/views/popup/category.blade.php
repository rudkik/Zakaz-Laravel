<?php $categories = \App\Models\Category::all(); $products = \App\Models\Product::all(); ?>
<div class="dropdown">
    <div class="categories">
        @foreach($categories as $category)
            <div class="categor">
                <img src="{{ Storage::url($category->image_uri) }}" alt="">
                <a href="{{ route('catalog-categories', ['id' => $category->id]) }}">{{ $category->title }}</a>
            </div>
        @endforeach
    </div>
    <div class="line"></div>
    <div class="products">
        @foreach($products as $product)
        <div class="product">
            <img src="{{ Storage::url($product->image_uri) }}" alt="">
            <div class="title">{{ $product->title }}</div>
        </div>
        @endforeach
    </div>

</div>
