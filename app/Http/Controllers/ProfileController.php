<?php

namespace App\Http\Controllers;

use App\Models\Profile; // Profile modelini dahil ediyoruz
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function show()
    {
        $profile = Profile::latest()->first();

        dd($profile); // Veriyi kontrol etmek için ekledik

        return view('partials.about', compact('profile'));
    }
}
