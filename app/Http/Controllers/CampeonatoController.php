<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampeonatoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

    	$campeonatos = \App\Campeonato::paginate(10);

    	return view('campeonatos.index',compact('campeonatos'));
    }

    public function adicionar()
    {
    	return view ('campeonatos.adicionar');
    }

    public function salvar(\App\Http\Requests\CampeonatoRequest $request)
    {
    	$campeonato = \App\Campeonato::create($request->all());

    	\Session::flash('flash_message',[
                'msg'=>"Campeonato adicionado com sucesso!",
                'class'=>"alert-success"
            ]);

        return redirect()->route('campeonato.adicionar');
    }

    public function editar($id)
    {
        $campeonato = \App\Campeonato::find($id);
        if(!$campeonato){
            \Session::flash('flash_message',[
                'msg'=>"Não existe esse campeonato cadastrado!",
                'class'=>"alert-danger"
            ]);
            return redirect()->route('campeonato.index',$campeonato);
        }

        return view('campeonatos.editar',compact('campeonato'));
    }

    public function atualizar(\App\Http\Requests\CampeonatoRequest $request,$id)
    {
        $campeonato = \App\Campeonato::find($id);
        $campeonato->update($request->all());

        \Session::flash('flash_message',[
                'msg'=>"Campeonato atualizado com sucesso!",
                'class'=>"alert-success"
            ]);

        return redirect()->route('campeonato.index',$campeonato);     
        
    }
}
