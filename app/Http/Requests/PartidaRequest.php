<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartidaRequest extends FormRequest
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

            'meu_time_id.required' => 'Preencha o campo adversario',
            'time_id.required' => 'Preencha o campo adversario',
            'estadio_id.required' => 'Preencha o estadio da partida',
            'mando_de_campo.required' => 'Preencha o mando de campo',
            'campeonato_id.required' => 'Preencha o campeonato da partida',

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
            'meu_time_id'=>'required | max : 255',
            'time_id'=>'required | max : 255',
            'estadio_id'=>'required | max : 255',
            'mando_de_campo'=>'required | max : 255',
            'campeonato_id'=>'required | max : 255',

        ];
    }
}
