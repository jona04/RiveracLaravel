<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstadioController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
	public function index()
	{

		$estadios = \App\Estadio::paginate(10);

		return view ('estadios.index',compact('estadios'));
	}

	public function adicionar()
    {
    	return view ('estadios.adicionar');
    }

    public function salvar(\App\Http\Requests\EstadioRequest $request)
    {
    	$estadio = \App\Estadio::create($request->all());

    	\Session::flash('flash_message',[
                'msg'=>"Estadio adicionado com sucesso!",
                'class'=>"alert-success"
            ]);

        return redirect()->route('estadio.adicionar');
    }

    public function editar($id)
    {
        $estadio = \App\Estadio::find($id);
        if(!$estadio){
            \Session::flash('flash_message',[
                'msg'=>"Não existe esse estadio cadastrado!",
                'class'=>"alert-danger"
            ]);
            return redirect()->route('estadio.index',$estadio);
        }

        return view('estadios.editar',compact('estadio'));
    }

    public function atualizar(\App\Http\Requests\EstadioRequest $request,$id)
    {
        $estadio = \App\Estadio::find($id);
        $estadio->update($request->all());

        \Session::flash('flash_message',[
                'msg'=>"Estadio atualizado com sucesso!",
                'class'=>"alert-success"
            ]);

        return redirect()->route('estadio.index',$estadio);     
        
    }

}
