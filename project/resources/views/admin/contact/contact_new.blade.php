@extends('layouts.app')


@section('title-page')
    Contacts New
@endsection

@section('content')
    <main class="page page-contacts">
        <div class="container">
            <form action="{{ route('admin-contacts-create') }}" method="post">
                @csrf
                <div class="row record-input record-list">
                    <div class="col-md-3 record-title">
                        <label>
                           Заголовок
                        </label>
                    </div>
                    <div class="col-md-3">
                        <input name="title" id="title" type="text" class="form-control" value="">
                    </div>
                    <div class="col-md-3 record-title">
                        <label>
                           Адрес
                        </label>
                    </div>
                    <div class="col-md-3">
                        <input name="adres"  id="adres" type="text" class="form-control" value="">
                    </div>
                    <div class="col-md-3 record-title">
                        <label>
                           Номер телефона
                        </label>
                    </div>
                    <div class="col-md-3">
                        <input name="phone"  id="phone" type="text" class="form-control" value="">
                    </div>
                    <div class="col-md-3 record-title">
                        <label>
                           Эмайл
                        </label>
                    </div>
                    <div class="col-md-3">
                        <input name="email" id="email" type="text" class="form-control" value="">
                    </div>
                    <div class="col-md-3 record-title">
                        <label>
                           Карта
                        </label>
                    </div>
                    <div class="col-md-3">
                        <input name="map" id="map" type="text" class="form-control" value="">
                    </div>

                </div>
                <button type="submit" class="btn btn-primary pull-right">Создать</button>
            </form>
        </div>
    </main>


@endsection
