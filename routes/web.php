<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Detail_Vendor1', function () {
    return view('detail_vendor_cake_venue_food');
});

Route::get('/inspiration', function () {
    return view('inspiration');
});
