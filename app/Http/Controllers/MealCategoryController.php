<?php

namespace App\Http\Controllers;

use App\Http\Requests\MealCategoryRequest;

use App\Models\MealCategory;

class MealCategoryController extends Controller
{

    public function index() {
        return MealCategory::all();
    }

    public function store(MealCategoryRequest $request) {

        $mealCategory = $request->validated();

        $newMealCategory = MealCategory::create($mealCategory);

        return response()->json($newMealCategory,201);
        
    }

    public function update(MealCategoryRequest $request, MealCategory $mealCategory) {

        $mealCategoryName = $request->validated();

        // Update the name of the category
        $mealCategory->update(['name',$mealCategoryName]);

        return response()->json($mealCategory,201);

    }

    public function destroy(MealCategory $mealCategory) {

        try {
            //code...
            $mealCategory->delete();
            return response()->json(null, 204);


        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(['error'=>'An error occured during deletion'],500);

        }     


    }

}
