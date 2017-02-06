<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jogador extends Model
{
    protected $fillable = ['user_id','posicao','image','nome','nome_completo','nascimento','altura','peso','cidade','estado','pais'];
}
