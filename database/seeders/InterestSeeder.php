<?php

namespace Database\Seeders;

use App\Models\Interest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Interest::firstOrCreate(
            ['Description' => 'Yazılım geliştirme alanında özellikle backend tarafında kendimi geliştirmeye odaklanıyorum. Bunun dışında boş zamanlarımı verimli ve keyifli geçirmek benim için önemli. Kitap okumayı çok severim, özellikle kişisel gelişim ve kurgu türleri ilgimi çeker. Dans etmek ve düzenli olarak spor yapmak hem zihinsel hem fiziksel olarak beni dinç tutuyor. Aynı zamanda yeni yerler keşfetmeyi, farklı şehirleri gezmeyi ve yeni kültürlerle tanışmayı çok severim bu bana hem ilham verir hem de bakış açımı genişletir.']
        );
    }
}
