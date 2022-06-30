@extends('layouts.app')


@section('title-page')
    Product
@endsection

@section('content')
    <main class="page page-payment">
        <div class="container">
            <h1>Каталог</h1>
            <div class="breadcrumbs">ГЛАВНАЯ - КАТАЛОГ</div>
            <div class="row">
                <div class="col-md-9">
                    <div style="display: flex">
                        <div class="delivery">
                            <div style="display:flex;">
                                <h1>Способ доставки</h1>
                                <img src="../../images/delivery.svg" alt="">
                            </div>
                            <label for="">
                                <input type="radio" name="delivery" value="Самовывоз">Самовывоз
                            </label>
                            <label for="">
                                <input type="radio" name="delivery" value="Доставка">Доставка
                            </label>
                        </div>
                        <div class="payments">
                            <div style="display:flex;">
                                <h1>Способ оплаты</h1>
                                <img src="../../images/payment.svg" alt="">
                            </div>
                            <label for="">
                                <input type="radio" name="delivery" value="Самовывоз">Самовывоз
                            </label>
                            <label for="">
                                <input type="radio" name="delivery" value="Доставка">Доставка
                            </label>
                            <label for="">
                                <input type="radio" name="delivery" value="Самовывоз">Самовывоз
                            </label>
                            <label for="">
                                <input type="radio" name="delivery" value="Доставка">Доставка
                            </label>
                        </div>
                    </div>
                    <form action="" class="user">
                        <div class="box">
                            <div class="" style="display:flex;">
                                <h1>Данные покупателя</h1>
                                <img src="../../images/user.svg" alt="" style="margin-left: auto">
                            </div>
                            <input type="text" placeholder="1">
                            <input type="text" placeholder="1">
                            <input type="text" placeholder="1">
                            <input type="text" placeholder="1">
                            <input type="text" placeholder="1">
                            <input type="text" placeholder="1">
                            <label><input type="checkbox"> Доставка до дверей</label>
                        </div>
                        <button type="submit">ОФОРМИТЬ ЗАКАЗ</button>
                        <label class="agree"><input type="checkbox"> Я согласен на обработку персональных данных</label>
                    </form>
                </div>
                <div class="col-md-3">
                    <div class="zakaz">
                        <div class="rows">
                            <h1>Ваш заказ</h1>
                            <a href="">Изменить</a>
                        </div>
                        <div class="rows">
                            <p>Товаров на:</p>
                            <p>25 360 ₽</p>
                        </div>
                        <div class="rows">
                            <p>Доставка:</p>
                            <p>25 360 ₽</p>
                        </div>
                        <div class="line"></div>
                        <div class="rows">
                            <h3>Итого:</h3>
                            <h3>25 360 ₽</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection
