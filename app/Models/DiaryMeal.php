<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiaryMeal extends Model
{
    use HasFactory;

    protected $fillable = ['diary_id','meal_category'];

    public function diary() {
        return $this->belongsTo(Diary::class);
    }

    public function mealCategory(){
        return $this->belongsTo(MealCategory::class);
    }
}
