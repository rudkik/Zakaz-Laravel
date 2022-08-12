@extends('layouts.app')


@section('title-page')
    Product
@endsection

@section('content')
    <main class="page page-product">
        <div class="container">
            <h1>Каталог</h1>
            <div class="breadcrumbs">ГЛАВНАЯ - КАТАЛОГ</div>
            <div class="line"></div>
            <div class="row">
                <div class="col-md-5">
                    <div class="swiper swiperProductMain">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="../../../../images/product1.svg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="../../../../images/product2.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper swiperProductSmall">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="../../../../images/product1.svg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="../../../images/product2.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="artikul">АРТИКУЛ: {{ $product->article }}</div>
                    <div class="line2"></div>
                    <div class="row">
                        <div class="" style="display:flex;">
                            <div class="price">{{ $product->article }} руб./шт</div>
                            <div class="available">В НАЛИЧИИ</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="colum">
                            <div class="buy">
                                <div class="number" data-step="1" data-min="1" data-max="100">
                                    <input class="number-text" type="text" name="count" id="qty" value="1">
                                    <a href="#" class="number-minus">−</a>
                                    <a href="#" class="number-plus">+</a>
                                </div>
                                @csrf
                                <div class="button cart_button">КУПИТЬ</div>
                            </div>
                            <a class="call" data-toggle="modal" data-target="#exampleModal">ПЕРЕЗВОНИТЬ МНЕ</a>
                        </div>
                    </div>
                    <div class="text">{{ $product->new_string }}</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="character">
                        <div class="character_title">ХАРАКТЕРИСТИКИ</div>
                        <div class="row character_div">
                            <div class="col-md-6">Объем, л</div><div class="col-md-6">{{ $product->volume }}</div>
                            <div class="col-md-6">Материал</div><div class="col-md-6">{{ $product->material }}</div>
                            <div class="col-md-6">Применяемость</div><div class="col-md-6">{{ $product->usebility }}</div>
                            <div class="col-md-6">Размер, мм</div><div class="col-md-6">{{ $product->size }}</div>
                            <div class="col-md-6">Вес, кг</div><div class="col-md-6">{{ $product->weight }}</div>
                            <div class="col-md-6">Артикул</div><div class="col-md-6">{{ $product->article }}</div>
                            <div class="col-md-6">Гарантия</div><div class="col-md-6">{{ $product->garenti_count }}</div>
                            <div class="col-md-6">Рассрочка</div><div class="col-md-6">{{ $product->payment }}</div>
                        </div>
                    </div>
                    <div class="popular product">
                        <h1>Популярные товары</h1>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="swiper swiperProductPopular">
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
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="recomend product">
                        <h1>Новые товары</h1>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="swiper swiperProductRecomend">
                                    <div class="swiper-wrapper">
                                        @foreach($products_new as $product)
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
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form_calls">
                        <img src="../../../../images/form_calls.svg" alt="">
                        <h1>Нужна консультация?</h1>
                        <p>Оставьте заявку и мы перезвоним вам в ближайшее время, наши специалисты ответят на любой интересующий вопрос</p>
                        <a data-toggle="modal" data-target="#exampleModal">ОБРАТНЫЙ ЗВОНОК</a>
                    </div>
                    <div class="stocks">
                        @foreach($stocks as $stock)
                            <div class="stock">
                                <a href="">
                                    <div class="procent">Выгода {{ ($stock->old_price - $stock->new_price)/$stock->old_price * 100 }}%</div>
                                    <div class="name">{{ $stock->title }}</div>
                                    <div class="price">
                                        <div class="new_price">{{ $stock->new_price }} ₽</div>
                                        <div class="old_price">{{ $stock->old_price }} ₽</div>
                                    </div>
                                    <img src="{{ Storage::url($stock->image_uri) }}" alt="">
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="forms_always">
                        <h1>Будьте всегда в курсе!</h1>
                        <form action="">
                            <input type="text" placeholder="Ваш email">
                            <button type="submit"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
<script>
    $(document).ready(function () {
        $('.cart_button').click(function () {
            addToBasket();
        })
    })

    function addToBasket(){
        let id = {{ $product->id }};
        let qty = parseInt($('#qty').val());
        let total_qty = parseInt($('.total').text());
        total_qty += qty
        $('.total').text(total_qty)
         $.ajax({
            url: "{{route('add-to-basket')}}" ,
            type: "POST",
            data:{
                id: id,
                qty: qty,
            },
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        });
    }
</script>

@endsection
