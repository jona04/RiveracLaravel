<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstadioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [

            'nome.required' => 'Preencha o nome do estadio',
            'nome.unique' => 'Esse nome ja existe',
            'cidade.required' => 'Preencha a cidade do estadio',
            'estado.required' => 'Preencha o estado do estadio',
            'pais.required' => 'Preencha o país do estadio',

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
            'nome'=>'required | max : 255',
            'cidade'=>'required | max : 255',
            'estado'=>'required | max : 255',
            'pais'=>'required | max : 255',

        ];
    }
}
