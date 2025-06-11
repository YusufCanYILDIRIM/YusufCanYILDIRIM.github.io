<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::create([
            'title' => 'Bilişim Teknolojileri öğretmeni',
            'company' => 'Tügva İcathane',
            'description' => 'İcathanede öğretmen ve web geliştirici olarak gençlerle teknoloji arasında köprü kuruyorum. Eğitim ve yazılımı birleştirerek üretken, yaratıcı projelere rehberlik ediyorum',
            'start_date' => 'March 2025',
            'end_date' => 'Present',
        ]);
            
        Experience::create([
            'title' => 'Backend Developer',
            'company' => 'Eupholias Developers',
            'description' => 'PHP tabanlı projelerde sunucu tarafı geliştirme konusunda deneyimli bir Backend Developer’ım. Laravel ve benzeri framework’lerle API geliştirme, veritabanı yönetimi ve sistem entegrasyonlarında aktif rol alıyorum. Performans, güvenlik ve sürdürülebilir kod yapıları önceliklerim arasında',
            'start_date' => 'January 2024',
            'end_date' => 'March 2025',
        ]);

        Experience::create([
            'title' => 'Bilişim Teknolojileri öğretmeni',
            'company' => 'Halk Eğitim Kurumları',
            'description' => 'Halk Eğitim Merkezi’nde 2 ay süreyle temel yazılım ve bilgisayar eğitimi alanında öğretmenlik yaptım. Farklı yaş gruplarına yönelik teknik içerikleri sade ve anlaşılır şekilde aktararak eğitim sürecine katkı sağladım',
            'start_date' => 'July 2024',
            'end_date' => 'July 2025',
        ]);

        Experience::create([
            'title' => 'intern',
            'company' => 'Kurumsal Teknik',
            'description' => 'Kurumsal bir teknik şirkette stajyer Backend Developer olarak görev aldım. PHP tabanlı sistemlerde API geliştirme, veritabanı işlemleri ve iş mantığı kurgusu üzerine pratik deneyim kazandım',
            'start_date' => 'July 2023',
            'end_date' => 'July 2023',
        ]);

    }
}
