<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use DateTime;

class PrincipalController extends Controller
{
    public function index()
    {

    	$times = array("Time 1","Time 2","Time 3","Time 4");

        $noticias_destaques = \App\Noticia::where('visibilidade','=',1)->limit(4)->orderBy('created_at', 'DESC')->get();
    	
        $noticias1 = \App\Noticia::where('visibilidade','=',1)->limit(4)->orderBy('created_at', 'DESC')->get();
    	$noticias2 = \App\Noticia::where('visibilidade','=',1)->offset(4)->limit(4)->orderBy('created_at', 'DESC')->get();

    	$jogadores = \App\Jogador::orderBy('posicao', 'ASC')->get();

        $videos = \App\Video::orderBy('created_at', 'DESC')->get();
    	$video_first = $videos->first();

        $dt = new DateTime();

        $partidas = \App\Partida::where('data','>' ,$dt)->orderBy('data', 'ASC')->get();
        //$partidas = \App\Partida::orderBy('data', 'ASC')->get();

    	$partida_first = $partidas->first();

        return view('home',compact('times','noticias1','noticias2','videos','video_first','partida_first','noticias_destaques','jogadores'));
    }
}
