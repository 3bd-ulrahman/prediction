<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_age' => ['required', 'integer'],
            'gender' => ['required', 'string'],
            'chest_pain_type' => ['required', 'boolean'],
            'resting_blood_pressure' => ['required', 'integer'],
            'serum_cholestoral' => ['required', 'integer'],
            'max_heart_rate' => ['required', 'string'],
            'exercise_induced_angina' => ['required', 'boolean'],
            'fasting_blood_sugar' => ['required', 'boolean'],
        ];
    }
}
