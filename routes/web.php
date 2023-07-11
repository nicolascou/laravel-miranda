<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\OfferController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/rooms', [RoomController::class, 'index']);

Route::get('/rooms/{id}', [RoomController::class, 'show']);

Route::get('/offers', [OfferController::class, 'index']);