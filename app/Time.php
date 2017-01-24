<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $fillable = ['image','user_id','primeiro_nome','nome_completo','sigla','cidade','estado','pais'];
}
