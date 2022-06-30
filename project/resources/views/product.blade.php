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
                    <div class="artikul">АРТИКУЛ: 1878 000 206</div>
                    <div class="line2"></div>
                    <div class="row">
                        <div class="" style="display:flex;">
                            <div class="price">518 руб./шт</div>
                            <div class="available">В НАЛИЧИИ</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="" style="display:flex;">
                            <div class="buy">
                                <div class="number" data-step="1" data-min="1" data-max="100">
                                    <input class="number-text" type="text" name="count" value="1">
                                    <a href="#" class="number-minus">−</a>
                                    <a href="#" class="number-plus">+</a>
                                </div>
                                <div class="button">КУПИТЬ</div>
                            </div>
                            <div class="call">ПЕРЕЗВОНИТЬ МНЕ</div>
                        </div>
                    </div>
                    <div class="text">Предлогаемые диски сцепления АЛЬКОР проходят строгий контроль качества. Все диски сцепления поставляются в индивидуальной упаковке, имеют сертификат качества и заводскую гарантию. Приобретая диски сцепления АЛЬКОР, Вы получаете оптимальное соотношение цена - качество! Поставки нашей продукции осуществляются со склада в Набережных Челнах. Предлогаем также диски сцепления МАЗ, МАЗ ЕВРО, МТЗ.</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="character">
                        <div class="character_title">ХАРАКТЕРИСТИКИ</div>
                        <div class="row character_div">
                            <div class="col-md-6">Объем, л</div><div class="col-md-6">200</div>
                            <div class="col-md-6">Объем, л</div><div class="col-md-6">200</div>
                            <div class="col-md-6">Объем, л</div><div class="col-md-6">200</div>
                            <div class="col-md-6">Объем, л</div><div class="col-md-6">200</div>
                            <div class="col-md-6">Объем, л</div><div class="col-md-6">200</div>
                            <div class="col-md-6">Объем, л</div><div class="col-md-6">200</div>
                            <div class="col-md-6">Объем, л</div><div class="col-md-6">200</div>
                        </div>
                    </div>
                    <div class="popular product">
                        <h1>Популярные товары</h1>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="swiper swiperProductPopular">
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
                    <div class="recomend product">
                        <h1>Новые товары</h1>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="swiper swiperProductRecomend">
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
                <div class="col-md-4">
                    <div class="form_calls">
                        <img src="../../../../images/form_calls.svg" alt="">
                        <h1>Нужна консультация?</h1>
                        <p>Оставьте заявку и мы перезвоним вам в ближайшее время, наши специалисты ответят на любой интересующий вопрос</p>
                        <a href="">ОБРАТНЫЙ ЗВОНОК</a>
                    </div>
                    <div class="stocks">
                        <div class="stock">
                            <a href="">
                                <div class="procent">Выгода 30%</div>
                                <div class="name">Диск сцепления Евро 205-206 (44 мм)</div>
                                <div class="price">
                                    <div class="new_price">2 500 ₽</div>
                                    <div class="old_price">4 500 ₽</div>
                                </div>
                                <img src="../../../images/stoks.svg" alt="">
                            </a>
                        </div>
                        <div class="stock">
                            <a href="">
                                <div class="procent">Выгода 30%</div>
                                <div class="name">Диск сцепления Евро 205-206 (44 мм)</div>
                                <div class="price">
                                    <div class="new_price">2 500 ₽</div>
                                    <div class="old_price">4 500 ₽</div>
                                </div>
                                <img src="../../../images/stoks.svg" alt="">
                            </a>
                        </div>
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


@endsection
