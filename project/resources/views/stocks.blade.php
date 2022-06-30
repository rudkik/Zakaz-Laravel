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
            <a href="{{ route('stocks-active') }}" class="new_stocks  {{ (request()->is('stocks/active')) ? 'active' : '' }} ">Актуальные акции</a>
            <a href="{{ route('stocks-all') }}" class="all_stocks {{ (request()->is('stocks/all')) ? 'active' : '' }}">За все время</a>
        </div>
    </div>
    <div class="stock">
        <div class="container">
            <div class="row">
                @foreach($stocks as $stock)
                <div class="col-md-4">
                    <a href="">
                        <div class="procent">Выгода {{ ($stock->old_price - $stock->new_price)/$stock->old_price * 100 }}%</div>
                        <div class="name">{{ $stock->title }}</div>
                        <div class="price">
                            <div class="new_price">{{ $stock->new_price }}</div>
                            <div class="old_price">{{ $stock->old_price }}</div>
                        </div>
                        <img src="{{ Storage::url($stock->image_uri) }}" alt="">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>

@endsection
