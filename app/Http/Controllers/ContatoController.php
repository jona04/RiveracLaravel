<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function enviar(Request $request){

    	$nome = $request->input('nome');
    	$email = $request->input('email');
    	$assunto = $request->input('assunto');
    	$msg = $request->input('msg');

    	$to      = 'riveracoficial@gmail.com';
		$subject = 'Contato site River - '.$assunto;
		$message = 'Por: '.$nome.'<br />'.
                    'Email: '.$email. '<br />'.
                    $msg;
		$headers = 'From: riveracoficial@gmail.com' . "\r\n" .
		    'Reply-To: riveracoficial@gmail.com' . "\r\n" .
            'Content-type: text/html; charset=iso-8859-1'."\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers);

        $times = array("Time 1","Time 2","Time 3","Time 4");

        $noticias_destaques = \App\Noticia::where('visibilidade','=',1)->limit(4)->orderBy('created_at', 'DESC')->get();
        
        $noticias1 = \App\Noticia::where('visibilidade','=',1)->limit(4)->orderBy('created_at', 'DESC')->get();
        $noticias2 = \App\Noticia::where('visibilidade','=',1)->offset(4)->limit(4)->orderBy('created_at', 'DESC')->get();

        $videos = \App\Video::orderBy('created_at', 'DESC')->get();
        $video_first = $videos->first();

        $partidas = \App\Partida::orderBy('data', 'DESC')->get();

        $partida_first = $partidas->first();

        return view('home',compact('times','noticias1','noticias2','videos','video_first','partida_first','noticias_destaques'));

    }
}
