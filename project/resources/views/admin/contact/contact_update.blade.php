@extends('layouts.app')


@section('title-page')
    Contacts
@endsection

@section('content')
    <main class="page page-contacts">
        <div class="container">
            <form action="{{ route('admin-contact-submit', $contact->id) }}" method="post">
                @csrf
                <div class="row record-input record-list">
                    <div class="col-md-3 record-title">
                        <label>
                            Заголовок
                        </label>
                    </div>
                    <div class="col-md-3">
                        <input name="title" type="text" class="form-control" value="{{ $contact->title }}">
                    </div>
                    <div class="col-md-3 record-title">
                        <label>
                            Адрес
                        </label>
                    </div>
                    <div class="col-md-3">
                        <input name="adres" type="text" class="form-control" value="{{ $contact->adres }}">
                    </div>
                    <div class="col-md-3 record-title">
                        <label>
                            Номер телефона
                        </label>
                    </div>
                    <div class="col-md-3">
                        <input name="phone" type="text" class="form-control" value="{{ $contact->phone }}">
                    </div>
                    <div class="col-md-3 record-title">
                        <label>
                            Эмайл
                        </label>
                    </div>
                    <div class="col-md-3">
                        <input name="email" type="text" class="form-control" value="{{ $contact->email }}">
                    </div>
                    <div class="col-md-3 record-title">
                        <label>
                            Карта
                        </label>
                    </div>
                    <div class="col-md-3">
                        <input name="map" type="text" class="form-control" value="{{ $contact->map }}">
                    </div>

                </div>
                <button type="submit" class="btn btn-primary pull-right">Изменить</button>
            </form>
        </div>
    </main>


@endsection
