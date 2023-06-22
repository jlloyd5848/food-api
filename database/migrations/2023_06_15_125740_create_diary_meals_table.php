<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('diary_meals', function (Blueprint $table) {
            // Pivot table to link dia
            $table->id();
            $table->unsignedBigInteger('diary_id');
            $table->unsignedBigInteger('meal_category_id');
            $table->timestamps();

            $table->foreign('diary_id')->references('id')->on('diaries')->onDelete('cascade');
            $table->foreign('meal_category_id')->references('id')->on('meal_categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diary_meals');
    }
};
