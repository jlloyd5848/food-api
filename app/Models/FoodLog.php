<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodLog extends Model
{
    use HasFactory;

    // Food log is a pivot table meaning we just map diary with a food

    // fillable

    protected $fillable = [
        'diary_id',
        'food_id',
        'quantity'
    ];

    // relationship food log belongs to a diary

    public function diary() {
        return $this->belongsTo(Diary::class);
    }
    // relationship food log belongs to a food

    public function food() {
        return $this->belongsTo(Food::class);
    }
}
