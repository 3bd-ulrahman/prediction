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
        Schema::create('predictions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->boolean('chest_pain_type');
            $table->smallInteger('resting_blood_pressure');
            $table->smallInteger('serum_cholestoral');
            $table->smallInteger('oxygen')->nullable();
            $table->smallInteger('max_heart_rate');
            $table->boolean('exercise_induced_angina');
            $table->boolean('fasting_blood_sugar');
            $table->smallInteger('resting_ecg_result');
            $table->decimal('old_peak')->nullable();
            $table->smallInteger('slope')->nullable();
            $table->smallInteger('major_vessels')->nullable();
            $table->smallInteger('thal')->nullable();
            $table->boolean('label')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('predictions');
    }
};
