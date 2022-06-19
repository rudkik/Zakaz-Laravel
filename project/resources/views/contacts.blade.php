@extends('layouts.app')


@section('title-page')
    Contacts
@endsection

@section('content')
    <main class="page page-contacts">
        <div class="container">
            <h1>О компании</h1>
            <div class="breadcrumbs">ГЛАВНАЯ - О КОМПАНИИ</div>
            <div class="row">
                <div class="col-md-5">
                    <h1>Филиал 1 ТЦ «АЛЬКОР»</h1>
                    <div class="adres">
                        <div class="h5">Адрес:</div>
                        423806, Россия, Республика Татарстан, г. Набережные Челны,Казанский проспект 231
                    </div>
                    <div class="phone">
                        <div class="h5">Телефоны: </div>
                        (8552) 33-44-40, 33-00-80
                    </div>
                    <div class="email">
                        <div class="h5">E-mail:</div>
                        alkor_nch@mail.ru
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="map">
                        <img src="../images/map.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8"></div>
            </div>
        </div>
    </main>


@endsection
