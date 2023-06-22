<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealCategory extends Model
{
    use HasFactory;


    protected $fillable = ['name'];

    public function diaryMeals() {
        // Gets the diary meals associated with that category
        return $this->hasMany(DiaryMeal::class);
    }
}
