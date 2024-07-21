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

Route::get('/gallery', function(){
    return view('gallery');
});

Route::get('/gallery2', function(){
    return view('gallery2');
});

Route::get("/viewall", function(){
    return view('viewall');
});
