<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'nome' => 'required|min:3|max:255|unique:cursos',
            // você pode usar um array se quiser, veja abaixo
            'body' => [
                'required',
                'min:3',
                'max:10000'

            ]
        ];

        // isso quer dizer que a requisição é de UPDATE
        if ($this->method() === 'PUT' || $this->method() === 'PATCH' ) {

            $rules['nome'] = [
                'required', // nullable
                'min:3',
                'max:255',
                // acrescenta uma exceção (Exception), Não aplique a regra, se o ID bater com a coluna ID 
               // "unique:cursos,nome,{$this->id},id",
               // ou desta forma abaixo
               Rule::unique('cursos')->ignore($this->curso ?? $this->id),   
            ];
        }

        return $rules;
    }
}
