@extends('layouts.app')


@section('title-page')
    Catalog
@endsection

@section('content')
    <main class="page page-catalog">
        <div class="container">
            <h1>Каталог</h1>
            <div class="breadcrumbs">ГЛАВНАЯ - КАТАЛОГ</div>
            <div class="categories">
                @foreach($categories as $category)
                    <div class="categor">
                        <img src="{{ Storage::url($category->image_uri) }}" alt="">
                        <a href="{{ route('catalog-categories', ['id' => $category->id]) }}">{{ $category->title }}</a>
                    </div>
                @endforeach
            </div>
            <div class="catalog">
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
                            <div class="more-catalog">СМОТРЕТЬ ВСЕ</div>
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
