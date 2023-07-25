<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required'],
            'starting_date' => ['required', 'date'],
            'ending_date' => ['required', 'date', 'after:starting_date'],
            'price' => ['required', 'numeric'],
        ];
    }
}
