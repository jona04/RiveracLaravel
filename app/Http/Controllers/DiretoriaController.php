<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiretoriaController extends Controller
{
    public function pagina()
	{

		$partidas = \App\Partida::orderBy('data', 'DESC')->get();

    	$partida_first = $partidas->first();

        return view ('diretoria-pagina',compact('partida_first'));
	}
}
