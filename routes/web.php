<?php

use Illuminate\Support\Facades\Route;
use App\Models\Profile;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    $profile = Profile::latest()->first();
    $experiences = Experience::all();
    $educations = Education::all();
    $skills = Skill::all();
    return view('index', compact('profile', 'experiences', 'educations','skills'));
});

Route::get('/about', [App\Http\Controllers\ProfileController::class, 'show' ]);