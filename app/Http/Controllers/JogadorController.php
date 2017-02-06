<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class JogadorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

    	$jogadores = \App\Jogador::orderBy('posicao', 'ASC')->paginate(10);

    	return view('jogadores.index',compact('jogadores'));
    }

    public function adicionar()
    {
    	return view ('jogadores.adicionar');
    }

    public function salvar(\App\Http\Requests\JogadorRequest $request)
    {
        //$meu_time = \App\MeuTime::create($request->all());

        $user_id = $request->input('user_id');
        $nome = $request->input('nome');
        $image = $request->image;

        if($request->input('nascimento')==""){
            $nascimento = null;
        }else{
            $nascimento = date("Y-m-d H:i",strtotime($request->input('nascimento')." "."00:00"));
        }

        if($request->input('posicao')==""){
            $posicao = null;
        }else{
            $posicao = $request->input('posicao');
        }

        if($request->input('altura')==""){
            $altura = null;
        }else{
            $altura = $request->input('altura');
        }

        if($request->input('peso')==""){
            $peso = null;
        }else{
            $peso = $request->input('peso');
        }

        if($request->input('cidade')==""){
            $cidade = null;
        }else{
            $cidade = $request->input('cidade');
        }

        if($request->input('estado')==""){
            $estado = null;
        }else{
            $estado = $request->input('estado');
        }

        if($request->input('pais')==""){
            $pais = null;
        }else{
            $pais = $request->input('pais');
        }

        if($request->input('nome_completo')==""){
            $nome_completo = null;
        }else{
            $nome_completo = $request->input('nome_completo');
        }

        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->image->move(public_path('img/jogadores'), $imageName);
        
        $local = "img/jogadores/".$imageName;

        $jogador = \App\Jogador::create([
            'user_id'=>$user_id,
            'nome'=>$nome,
            'nome_completo'=>$nome_completo,
            'nascimento'=>$nascimento,
            'posicao'=>$posicao,
            'altura'=>$altura,
            'peso'=>$peso,
            'cidade'=>$cidade,
            'estado'=>$estado,
            'pais'=>$pais,
            'image'=>$local
            ]);

        
        \Session::flash('flash_message',[
                'msg'=>"Jogador adicionado com sucesso!",
                'class'=>"alert-success"
            ]);

        return redirect()->route('jogador.index');
    }

    public function editar($id)
    {
        $jogador = \App\Jogador::find($id);
        if(!$jogador){
            \Session::flash('flash_message',[
                'msg'=>"Não existe esse jogador cadastrado!",
                'class'=>"alert-danger"
            ]);
            return redirect()->route('jogador.index',$id);
        }

        return view('jogadores.editar',compact('jogador'));
    }


    public function atualizar(\App\Http\Requests\JogadorRequest $request,$id)
    {
        $jogador = \App\Jogador::find($id);
        
        //$user_id = $request->input('user_id');
        $jogador->nome = $request->input('nome');

        if($request->input('nascimento')==""){
            $nascimento = null;
        }else{
            $jogador->nascimento = $request->input('nascimento');
        }

        if($request->input('posicao')==""){
            $posicao = null;
        }else{
            $jogador->posicao = $request->input('posicao');
        }

        if($request->input('altura')==""){
            $altura = null;
        }else{
            $jogador->altura = $request->input('altura');
        }

        if($request->input('peso')==""){
            $peso = null;
        }else{
             $jogador->peso = $request->input('peso');
        }

        if($request->input('cidade')==""){
            $cidade = null;
        }else{
            $jogador->cidade = $request->input('cidade');
        }

        if($request->input('estado')==""){
            $estado = null;
        }else{
            $jogador->estado = $request->input('estado');
        }

        if($request->input('pais')==""){
            $pais = null;
        }else{
            $jogador->pais = $request->input('pais');
        }

        if($request->input('nome_completo')==""){
            $nome_completo = null;
        }else{    
            $jogador->nome_completo = $request->input('nome_completo');
        }

        $image = $request->image;
        if($image!=""){

            $imagem_atual = $request->input('image_atual');
            $image_path = public_path()."/".$imagem_atual;
            if (File::exists($image_path)) {
                unlink($image_path);
            }

            $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->image->move(public_path('img/jogadores'), $imageName);
        
            $local = "img/jogadores/".$imageName;

            $jogador->image = $local;

        }

        $jogador->save();

        \Session::flash('flash_message',[
            'msg'=>"Jogador atualizada com Sucesso!",
            'class'=>"alert-success"
        ]);

        return redirect()->route('jogador.index',$id);        
        
    }

    public function deletar($id)
    {
        $jogador = \App\Jogador::find($id);      

        $image_path = public_path($jogador->image);

        if (File::exists($image_path)) {
            unlink($image_path);
        }

        $jogador->delete();

        \Session::flash('flash_message',[
            'msg'=>"Jogador deletado com Sucesso!",
            'class'=>"alert-success"
        ]);

        return redirect()->route('jogador.index'); 
    }
}
