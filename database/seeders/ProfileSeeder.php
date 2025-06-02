<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        Profile::create([
            'name' => 'Yusuf Can YILDIRIM',
            'title' => 'Software Engineer',
            'email' => 'yusufyildirimcan@outlook.com',
            'phone' => '05395804157',
            'address' => '123 Main Street',
            'about' => 'I am a backend developer',
            'photo' => 'template/assets/img/profile.jpg',
            'linkedin' => 'https://www.linkedin.com/in/yusuf-can-yildirim-99490423a/',
            'github' => 'https://github.com/YusufCanYILDIRIM',
            'twitter' => 'https://x.com/Yusuffcann10',
            'instagram' => 'https://www.instagram.com/yusuffcann10/',
        ]);
    }
}
