<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**    <?php
    Skill::create(['name' => 'PHP', 'icon' => 'fab fa-php', 'type' => 'language']);
    Skill::create(['name' => 'Laravel', 'icon' => 'fab fa-laravel', 'type' => 'language']);
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::firstOrCreate(['name' => 'HTML5'], ['icon' => 'fab fa-html5', 'type' => 'language']);
        Skill::firstOrCreate(['name' => 'CSS3'], ['icon' => 'fab fa-css3-alt', 'type' => 'language']);
        Skill::firstOrCreate(['name' => 'JavaScript'], ['icon' => 'fab fa-js', 'type' => 'language']);
        Skill::firstOrCreate(['name' => 'Node.js'], ['icon' => 'fab fa-node-js', 'type' => 'language']);
        Skill::firstOrCreate(['name' => 'PHP'], ['icon' => 'fab fa-php', 'type' => 'language']);
        Skill::firstOrCreate(['name' => 'Laravel'], ['icon' => 'fab fa-laravel', 'type' => 'language']);
        Skill::firstOrCreate(['name' => 'Sass'], ['icon' => 'fab fa-sass', 'type' => 'tool']);
        Skill::firstOrCreate(['name' => 'Less'], ['icon' => 'fab fa-less', 'type' => 'tool']);
        Skill::firstOrCreate(['name' => 'WordPress'], ['icon' => 'fab fa-wordpress', 'type' => 'tool']);
        Skill::firstOrCreate(['name' => 'Gulp'], ['icon' => 'fab fa-gulp', 'type' => 'tool']);
        Skill::firstOrCreate(['name' => 'Grunt'], ['icon' => 'fab fa-grunt', 'type' => 'tool']);
        Skill::firstOrCreate(['name' => 'npm'], ['icon' => 'fab fa-npm', 'type' => 'tool']);
        Skill::firstOrCreate(['name' => 'Mobile-First, Responsive Design'], ['type' => 'workflow']);
        Skill::firstOrCreate(['name' => 'Cross Browser Testing & Debugging'], ['type' => 'workflow']);
        Skill::firstOrCreate(['name' => 'Cross Functional Teams'], ['type' => 'workflow']);
        Skill::firstOrCreate(['name' => 'Agile Development & Scrum'], ['type' => 'workflow']);
    }
}
