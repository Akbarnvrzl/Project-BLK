<?php

use App\Http\Controllers\LandingpageController;
use Illuminate\Support\Facades\Route;

Route::controller(LandingpageController::class)->group(function () {
    Route::get('/', 'landingpage')->name('landingpage');
    Route::get('/about', 'about')->name('about');
    Route::get('/article', 'article')->name('article');
    Route::get('service', 'service')->name('service');
    
    });



