<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

    	$videos = \App\Video::paginate(10);

    	return view('videos.index',compact('videos'));
    }

    public function adicionar()
    {
    	return view ('videos.adicionar');
    }

    public function salvar(\App\Http\Requests\VideoRequest $request)
    {
    	//$video = \App\Video::create($request->all());

    	$user_id = $request->input('user_id');
        $titulo = $request->input('titulo');
    	
    	$url_form = $request->input('url');
    	$url = "https://www.youtube.com/embed/".substr(strrchr($url_form, "/"), 1);  		
  		$url_img = "http://i1.ytimg.com/vi/".substr(strrchr($url_form, "/"), 1)."/hqdefault.jpg";

  		$video = \App\Video::create(['user_id' => $user_id,
                                            'titulo'=>$titulo,
                                            'url'=> $url,
                                            'url_img'=>$url_img]);

    	\Session::flash('flash_message',[
                'msg'=>"Video adicionado com sucesso!",
                'class'=>"alert-success"
            ]);

        return redirect()->route('video.adicionar');
    }
}
