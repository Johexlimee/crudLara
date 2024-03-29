<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEjemploRequest extends FormRequest
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
            "titulo" => "required|min:2|max:50",
            "año" => "required|integer",
            "descripcion" => "required|min:2|max:200",
            "autor" => "required|min:2|max:50",
            "prestado" => "required", 
        ];
    }
}
