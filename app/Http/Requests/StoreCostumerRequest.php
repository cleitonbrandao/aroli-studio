<?php

namespace App\Http\Requests;

use App\Rules\CpfRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCostumerRequest extends FormRequest
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
            'name' => ['bail', 'required'],
            'last_name' => ['bail', 'required'],
            'cpf' => ['bail', 'required', 'not_regex:/^(.)\1*$/', 'digits:11',  new CpfRule],
            'birthday' => ['nullable', 'date'],
            'email' => ['nullable', 'email'],
            'photo' => ['nullable', 'string']
        ];
    }
}
