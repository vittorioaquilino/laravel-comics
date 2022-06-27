@extends('layouts.app')

@section('title')
    DC Comics | Single Comic   
@endsection

@section('main')
    <div class="main__banner">
        <div class="card__img-2">
            <img src="{{ $singleComic['thumb'] }}" alt="">
        </div>
    </div>
    <div class="row-blue"></div>
    <div class="ms_container-1">
        <div class="card-description">
            <h1>{{ $singleComic['title'] }}</h1>
            <div class="price">
                <div class="left">
                    <div> U.S Price: <span>{{ $singleComic['price']}}</span></div>
                    <p>available</p>
                </div>
                <div class="right">
                    <p class="check">Check Availability</p>
                </div>
            </div>
            <div class="description">
                <p>{{ $singleComic['description']}}</p>
            </div>
        </div>
        <div class="card-advertising">
            <h4>advertisement</h4>
            <img src="{{ asset('images/adv.jpg') }}" alt="">
        </div>
    </div>
    <div class="ms_container-fluid">
        <div class="ms_container-2">
            <div class="talent">
                <h4>Talent</h4>
                <div class="wrapper bor-t bor-b">
                    <p class="title">Art by:</p>
                    <div>
                        @foreach ($singleComic['artists'] as $artist)
                            <small>{{ $artist }}</small>,
                        @endforeach
                    </div>
                </div>
                <div class="wrapper bor-b">
                    <p class="title">Written by:</p>
                    <div>
                        @foreach ($singleComic['writers'] as $writer)
                            <small>{{ $writer }}</small>,
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="specs">
                <h4>Specs</h4>
                <div class="wrapper-2 bor-t">
                    <div class="bor-b">
                        <p class="title">Series: </p>
                        <p>{{ $singleComic['series'] }}</p>
                    </div>
                    <div class="bor-b">
                        <p class="title">U.S. Price: </p>
                        <p>{{ $singleComic['price'] }}</p>
                    </div>
                    <div class="bor-b">
                        <p class="title">On Sale Date: </p>
                        <p>{{ $singleComic['sale_date'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection