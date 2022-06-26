@extends('layouts.app')

@section('title')
    DC Comics Home    
@endsection

@section('main_content')
    <div class="banner">
        <div class="series">Current Series</div>
    </div>
    <div class="main__container">
        @foreach ($comics as $item)
            <div class="card">
                <div class="card__img">
                    <img src="{{ $item['thumb'] }}" alt="">
                </div>
                <h3>{{ $item['series'] }}</h3>
            </div>
        @endforeach
        <div class="load-more">
            <a href="#">Load more</a>
        </div>
    </div>
@endsection