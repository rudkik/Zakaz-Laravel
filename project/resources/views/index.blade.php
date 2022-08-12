@extends('layouts.app')


@section('title-page')
    Main
@endsection

@section('content')
<main>
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="swiper swiperBanner">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slide">
                                    <div class="text">
                                        Официальный дилер АО «Костромской Завод Автокомпонентов»
                                    </div>
                                    <a  data-toggle="modal" data-target="#exampleModal">ОБРАТНЫХ ЗВОНОК</a>
                                    <a href="{{ route('catalog') }}">СМОТРЕТЬ КАТАЛОГ</a>
                                </div>
                                <img src="../images/slide2.svg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <div class="slide">
                                    <div class="text">
                                        Официальный дилер АО «Костромской Завод Автокомпонентов»
                                    </div>
                                    <a data-toggle="modal" data-target="#exampleModal">ОБРАТНЫХ ЗВОНОК</a>
                                    <a href="{{ route('catalog') }}">СМОТРЕТЬ КАТАЛОГ</a>
                                </div>
                                <img src="../images/slide.svg" alt="">
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bigpost">
                        <a href="/">
                            <p>Запчасти от производителя</p>
                            <img src="../images/empty.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 20px">
                <div class="col-md-4 smBanner">
                    <div class="smallBanner">
                        <a href="">
                            <p>Барабаны тормозные</p>
                            <img src="../images/smallBaner-1.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 smBanner">
                    <div class="smallBanner">
                        <a href="">
                            <p>Поршневые группы</p>
                            <img src="../images/smallBaner-2.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 smBanner">
                    <div class="smallBanner">
                        <a href="">
                            <p>Диски сцепления</p>
                            <img src="../images/smallBaner-3.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="advantage">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="../images/advantages-1.svg" alt="">
                    <p>Выгодные условия</p>
                </div>
                <div class="col-md-3">
                    <img src="../images/advantages-2.svg" alt="">
                    <p>Бесплатная доставка по России</p>
                </div>
                <div class="col-md-3">
                    <img src="../images/advantages-3.svg" alt="">
                    <p>Дополнительная бесплатная гарантия</p>
                </div>
                <div class="col-md-3">
                    <img src="../images/advantages-4.svg" alt="">
                    <p>Более 20 лет на рынке</p>
                </div>
            </div>
        </div>
    </div>
    <div class="catalog">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="filter">
                        <h1>Фильтр по параметрам</h1>
                        <form action="">
                            @csrf
                            <div class="filter_wrapper">
                                <span class="price-title">Цена</span>
                                <div class="price-field">
                                    <input type="range" min="100" max="500" value="135" id="lower">
                                    <input type="range" min="100" max="500" value="500" id="upper">
                                </div>
                                <div class="price-wrap">
                                    <div class="price-wrap-1">
                                        <label for="one" style="display:none;"></label>
                                        <input id="one">
                                    </div>
                                    <div class="price-wrap-2">
                                        <label for="two"></label>
                                        <input id="two">
                                    </div>
                                </div>
                            </div>
                            <div class="filter_wrapper">
                                <span class="price-title">Категории</span>
                                <div class="filter-item-container">
                                    <div class="check">
                                        <input id="availability_0" type="checkbox">
                                        <label for="availability_0">Наличие в магазин</label>
                                    </div>
                                    <div class="check">
                                        <input id="availability_0" type="checkbox">
                                        <label for="availability_0">Наличие в магазин</label>
                                    </div>
                                    <div class="check">
                                        <input id="availability_0" type="checkbox">
                                        <label for="availability_0">Наличие в магазин</label>
                                    </div>
                                    <div class="check">
                                        <input id="availability_0" type="checkbox">
                                        <label for="availability_0">Наличие в магазин</label>
                                    </div>
                                </div>
                            </div>
                            <div class="filter_wrapper">
                                <span class="price-title">Размер</span>
                                <div class="check">
                                    <input id="availability_0" type="checkbox">
                                    <label for="availability_0">Наличие в магазин</label>
                                </div>
                                <div class="check">
                                    <input id="availability_0" type="checkbox">
                                    <label for="availability_0">Наличие в магазин</label>
                                </div>
                                <div class="check">
                                    <input id="availability_0" type="checkbox">
                                    <label for="availability_0">Наличие в магазин</label>
                                </div>
                            </div>
                            <div class="filter_available"></div>
{{--                            <div class="filter_available"></div>--}}
                            <button type="submit">Смотреть</button>
                        </form>

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="catalog_product product">
                        @foreach($products as $product)
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
                        @endforeach
                    </div>
                    <a href="{{ route('catalog') }}" class="more-catalog">СМОТРЕТЬ ВСЕ</a>
                </div>
            </div>
        </div>
    </div>
    <div class="forms">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1>Будьте всегда в курсе!</h1>
                    <p>Узнавайте о скидках и акциях первыми</p>
                    <form action="{{ route('send-mail-recall') }}" class="popup" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" placeholder="Ваш email">
                        <button type="submit"></button>
                    </form>
                </div>
                <div class="col-md-8">
                    <h1>Выгодное сотрудничество</h1>
                    <p>Мы не стремимся совершить одну две выгодные для нас сделки, не учитывающие интересы наших партнеров.</p>
                    <a data-toggle="modal" data-target="#exampleModal">ЗАКАЗАТЬ ЗВОНОК</a>
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
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="new product">
        <div class="container">
            <h1>Новые товары</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="swiper swiperNew">
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
    <div class="stock">
        <div class="container">
            <div class="header">
                <h1>Выгодные предложения</h1>
                <a href="{{ route('stocks-all') }}" class="more">ВСЕ АКЦИИ</a>
            </div>
            <div class="row">
                @foreach($stocks as $stock)
                    <div class="col-md-4 smBanner">
                        <a href="">
                            <div class="procent">Выгода {{ ($stock->old_price - $stock->new_price)/$stock->old_price * 100 }}%</div>
                            <div class="name">{{ $stock->title }}</div>
                            <div class="price">
                                <div class="new_price">{{ $stock->new_price }}</div>
                                <div class="old_price">{{ $stock->old_price }}</div>
                            </div>
                            <img src="{{ Storage::url($stock->image_uri) }}" alt="">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="company">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>О компании</h1>
                    <p>Уважаемые господа, ТЦ «АЛЬКОР» приветствует Вас! <br><br>
                        Выражаем Вам свою благодарность за интерес, проявленный к нашей компании. <br><br>
                        Наша компания работает на рынке запасных частей с 1996 года. За это время накопили многолетний опыт работы и зарекомендовали себя, как надежный и добросовестный партнер...</p>
                    <a href="{{ route('company') }}" class="more">ПОДРОБНЕЕ</a>
                </div>
                <div class="col-md-6">
                    <div class="map">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A157407a16303e7b32980584640d2f622a669ed2c94877b23c059b44fee6f08cf&amp;width=689&amp;height=305&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    var lowerSlider = document.querySelector('#lower');
    var  upperSlider = document.querySelector('#upper');

    document.querySelector('#two').value=upperSlider.value;
    document.querySelector('#one').value=lowerSlider.value;

    var  lowerVal = parseInt(lowerSlider.value);
    var upperVal = parseInt(upperSlider.value);

    upperSlider.oninput = function () {
        lowerVal = parseInt(lowerSlider.value);
        upperVal = parseInt(upperSlider.value);

        if (upperVal < lowerVal + 4) {
            lowerSlider.value = upperVal - 4;
            if (lowerVal == lowerSlider.min) {
                upperSlider.value = 4;
            }
        }
        document.querySelector('#two').value=this.value
    };

    lowerSlider.oninput = function () {
        lowerVal = parseInt(lowerSlider.value);
        upperVal = parseInt(upperSlider.value);
        if (lowerVal > upperVal - 4) {
            upperSlider.value = lowerVal + 4;
            if (upperVal == upperSlider.max) {
                lowerSlider.value = parseInt(upperSlider.max) - 4;
            }
        }
        document.querySelector('#one').value=this.value
    };
</script>
@endsection
