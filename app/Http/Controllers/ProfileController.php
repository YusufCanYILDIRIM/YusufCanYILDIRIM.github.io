<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Support\Facades\Auth;



class ProfileController extends Controller
{
   public function show()
    {
        $profile = Profile::latest()->first();
        
        // Tam sayfayı döndür, sadece partial'ı değil
        return view('index', compact('profile'));
    }

    public function update(UpdateProfileRequest $request)
    {
        $profile = Auth::user()->profile;
        $profile->update($request->validated());
        return redirect()->back()->with('success', 'Profil güncellendi!');
    }
}
