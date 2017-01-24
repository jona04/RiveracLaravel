@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastro Noticia</div>
                <div class="panel-body">

                	<form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ route('noticia.atualizar',$noticia->id) }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="_method" value="put">

                        <input type="hidden" id='user_id' name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" id='image_atual' name="image_atual" value="{{ $noticia->image }}">

                        <div class="form-group">
                          <label for="visibilidade" class="col-md-2 control-label">Visibilidade no site</label>
                            <input type="radio" name="visibilidade" id="visibilidade1" value="0" <?php if ($noticia->visibilidade == 0): ?>
                                checked
                            <?php endif ?>>
                            Desabilitado

                            <input type="radio" name="visibilidade" id="visibilidade2" value="1" <?php if ($noticia->visibilidade == 1): ?>
                                checked
                            <?php endif ?>>
                            Habilitado
                          </label>
                        </div>
                        

						<div class="form-group">
						  <label for="titulo" class="col-md-2 control-label">Titulo Noticia</label>
						  <div class="col-md-10">
                                <input id="titulo" type="text" class="form-control" name="titulo" value="{{ $noticia->titulo }}" required autofocus>
                                @if($errors->has('titulo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('titulo') }}</strong>
                                    </span>
                                @endif
                            </div>
						 
						</div>

                        <div class="form-group">
                            <label for="image" class="col-md-2 control-label">Imagem</label>
                            <div class="col-md-10">
                            <input class="form-control" type="file" id="image" name="image">
                            <p class="help-block">Imagem que ficará visível para a noticia</p>
                            </div>
                        </div>
				       
				    	<div class="form-group">
						  <label for="conteudo" class="col-md-2 control-label">Conteudo Noticia</label>
						  <div class="col-md-10">
                                <textarea name="conteudo" id="summernote">{{ $noticia->conteudo }}</textarea>
                                @if($errors->has('conteudo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('conteudo') }}</strong>
                                    </span>
                                @endif
                            </div>
						 
						</div>
						
						<div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" class="btn btn-primary">
                                    Atualizar Noticia
                                </button>
                            </div>
                        </div>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection