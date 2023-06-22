<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\MealCategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/foods', [FoodController::class, 'index']);

Route::post('/foods', [FoodController::class, 'store']);

Route::get('/foods/{id}', [FoodController::class, 'show']);

Route::put('/foods/{id}', [FoodController::class, 'update']);

Route::delete('/foods/{id}', [FoodController::class, 'destroy']);


//==================================================================================================
Route::prefix('meal-categories')->group(function () {
    Route::get('/',[MealCategoryController::class,'index']);
    Route::post('/',[MealCategoryController::class,'store']);
    Route::get('/{mealCategory',[MealCategoryController::class,'show']);
    Route::put('/{mealCategory}',[MealCategoryController::class,'update']);
    Route::delete('/{mealCategory}',[MealCategoryController::class,'destroy']);
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
