<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inspiration', function () {
    return view('inspiration');
});

Route::get('/inspiration2', function(){
    return view('inspiration2');
});

Route::get('/vendor', function () {
    return view('Vendor/vendor');
});