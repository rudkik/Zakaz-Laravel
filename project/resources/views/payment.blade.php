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
{{--                    <div class="colum">--}}
{{--                        <div class="delivery">--}}
{{--                            <div style="display:flex;">--}}
{{--                                <h1>Способ доставки</h1>--}}
{{--                                <img src="../../images/delivery.svg" alt="">--}}
{{--                            </div>--}}
{{--                            <label for="">--}}
{{--                                <input type="radio" name="delivery" value="Самовывоз">Самовывоз--}}
{{--                            </label>--}}
{{--                            <label for="">--}}
{{--                                <input type="radio" name="delivery" value="Доставка">Доставка--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <div class="payments">--}}
{{--                            <div style="display:flex;">--}}
{{--                                <h1>Способ оплаты</h1>--}}
{{--                                <img src="../../images/payment.svg" alt="">--}}
{{--                            </div>--}}
{{--                            <label for="">--}}
{{--                                <input type="radio" name="delivery" value="Самовывоз">Самовывоз--}}
{{--                            </label>--}}
{{--                            <label for="">--}}
{{--                                <input type="radio" name="delivery" value="Доставка">Доставка--}}
{{--                            </label>--}}
{{--                            <label for="">--}}
{{--                                <input type="radio" name="delivery" value="Самовывоз">Самовывоз--}}
{{--                            </label>--}}
{{--                            <label for="">--}}
{{--                                <input type="radio" name="delivery" value="Доставка">Доставка--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <form action="{{ route('send-mail-order') }}" class="user" method="post" style="margin-top: 30px;">
                        @csrf
                        <div class="box">
                            <div class="" style="display:flex;">
                                <h1>Данные покупателя</h1>
                                <img src="../../images/user.svg" alt="" >
                            </div>
                            <input type="text" placeholder="Введите имя*" required name="name">
                            <input type="text" placeholder="E-mail" name="email">
                            <input type="text" placeholder="Телефон*" name="phone" required>
                            <input type="text" placeholder="Город доставки*" name="city" required>
                            <input type="text" placeholder="Транспортная компания*" name="name_company" required>
                            <input type="text" placeholder="Комментарий к заказу" name="comment">
{{--                            <label><input type="checkbox"> Доставка до дверей</label>--}}
                        </div>
                        <button type="submit">ОФОРМИТЬ ЗАКАЗ</button>
{{--                        <label class="agree"><input type="checkbox"> Я согласен на обработку персональных данных</label>--}}
                    </form>
                </div>
                <div class="col-md-3">
                    <div class="zakaz">
                        <div class="rows">
                            <h1>Ваш заказ</h1>
                            <a href="{{ route('basket') }}">Изменить</a>
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
<script>
    // $(document).ready(function () {
    //     if ($(window).width() < 768) {
    //         $('.page-payment .row > div').each(function () {
    //             $(this).insertBefore($(this).prev());
    //         });
    //     }
    // });
</script>

@endsection
