<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MeuTimeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [

            'primeiro_nome.required' => 'Preencha o nome principal do time',
            'nome_completo.required' => 'Preencha o nome completo do time',
            'nome_completo.unique' => 'Esse nome ja existe',
            'sigla.required' => 'Preencha a sigla do time',
            'cidade.required' => 'Preencha a cidade do time',
            'estado.required' => 'Preencha o estado do time',
            'pais.required' => 'Preencha o país do time',

        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'primeiro_nome'=>'required | max : 255',
            'nome_completo'=>'required | max : 255',
            'sigla'=>'required | max : 255',
            'cidade'=>'required | max : 255',
            'estado'=>'required | max : 255',
            'pais'=>'required | max : 255',

        ];
    }
}
