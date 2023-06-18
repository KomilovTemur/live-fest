<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@fest.live',
            'password' => '$2y$10$n5GgIZ21GiRCVqKJRLf0u.GTbb.7lh3emzb2F6Kbfb6xhaNHIwdle'
        ]);
    }
}
