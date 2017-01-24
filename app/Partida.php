<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    protected $fillable = ['meu_time_id','user_id','time_id','estadio_id','mando_de_campo','campeonato_id','data'];

    public function partidas()
    {
    	return $this->hasMany('App\Partida');
    }

    public function estadio()
    {
        return $this->belongsTo('App\Estadio');
    }

    public function time()
    {
        return $this->belongsTo('App\Time');
    }

    public function meu_time()
    {
        return $this->belongsTo('App\MeuTime');
    }

    public function campeonato()
    {
        return $this->belongsTo('App\Campeonato');
    }
}
