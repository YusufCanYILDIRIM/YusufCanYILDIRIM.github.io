<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
         return [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'nullable|string|max:20',
        'address' => 'nullable|string|max:255',
        'about' => 'nullable|string|max:1000',
        'photo' => 'nullable|image|max:2048',
        'linkedin' => 'nullable|url',
        'github' => 'nullable|url',
        'twitter' => 'nullable|url',
        'instagram' => 'nullable|url',
        ];
    }
}
