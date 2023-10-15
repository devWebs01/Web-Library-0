<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {


        User::factory(10)->create();
        Category::factory(10)->create();
        Book::factory(10)->create();
        User::create([
            'name' => 'testing',
            'email' => 'testing@testing.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'slug' => 'testing-slug',
            'telp' => '08978301766',
            'role' => 'Petugas',
            'birthdate' => '2001-07-22',
            'gender' => 'Laki-laki',
            'identify' => '1234567890',
            'email_verified_at' => now(),
        ]);
    }
}
