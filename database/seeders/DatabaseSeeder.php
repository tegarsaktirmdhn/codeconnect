<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $username = 'tegar';

        \App\Models\User::create([
            'username' => 'tegar',
            'email' => 'tegarsr@test.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'picture' => config('app.avatar_generator_url').$username,
        ]);

        $this->call([
            CategorySeeder::class,
        ]);
    }
}
