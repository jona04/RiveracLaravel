<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estadio extends Model
{
    protected $fillable = ['user_id','nome','cidade','estado','pais'];
}
