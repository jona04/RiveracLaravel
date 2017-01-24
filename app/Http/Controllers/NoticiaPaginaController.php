<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime,DateTimeZone;

class NoticiaPaginaController extends Controller
{
    public function pagina($titulo,$id)
    {

    	$noticia = \App\Noticia::find($id);

    	$usuario = \App\User::find($noticia->user_id);

    	$partidas = \App\Partida::orderBy('data', 'DESC')->get();

    	$partida_first = $partidas->first();

    	$date = new DateTime($noticia->created_at);
    	$dia = $date -> format('d-m-Y');
    	$hora = $date -> format('H:i');


        return view ('noticia-pagina',compact('noticia','partida_first','dia','hora','usuario'));
    }

}
