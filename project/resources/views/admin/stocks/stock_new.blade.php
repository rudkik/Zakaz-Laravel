@extends('layouts.app')


@section('title-page')
    Contacts New
@endsection

@section('content')
    <main class="page page-contacts">
        <div class="container">
            <form action="{{ route('admin-stock-create') }}" method="post">
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
                </div>
                <div class="row record-input record-list">
                    <div class="col-md-3 record-title">
                        <label>
                           Старая цена
                        </label>
                    </div>
                    <div class="col-md-3">
                        <input name="old_price"  id="old_price" type="text" class="form-control" value="">
                    </div>
                    <div class="col-md-3 record-title">
                        <label>
                            Новая цена
                        </label>
                    </div>
                    <div class="col-md-3">
                        <input name="new_price"  id="new_price" type="text" class="form-control" value="">
                    </div>
                </div>
                <div class="row record-input record-list">
                    <div class="col-md-3 record-title">
                        <label>
                           Активна акция
                        </label>
                    </div>
                    <div class="col-md-3">
                        <input class="form-check-input" type="checkbox" value="0" id="is_active" name="is_active">
                    </div>
                </div>
                <div class="row record-input record-list">
                    <div class="col-md-3 record-title">
                        <label>
                           Карта
                        </label>
                    </div>
                    <div class="col-md-3">
                        <input type="file" class="form-control-file" id="image_uri" name="image_uri">
                    </div>

                </div>
                <button type="submit" class="btn btn-primary pull-right">Создать</button>
            </form>
        </div>
    </main>


@endsection
