@extends('admin.layouts.app')


@section('title-page')
    Contacts New
@endsection

@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Создание Контактов</h3>
        </div>
        <form action="{{ route('admin-contact-create') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Заголовок</label>
                    <input name="title" id="title" type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Адрес</label>
                    <input name="adres"  id="adres" type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Номер телефона</label>
                    <input name="phone"  id="phone" type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Почта</label>
                    <input name="email" id="email" type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Карта</label>
                    <input name="map" id="map" type="text" class="form-control" value="">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Создать</button>
            </div>
        </form>
    </div>

@endsection
