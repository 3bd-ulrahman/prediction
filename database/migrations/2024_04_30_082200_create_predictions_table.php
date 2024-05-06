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
            $table->smallInteger('user_age'); // true
            $table->enum('gender', ['male', 'female']); // true
            $table->smallInteger('chest_pain_type'); //true
            $table->smallInteger('resting_blood_pressure'); // true
            $table->smallInteger('serum_cholestoral'); // true
            $table->smallInteger('max_heart_rate'); // true
            $table->boolean('exercise_induced_angina'); // true
            $table->boolean('fasting_blood_sugar'); // true
            $table->smallInteger('resting_ecg_result')->nullable();
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
