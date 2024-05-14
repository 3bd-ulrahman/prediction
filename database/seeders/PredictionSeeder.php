<?php

namespace Database\Seeders;

use App\Models\Prediction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PredictionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $predictions = [];

        for ($i=0; $i < 50; $i++) {
            array_push($predictions, [
                'user_id' => 1,
                'chest_pain_type' => fake()->randomElement([true, false]),
                'resting_blood_pressure' => fake()->numberBetween(1, 500),
                'serum_cholestoral' => fake()->numberBetween(1, 300),
                'oxygen' => fake()->numberBetween(1, 100),
                'max_heart_rate' => fake()->numberBetween(1, 500),
                'exercise_induced_angina' => fake()->randomElement([true, false]),
                'fasting_blood_sugar' => fake()->randomElement([true, false]),
                'resting_ecg_result' => fake()->numberBetween(1, 500),
                'old_peak' => fake()->numberBetween(1, 500),
                'slope' => fake()->numberBetween(1, 500),
                'major_vessels' => fake()->numberBetween(1, 500),
                'thal' => fake()->numberBetween(1, 500),
                'label' => fake()->randomElement([true, false]),
            ]);
        }

        Prediction::query()->insert($predictions);
    }
}
