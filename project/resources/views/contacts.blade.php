@extends('layouts.app')


@section('title-page')
    Contacts
@endsection

@section('content')
    <main class="page page-contacts">
        <div class="container">
            <h1>О компании</h1>
            <div class="breadcrumbs">ГЛАВНАЯ - О КОМПАНИИ</div>
            @foreach($contacts as $contact)
            <div class="row">
                <div class="col-md-5">
                    <h1>{{ $contact->title }}</h1>
                    <div class="adres">
                        <div class="h5">Адрес:</div>
                        {{ $contact->adres }}
                    </div>
                    <div class="phone">
                        <div class="h5">Телефоны: </div>
                        {{ $contact->phone }}
                    </div>
                    <div class="email">
                        <div class="h5">E-mail:</div>
                        {{ $contact->email }}
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="map">
                        {{ $contact->map }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>


@endsection
