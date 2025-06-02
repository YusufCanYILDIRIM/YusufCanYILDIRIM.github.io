<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('index');
});

Route::get('/about', [App\Http\Controllers\ProfileController::class, 'show' ]);
