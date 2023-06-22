<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FoodLog;

class FoodLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        FoodLog::create([
            'diary_id' => 1,
            'food_id' => 1,
            'quantity' => 2
        ]);
    }
}
