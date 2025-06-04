<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function show()
    {
        $profile = Profile::latest();
        
        // Tam sayfayı döndür, sadece partial'ı değil
        return view('index', compact('profile'));
    }
}
