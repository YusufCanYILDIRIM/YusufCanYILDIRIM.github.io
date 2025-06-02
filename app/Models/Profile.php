<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // Toplu atama yapılabilecek alanlar
    protected $fillable = [
        'name',
        'title',
        'email',
        'phone',
        'address',
        'about',
        'photo',
        'linkedin',
        'github',
        'twitter',
        'instagram',
    ];
}
