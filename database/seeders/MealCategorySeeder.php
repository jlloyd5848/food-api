<?php

namespace Database\Seeders;

use App\Models\MealCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MealCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MealCategory::create([
            'name' => 'Breakfast',

        ]);
        MealCategory::create([
            'name' => 'Lunch',

        ]);
        MealCategory::create([
            'name' => 'Dinner',

        ]);

        MealCategory::create([
            'name' => 'Snack',

        ]);
    }
}
