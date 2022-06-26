<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$data = config('data');
$comics = config('comics');
$data = array_merge($data, ['comics' => $comics]);

Route::get('/', function () use($data){
    return view('home', $data);
})->name('home');

Route::get('/about', function () use($data) {
    return view('home', $data);
})->name('home');
