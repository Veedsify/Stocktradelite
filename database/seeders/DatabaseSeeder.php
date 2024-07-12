<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Tier;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Tier::factory(6)->create();
        User::factory()->create([
            'name' => 'Test User',
            'userid' => Str::random(10),
            'email' => 'test@example.com',
        ]);
        Blog::factory(50)->create();
    }
}
