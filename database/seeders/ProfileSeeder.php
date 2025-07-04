<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        Profile::firstOrCreate(
            ['email' => 'yusufyildirimcan@outlook.com'], // benzersiz bir alan
            [
                'name' => 'Yusuf Can YILDIRIM',
                'title' => 'Software Engineer',
                'phone' => '05395804157',
                'address' => '123 Main Street',
                'about' => 'I am a backend developer',
                'photo' => 'tamplete/images/yusuf.jpeg',
                'linkedin' => 'https://www.linkedin.com/in/yusuf-can-yildirim-99490423a/',
                'github' => 'https://github.com/YusufCanYILDIRIM',
                'twitter' => 'https://x.com/Yusuffcann10',
                'instagram' => 'https://www.instagram.com/yusuffcann10/',
            ]
        );
    }
}
