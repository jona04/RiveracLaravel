<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuTimeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

    	$meu_times = \App\MeuTime::paginate(10);

    	return view('meu_times.index',compact('meu_times'));
    }

    public function adicionar()
    {
    	return view ('meu_times.adicionar');
    }

    public function salvar(\App\Http\Requests\MeuTimeRequest $request)
    {
    	//$meu_time = \App\MeuTime::create($request->all());

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

        $time = \App\MeuTime::create([
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
                'msg'=>"Meu Time adicionado com sucesso!",
                'class'=>"alert-success"
            ]);

        return redirect()->route('meu_time.adicionar');
    }
}
