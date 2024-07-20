<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Tier;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\PrivacyPolicy;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Tier::factory(6)->create();
        Tier::create([
            'name' => 'Basic',
            'price' => 5000,
            'min' => 1,
            'max' => 5000,
            'currency' => 'USD',
            'description' => 'This is a free tier',
        ]);
        Tier::create([
            'name' => 'Standard',
            'price' => 10000,
            'min' => 5001,
            'max' => 10000,
            'currency' => 'USD',
            'description' => 'This is a standard tier',
        ]);
        Tier::create([
            'name' => 'Premium',
            'price' => 50000,
            'min' => 10001,
            'max' => 50000,
            'currency' => 'USD',
            'description' => 'This is a premium tier',
        ]);
        Tier::create([
            'name' => 'Platinum',
            'price' => 100000,
            'min' => 50001,
            'max' => 100000,
            'currency' => 'USD',
            'description' => 'This is a platinum tier',
        ]);

        Tier::create([
            'name' => 'Diamond',
            'price' => 500000,
            'min' => 100001,
            'max' => 500000,
            'currency' => 'USD',
            'description' => 'This is a diamond tier',
        ]);

        Tier::create([
            'name' => 'Elite',
            'price' => 1000000,
            'min' => 500001,
            'max' => 1000000,
            'currency' => 'USD',
            'description' => 'This is an elite tier',
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'userid' => Str::random(10),
            'email' => 'test@example.com',
        ]);

        Blog::factory(50)->create();
    }
}
