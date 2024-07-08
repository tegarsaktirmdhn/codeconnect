<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'slug' => 'web-development',
                'name' => 'Web Development',
            ],
            [
                'slug' => 'data-analyst',
                'name' => 'Data Analyst',
            ],
            [
                'slug' => 'data-scientist',
                'name' => 'Data Scientist',
            ],
            [
                'slug' => 'mobile-developer',
                'name' => 'Mobile Developer',
            ],
            [
                'slug' => 'game-developer',
                'name' => 'Game Developer',
            ],
            [
                'slug' => 'cloud-engineer',
                'name' => 'Cloud Engineer',
            ],
            [
                'slug' => 'devOps-engineer',
                'name' => 'DevOps Engineer',
            ],
            [
                'slug' => 'database-developer',
                'name' => 'Database Developer',
            ],
            [
                'slug' => 'berbagi-informasi',
                'name' => 'Berbagi Informasi',
            ],
            [
                'slug' => 'lain-lain',
                'name' => 'Lain Lain',
            ],
        ]);
    }
}
