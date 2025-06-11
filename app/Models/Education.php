<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'school',
        'degree',
        'field',
        'start_date',
        'end_date',
    ];

     // BU SATIRI EKLEYİN!
    protected $table = 'educations';
}
