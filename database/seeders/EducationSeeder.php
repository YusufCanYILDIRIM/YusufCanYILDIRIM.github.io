<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Education;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Education::create([
            'school' => 'Anadolu Üniversitesi',
            'degree' => 'Lisans Programı',
            'field' => 'Yönetim Bilişim Sistemleri',
            'start_date' => 'September 2023',
            'end_date' => 'Present',
        ]);

         Education::create([
            'school' => '42 Ecole',
            'degree' => 'Lisans Programı',
            'field' => 'Yazılım Mühendisliği',
            'start_date' => 'October 2023',
            'end_date' => 'November 2023',
        ]);

        Education::create([
            'school' => 'Afyon Kocatepe Üniversitesi',
            'degree' => 'Önlisans Programı',
            'field' => 'Bilgisayar Programcılığı',
            'start_date' => 'September 2021',
            'end_date' => 'June 2023',
        ]);
    }
}