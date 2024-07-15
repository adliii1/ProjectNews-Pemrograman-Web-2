<?php

use App\Http\Controllers\Front\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'landingPage']);
// Route::get('/category/{slug}', [LandingController::class, 'category']);
// Route::get('/news/{id}', [LandingController::class, 'newsSingle']);