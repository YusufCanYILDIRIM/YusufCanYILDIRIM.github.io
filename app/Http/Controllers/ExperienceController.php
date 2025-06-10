<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{
    public function show()
    {
        $experiences = Experience::all(); // Tüm deneyimleri çek
        return view('partials.experience', compact('experiences')); // View'a aktar
    }
}
