<?php

namespace App\Http\Requests\Administrator\Hero;

use Illuminate\Foundation\Http\FormRequest;

class CreateHeroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:5000'],
            'foundation' => ['required', 'max:100'],
            'description' => ['required', 'max:200'],
            'contact' => ['required', 'max:200'],
            'faq' => ['required', 'max:200'],
        ];
    }
}
