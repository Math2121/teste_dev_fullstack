<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditandoEletroRequest extends FormRequest
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
            //
            'nome' => 'string',
            'descricao' => 'string',
            'tensao' => 'string',
            'marca' => 'in:ELECTROLUX,BRASTEMP,FISCHER,SAMSUNG,LG',
        ];
    }


    public function messages(): array
    {
        return [

            'nome.string' => 'O campo nome precisa ser do tipo texto',
            'descricao.string' => 'O campo descricao precisa ser do tipo texto',
            'tensao.string' => 'O campo tensao precisa ser do tipo texto',
            'marca.in' => 'A marca não está entre as marcas aceitas',
        ];
    }
}
