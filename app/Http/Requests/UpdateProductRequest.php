<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "price" => "required|numeric",
            "p_image" => ['image', 'mimetypes:image/jpeg,image/png', 'max:1024', 'nullable'], // Specify mime types directly
            "old_image" => "required|string",
        ];
    }
}
