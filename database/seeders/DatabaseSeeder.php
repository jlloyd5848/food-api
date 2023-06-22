<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $this->call([
            UserSeeder::class,
            MealCategorySeeder::class,
            FoodSeeder::class,

            // Pivot table seeders
            DiarySeeder::class,
            DiaryMealSeeder::class,
            FoodLogSeeder::class,

        ]);
    }
}
