<?php

use Illuminate\Support\Facades\Route;
use App\Models\Profile;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    $profile = Profile::latest()->first();
    return view('index', compact('profile'));
});

Route::get('/about', [App\Http\Controllers\ProfileController::class, 'show' ]);
