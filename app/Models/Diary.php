<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function foodLogs() {
        return $this->hasMany(FoodLog::class);
    }

    // Diary also has many diaryMeals associated with it
    public function diaryMeals() {
        return $this->hasMany(DiaryMeal::class);
    }


}
