<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Food;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $foods = [
            [
                'name' => 'Chicken Breast',
                'description' => 'Lean protein source',
                'barcode' => '123456789',
                'calories' => 165,
                'nutrition' => [
                    'protein' => 31,
                    'fat' => 3.6,
                    'carbohydrates' => 0,
                ],
            ],
            [
                'name' => 'Brown Rice',
                'description' => 'Whole grain carbohydrate',
                'barcode' => '987654321',
                'calories' => 216,
                'nutrition' => [
                    'protein' => 5,
                    'fat' => 1.8,
                    'carbohydrates' => 45,
                ],
            ],
            // Add more food items as needed
        ];

        // Write a food for loop to loo over each and create new food in database
        foreach($foods as $foodData){
            Food::create($foodData);
        }
    }


}
