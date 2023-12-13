<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivitesRequest extends FormRequest
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
            'name'=>['required','min:3'],
            //
        ];
    }

    public function messages()
    {
        return[
            'name.min'=>'O campo nome da tarefa deve ter no mínimo 3 caracteres',
            'name.required'=>'O campo nome da tarefa é obrigatório'
        ];
    }
}
