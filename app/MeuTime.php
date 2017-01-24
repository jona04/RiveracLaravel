<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeuTime extends Model
{
    protected $fillable = ['image','user_id','primeiro_nome','nome_completo','sigla','cidade','estado','pais'];
}
