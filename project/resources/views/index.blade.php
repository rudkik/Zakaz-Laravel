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
                                    <a href="">ОБРАТНЫХ ЗВОНОК</a>
                                    <a href="">СМОТРЕТЬ КАТАЛОГ</a>
                                </div>
                                <img src="../images/slide.svg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <div class="slide">
                                    <div class="text">
                                        2
                                    </div>
                                    <a href=""></a>
                                    <a href=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide">
                                    <div class="text">
                                        3
                                    </div>
                                    <a href=""></a>
                                    <a href=""></a>
                                </div>
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
                            <img src="../images/bigbanner.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 20px">
                <div class="col-md-4">
                    <div class="smallBanner">
                        <a href="">
                            <p>Барабаны тормозные</p>
                            <img src="../images/smallBaner-1.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="smallBanner">
                        <a href="">
                            <p>Поршневые группы</p>
                            <img src="../images/smallBaner-2.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
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
    <div class="forms">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1>Будьте всегда в курсе!</h1>
                    <p>Узнавайте о скидках и акциях первыми</p>
                    <form action="">
                        <input type="text" placeholder="Ваш email">
                        <button type="submit"></button>
                    </form>
                </div>
                <div class="col-md-8">
                    <h1>Выгодное сотрудничество</h1>
                    <p>Мы не стремимся совершить одну две выгодные для нас сделки, не учитывающие интересы наших партнеров.</p>
                    <a href="">ЗАКАЗАТЬ ЗВОНОК</a>
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
                            <div class="swiper-slide">
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
                            <div class="swiper-slide">
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
                            <div class="swiper-slide">
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
                            <div class="swiper-slide">
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
                            <div class="swiper-slide">
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
                            <div class="swiper-slide">
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
                            <div class="swiper-slide">
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
                            <div class="swiper-slide">
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
                            <div class="swiper-slide">
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
                            <div class="swiper-slide">
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
                            <div class="swiper-slide">
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
                            <div class="swiper-slide">
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
                <a href="" class="more">ВСЕ АКЦИИ</a>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="">
                        <div class="procent">Выгода 30%</div>
                        <div class="name">Диск сцепления Евро 205-206 (44 мм)</div>
                        <div class="price">
                            <div class="new_price">2 500 ₽</div>
                            <div class="old_price">4 500 ₽</div>
                        </div>
                        <img src="../images/stoks.svg" alt="">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <div class="procent">Выгода 30%</div>
                        <div class="name">Диск сцепления Евро 205-206 (44 мм)</div>
                        <div class="price">
                            <div class="new_price">2 500 ₽</div>
                            <div class="old_price">4 500 ₽</div>
                        </div>
                        <img src="../images/stoks.svg" alt="">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <div class="procent">Выгода 30%</div>
                        <div class="name">Диск сцепления Евро 205-206 (44 мм)</div>
                        <div class="price">
                            <div class="new_price">2 500 ₽</div>
                            <div class="old_price">4 500 ₽</div>
                        </div>
                        <img src="../images/stoks.svg" alt="">
                    </a>
                </div>
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
                    <a href="" class="more">ПОДРОБНЕЕ</a>
                </div>
                <div class="col-md-6">
                    <div class="map">

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection
