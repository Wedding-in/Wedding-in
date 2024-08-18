<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/rate', function () {
    return view('rate');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/Detail_Vendor1', function () {
    return view('detail_vendor_cake_venue_food');
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
Route::get('/profile', function () {
    return view('Profile/profile');
});
Route::get('/detailprofile', function () {
    return view('Profile/detailprofile');
});

Route::get('/status', function () {
    return view('Status/status');
});