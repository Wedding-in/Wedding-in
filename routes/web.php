<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::prefix('bookmarks')->group(function () {
//     Route::get('/vendor', function () {
//         return view('vendor');
//     });
// });

Route::get('/bookmarks', function () {
    return view('bookmarks');
});
