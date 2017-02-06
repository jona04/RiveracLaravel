<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class TimeControler extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

    	$times = \App\Time::paginate(10);

    	return view('times.index',compact('times'));
    }

    public function adicionar()
    {
    	return view ('times.adicionar');
    }

    public function salvar(\App\Http\Requests\TimeRequest $request)
    {
    	//$time = \App\Time::create($request->all());

        $user_id = $request->input('user_id');
        $primeiro_nome = $request->input('primeiro_nome');
        $image = $request->image;
        $nome_completo = $request->input('nome_completo');
        $sigla = $request->input('sigla');
        $cidade = $request->input('cidade');
        $estado = $request->input('estado');
        $pais = $request->input('pais');

        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->image->move(public_path('img/times'), $imageName);
        
         $local = "img/times/".$imageName;

        $time = \App\Time::create([
            'user_id'=>$user_id,
            'primeiro_nome'=>$primeiro_nome,
            'nome_completo'=>$nome_completo,
            'sigla'=>$sigla,
            'cidade'=>$cidade,
            'estado'=>$estado,
            'pais'=>$pais,
            'image'=>$local
            ]);


    	\Session::flash('flash_message',[
                'msg'=>"Time adicionado com sucesso!",
                'class'=>"alert-success"
            ]);

        return redirect()->route('time.adicionar');
    }

    public function editar($id)
    {
        $time = \App\Time::find($id);
        if(!$time){
            \Session::flash('flash_message',[
                'msg'=>"Não existe esse time cadastrado!",
                'class'=>"alert-danger"
            ]);
            return redirect()->route('time.index',$id);
        }

        return view('times.editar',compact('time'));
    }

    public function atualizar(\App\Http\Requests\TimeRequest $request,$id)
    {
        $time = \App\Time::find($id);
        
        //$user_id = $request->input('user_id');
        $time->primeiro_nome = $request->input('primeiro_nome');
        $time->nome_completo = $request->input('nome_completo');
        $time->sigla = $request->input('sigla');
        $time->cidade = $request->input('cidade');
        $time->estado = $request->input('estado');
        $time->pais = $request->input('pais');

        $image = $request->image;
        if($image!=""){

            $imagem_atual = $request->input('image_atual');
            $image_path = public_path()."/".$imagem_atual;
            if (File::exists($image_path)) {
                //File::delete($image_path);
                unlink($image_path);
            }

            $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->image->move(public_path('img/times'), $imageName);
            
            $local = "img/times/".$imageName;

            $time->image = $local;

        }

        $time->save();

        \Session::flash('flash_message',[
            'msg'=>"Time atualizada com Sucesso!",
            'class'=>"alert-success"
        ]);

        return redirect()->route('time.index',$id);        
        
    }
}
