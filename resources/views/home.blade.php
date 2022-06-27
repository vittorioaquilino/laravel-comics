@extends('layouts.app')

@section('title')
    DC Comics | Home    
@endsection

@section('main')
    <div class="main__banner">
        <div class="main__series">Current Series</div>
    </div>
    <div class="main__container">
        @foreach ($comics as $item)
            <div class="card">
                <div class="card__img">
                    <img src="{{ $item['thumb'] }}" alt="">
                </div>
                <a href="{{ route('single-comics', ['id' => $item['id']]) }}">
                    <h3>{{ $item['series'] }}</h3>
                </a>
            </div>
        @endforeach
        <div class="load-more">
            <a href="#">Load more</a>
        </div>
    </div>
@endsection