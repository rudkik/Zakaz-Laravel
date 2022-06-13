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
                    <img src="" alt="">
                    <p></p>
                </div>
                <div class="col-md-3">
                    <img src="" alt="">
                    <p></p>
                </div>
                <div class="col-md-3">
                    <img src="" alt="">
                    <p></p>
                </div>
                <div class="col-md-3">
                    <img src="" alt="">
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection
