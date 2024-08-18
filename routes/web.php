<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/Detail_Vendor_Cake', function () {
    return view('detail_vendor_cake');
});

Route::get('/View_All_Cake_Product', function () {
    return view('view_all_cake_product');
});

Route::get('/Detail_Vendor_WO', function () {
    return view('detail_vendor_WO');
});

Route::get('/Detail_Vendor_Venue', function () {
    return view('detail_vendor_venue');
});

Route::get('/View_All_Venue_Product', function () {
    return view('view_all_venue_product');
});

Route::get('/View_All_Food_Product', function () {
    return view('view_all_food_product');
});

Route::get('/Detail_Vendor_Food', function () {
    return view('detail_vendor_food');
});

Route::get('/Detail_Product_Cake', function () {
    return view('detail_product_cake');
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
