<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tier;
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
            'name' => 'StockLiteTrade Admin',
            'userid' => Str::random(10),
            'email' => 'junewouldbegreat@gmail.com',
        ]);

    }
}
