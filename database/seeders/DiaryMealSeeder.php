<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DiaryMeal;

class DiaryMealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DiaryMeal::create([
            'diary_id' => 1,
            'meal_category_id' => 1
        ]);
    }
}
