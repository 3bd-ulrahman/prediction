<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prediction extends Model
{
    use HasFactory;

    protected $table = 'predictions';

    protected $fillable = [
        'user_id',
        'user_age',
        'gender',
        'chest_pain_type',
        'resting_blood_pressure',
        'serum_cholestoral',
        'max_heart_rate',
        'exercise_induced_angina',
        'fasting_blood_sugar',
        'resting_ecg_result',
        'old_peak',
        'slope',
        'major_vessels',
        'thal',
        'label'
    ];

    // Relationships
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
