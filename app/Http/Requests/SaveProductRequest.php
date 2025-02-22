<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'name' => "required|string|unique:products",
            'description' => "required|string",
            'amount' => "required|int|min:0",
            'price' => "required|numeric",
            'image' => "string"
        ];
    }
}
