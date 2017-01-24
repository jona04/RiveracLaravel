<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Image;

class NoticiaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

    	$noticias = \App\Noticia::orderBy('created_at', 'DESC')->paginate(10);

    	return view('noticias.index',compact('noticias'));
    }

    public function adicionar()
    {
    	return view ('noticias.adicionar');
    }

    public function salvar(\App\Http\Requests\NoticiaRequest $request)
    {
    	//$noticia = \App\Noticia::create($request->all());

        $user_id = $request->input('user_id');
        $titulo = $request->input('titulo');
        $image = $request->image;
        $conteudo = $request->input('conteudo');
        $visibilidade = $request->input('visibilidade');

        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);
        
         $local = "images/".$imageName;
        // create instance of Intervention Image
        $img = Image::make(public_path()."/".$local);
        // resize image to fixed size
        // See the docs - http://image.intervention.io/api/resize
        $img->resize(500, 400)->save();

        $noticia = \App\Noticia::create(['user_id' => $user_id,
                                            'titulo'=>$titulo,
                                            'conteudo'=> $conteudo,
                                            'image'=>$local,
                                            'visibilidade'=>$visibilidade]);

    	\Session::flash('flash_message',[
                'msg'=>"Noticia adicionado com sucesso! Agora para bota-la no ar você precisa adita-la",
                'class'=>"alert-success"
            ]);
        return redirect()->route('noticia.adicionar');
    }

    public function editar($id)
    {
        $noticia = \App\Noticia::find($id);
        if(!$noticia){
            \Session::flash('flash_message',[
                'msg'=>"Não existe essa noticia cadastrado!",
                'class'=>"alert-danger"
            ]);
            return redirect()->route('noticia.detalhe',$id);
        }

        return view('noticias.editar',compact('noticia'));
    }

    public function atualizar(\App\Http\Requests\NoticiaRequest $request,$id)
    {
        $noticia = \App\Noticia::find($id);
        
        //$user_id = $request->input('user_id');
        $noticia->titulo = $request->input('titulo');
        $noticia->conteudo = $request->input('conteudo');
        $noticia->visibilidade = $request->input('visibilidade');

        $image = $request->image;
        if($image!=""){

            $imagem_atual = $request->input('image_atual');
            $image_path = public_path()."/".$imagem_atual;
            if (File::exists($image_path)) {
                //File::delete($image_path);
                unlink($image_path);
            }

            $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            
             $local = "images/".$imageName;
            // create instance of Intervention Image
            $img = Image::make(public_path()."/".$local);
            // resize image to fixed size
            // See the docs - http://image.intervention.io/api/resize
            $img->resize(500, 400)->save();

            $noticia->image = $local;

        }

        $noticia->save();

        \Session::flash('flash_message',[
            'msg'=>"Noticia atualizada com Sucesso!",
            'class'=>"alert-success"
        ]);

        return redirect()->route('noticia.detalhe',$id);        
        
    }

    public function deletar($id)
    {
        $noticia = \App\Noticia::find($id);      

        $image_path = public_path($noticia->image);

        if (File::exists($image_path)) {
            //File::delete($image_path);
            unlink($image_path);
        }

        $noticia->delete();

        \Session::flash('flash_message',[
            'msg'=>"Noticia deletada com Sucesso!",
            'class'=>"alert-success"
        ]);

        return redirect()->route('noticia.index'); 
    }

    public function detalhe($id)
    {
        $noticia = \App\Noticia::find($id);
        return view('noticias.detalhe',compact('noticia'));
    }

}
