<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Doctor;
use App\Models\Slider;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Slider::factory(10)->create();
        // Category::factory(3)->create();
        // Doctor::factory(20)->create();
    }
}
