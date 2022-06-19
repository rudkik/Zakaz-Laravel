@extends('layouts.app')


@section('title-page')
    Stocks
@endsection

@section('content')
<main class="page page-stocks">
    <div class="container">
        <h1>Акции</h1>
        <div class="breadcrumbs">ГЛАВНАЯ - АКЦИИ</div>
        <div class="title">Регулярно обновляем наш каталог свежими акциями и предложениями, успейте приобрести нужный товар по выгодной цене.</div>
        <div class="button_stocks">
            <a class="new_stocks">Актуальные акции</a>
            <a class="all_stocks">За все время</a>
        </div>
    </div>
    <div class="stock">
        <div class="container">
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
</main>

@endsection
