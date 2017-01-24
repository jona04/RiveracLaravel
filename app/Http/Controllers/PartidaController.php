<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartidaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
	{

		$partidas = \App\Partida::paginate(10);

		return view ('partidas.index',compact('partidas'));
	}

	public function adicionar()
    {

    	$times = \App\Time::all();
        $meu_times = \App\MeuTime::all();
    	$estadios = \App\Estadio::all();
    	$campeonatos = \App\Campeonato::all();

    	return view ('partidas.adicionar',compact('times','estadios','campeonatos','meu_times'));
    }

    public function salvar(\App\Http\Requests\PartidaRequest $request)
    {
    	//$partida = \App\Partida::create($request->all());

        $user_id = $request->input('user_id');
        $time_id = $request->input('time_id');
        $meu_time_id = $request->input('meu_time_id');
        $estadio_id = $request->input('estadio_id');
        $mando_de_campo = $request->input('mando_de_campo');
        $campeonato_id = $request->input('campeonato_id');
        
        $dia = $request->input('dia');
        $hora = $request->input('hora');

        $timestamp_data = date("Y-m-d H:i:s",strtotime($dia." ".$hora));

        $partida = \App\Partida::create(['user_id' => $user_id,
                                            'time_id'=>$time_id,
                                            'meu_time_id'=>$meu_time_id,
                                            'estadio_id'=> $estadio_id,
                                            'mando_de_campo'=>$mando_de_campo,
                                            'campeonato_id'=>$campeonato_id,
                                            'data'=>$timestamp_data,
                                            ]);

    	\Session::flash('flash_message',[
                'msg'=>"Partida adicionada com sucesso! - ".$timestamp_data,
                'class'=>"alert-success"
            ]);

        return redirect()->route('partida.adicionar');
    }

    public function editar($id)
    {
        $times = \App\Time::all();
        $meu_times = \App\MeuTime::all();
        $estadios = \App\Estadio::all();
        $campeonatos = \App\Campeonato::all();
        
        $partida = \App\Partida::find($id);

        $data = $partida->data;

        $dia = date("d-m-Y",strtotime($data));
        $hora = date("H:i",strtotime($data));

        if(!$partida){
            \Session::flash('flash_message',[
                'msg'=>"Não existe essa partida cadastrado!",
                'class'=>"alert-danger"
            ]);
            return redirect()->route('partida.index',$partida);
        }

        return view('partidas.editar',compact('partida','times','estadios','campeonatos','meu_times','dia','hora'));
    }

    public function atualizar(\App\Http\Requests\PartidaRequest $request,$id)
    {
        $partida = \App\Partida::find($id);

        $partida->user_id = $request->input('user_id');
        $partida->time_id = $request->input('time_id');
        $partida->meu_time_id = $request->input('meu_time_id');
        $partida->estadio_id = $request->input('estadio_id');
        $partida->mando_de_campo = $request->input('mando_de_campo');
        $partida->campeonato_id = $request->input('campeonato_id');
        
        $dia = $request->input('dia');
        $hora = $request->input('hora');

        $timestamp_data = date("Y-m-d H:i:s",strtotime($dia." ".$hora));

        $partida->data = $timestamp_data;

        $partida->save();
        

        \Session::flash('flash_message',[
                'msg'=>"Partida atualizado com sucesso!",
                'class'=>"alert-success"
            ]);

        return redirect()->route('partida.index',$partida);     
        
    }

}
