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
                    <div class="categor">
                        <img src="" alt="">
                        <a href="">Поршневая группы</a>
                    </div>
                    <div class="categor">
                        <img src="" alt="">
                        <a href="">Поршневая группы</a>
                    </div>
                    <div class="categor">
                        <img src="" alt="">
                        <a href="">Поршневая группы</a>
                    </div>
                    <div class="categor">
                        <img src="" alt="">
                        <a href="">Поршневая группы</a>
                    </div>
                    <div class="categor">
                        <img src="" alt="">
                        <a href="">Поршневая группы</a>
                    </div>
                    <div class="categor">
                        <img src="" alt="">
                        <a href="">Поршневая группы</a>
                    </div>
            </div>
            <div class="catalog">
                <div class="row">
                        <div class="col-md-3">
                            <div class="filter">
                                <h1>Фильтр по параметрам</h1>
                                <form action="">
                                    <div class="filter_price">
                                        <div class="price-range-slider">

                                            <p class="range-value">
                                                <input type="text" id="amount" readonly>
                                            </p>
                                            <div id="slider-range" class="range-bar"></div>

                                        </div>
                                    </div>
                                    <div class="filter_category"></div>
                                </form>

                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="catalog_product product">
                                <div class="product-item">
                                    <img src="../images/disk.svg" alt="">
                                    <div class="name">Диск сцепления Камские Автомобили</div>
                                    <div class="code">140-1601130</div>
                                    <div class="price">35 175 ₽</div>
                                    <div class="buy">
                                        <div class="number" data-step="1" data-min="1" data-max="100">
                                            <input class="number-text" type="text" name="count" value="1">
                                            <a href="#" class="number-minus">−</a>
                                            <a href="#" class="number-plus">+</a>
                                        </div>
                                        <div class="button">КУПИТЬ</div>
                                    </div>
                                    <div class="more">ПОДРОБНЕЕ</div>
                                </div>
                                <div class="product-item">
                                    <img src="../images/disk.svg" alt="">
                                    <div class="name">Диск сцепления Камские Автомобили</div>
                                    <div class="code">140-1601130</div>
                                    <div class="price">35 175 ₽</div>
                                    <div class="buy">
                                        <div class="number" data-step="1" data-min="1" data-max="100">
                                            <input class="number-text" type="text" name="count" value="1">
                                            <a href="#" class="number-minus">−</a>
                                            <a href="#" class="number-plus">+</a>
                                        </div>
                                        <div class="button">КУПИТЬ</div>
                                    </div>
                                    <div class="more">ПОДРОБНЕЕ</div>
                                </div>
                                <div class="product-item">
                                    <img src="../images/disk.svg" alt="">
                                    <div class="name">Диск сцепления Камские Автомобили</div>
                                    <div class="code">140-1601130</div>
                                    <div class="price">35 175 ₽</div>
                                    <div class="buy">
                                        <div class="number" data-step="1" data-min="1" data-max="100">
                                            <input class="number-text" type="text" name="count" value="1">
                                            <a href="#" class="number-minus">−</a>
                                            <a href="#" class="number-plus">+</a>
                                        </div>
                                        <div class="button">КУПИТЬ</div>
                                    </div>
                                    <div class="more">ПОДРОБНЕЕ</div>
                                </div>
                                <div class="product-item">
                                    <img src="../images/disk.svg" alt="">
                                    <div class="name">Диск сцепления Камские Автомобили</div>
                                    <div class="code">140-1601130</div>
                                    <div class="price">35 175 ₽</div>
                                    <div class="buy">
                                        <div class="number" data-step="1" data-min="1" data-max="100">
                                            <input class="number-text" type="text" name="count" value="1">
                                            <a href="#" class="number-minus">−</a>
                                            <a href="#" class="number-plus">+</a>
                                        </div>
                                        <div class="button">КУПИТЬ</div>
                                    </div>
                                    <div class="more">ПОДРОБНЕЕ</div>
                                </div>
                            </div>
                            <div class="more-catalog">СМОТРЕТЬ ВСЕ</div>
                        </div>
                    </div>
            </div>
        </div>
    </main>


@endsection
