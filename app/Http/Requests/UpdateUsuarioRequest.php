<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsuarioRequest extends FormRequest
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
            'first_name' => ['string', 'max:50'],
            'email' => ['string', 'email', 'max:50', 'unique:usuarios,email,' . $this->route('usuario')->id],
            'last_name' => ['string', 'max:100'],
            'sex' => ['string', 'max:1'],
            'age' => ['numeric']
        ];
    }
}
