@extends('layouts.app')


@section('title-page')
    Product
@endsection

@section('content')
    <main class="page page-basket">
        <div class="container">
            <h1>Каталог</h1>
            <div class="breadcrumbs">ГЛАВНАЯ - КАТАЛОГ</div>
            <div class="row">
                <div class="col-md-8">
                    <?php $products = \Cart::session($_COOKIE['cart_id'])->getContent() ?>
                    @foreach($products as $product)
                        <div class="product">
                            <img src="" alt="">
                            <div class="title">{{ $product->name }}</div>
                            <div class="line"></div>
                            <div class="number" data-step="1" data-min="1" data-max="100">
                                <input class="number-text" type="text" name="count" value="{{ $product->quantity }}">
                                <a href="#" class="number-minus">−</a>
                                <a href="#" class="number-plus">+</a>
                            </div>
                            <div class="price">{{ $product->price }} ₽</div>
                            <div class="delete"></div>
                        </div>
                    @endforeach
                    <div class="product">
                        <img src="../../images/product1.svg" alt="">
                        <div class="title">Диск сцепления Камские Автомобили</div>
                        <div class="line"></div>
                        <div class="number" data-step="1" data-min="1" data-max="100">
                            <input class="number-text" type="text" name="count" value="1">
                            <a href="#" class="number-minus">−</a>
                            <a href="#" class="number-plus">+</a>
                        </div>
                        <div class="price">4 368 ₽</div>
                        <div class="delete"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="summa">
                        <div class="count_product">
                            <div class="count">5 товаров</div>
                            <span></span>
                            <div class="price">25 368 ₽</div>
                        </div>
                        <div class="promo">
                            <input type="text">
                            <button>Применить</button>
                        </div>
                    </div>
                    <div class="itog">
                        <div class="" style="display: flex">
                            <h1>Итог</h1>
                            <div class="price">25 368 ₽</div>
                        </div>
                        <p>Сумма с учетом НДС</p>
                        <a href="{{ route('payment') }}">Оформить заказ</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="popular product">
            <div class="container">
                <h1>Популярные товары</h1>
                <div class="row">
                    <div class="col-md-12">
                        <div class="swiper swiperPopular">
                            <div class="swiper-wrapper">
                                @foreach($products_popular as $product)
                                    <div class="swiper-slide">
                                        <div class="product-item">
                                            <img src="{{ Storage::url($product->image_uri) }}" alt="">
                                            <div class="name">{{ $product->title }}</div>
                                            <div class="code">{{ $product->article }}</div>
                                            <div class="price">{{ $product->price }} ₽</div>
                                            <div class="buy">
                                                <div class="number" data-step="1" data-min="1" data-max="100">
                                                    <input class="number-text" type="text" name="count" value="1">
                                                    <a href="#" class="number-minus">−</a>
                                                    <a href="#" class="number-plus">+</a>
                                                </div>
                                                <a href="{{ route('product', ['categories_id' => $product->category_id, 'id' => $product->id,]) }}" class="button">КУПИТЬ</a>
                                            </div>
                                            <a href="{{ route('product', ['categories_id' => $product->category_id, 'id' => $product->id,]) }}" class="more">ПОДРОБНЕЕ</a>
                                        </div>
                                    </div>
                                @endforeach
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection
