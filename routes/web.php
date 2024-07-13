<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/category', function () {
    return view('categoryPage');
});

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/news', function () {
    return view('singlePage');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/tambahBerita', function () {
    return view('admin.addNewsPage');
});