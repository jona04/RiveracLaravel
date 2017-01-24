@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastro Time</div>
                <div class="panel-body">
                    <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ route('time.salvar') }}">
                        {{ csrf_field() }}

                        <input type="hidden" id='user_id' name="user_id" value="{{ Auth::user()->id }}">

                        <div class="form-group {{ $errors->has('primeiro_nome') ? 'has-error' : '' }} ">
                            <label for="primeiro_nome" class="col-md-4 control-label">Primeiro Nome</label>

                            <div class="col-md-6">
                                <input id="primeiro_nome" type="text" class="form-control" name="primeiro_nome" value="{{ old('primeiro_nome') }}" required autofocus>
                                @if($errors->has('primeiro_nome'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('primeiro_nome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="image" class="col-md-4 control-label">Imagem</label>
                            <div class="col-md-6">
                            <input class="form-control" type="file" id="image" name="image">
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('nome_completo') ? 'has-error' : '' }}">
                            <label for="nome_completo" class="col-md-4 control-label">Nome Completo</label>

                            <div class="col-md-6">
                                <input id="nome_completo" type="text" class="form-control" name="nome_completo" value="{{ old('nome_completo') }}" required autofocus>
                                @if($errors->has('nome_completo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nome_completo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('sigla') ? 'has-error' : '' }}">
                            <label for="sigla" class="col-md-4 control-label">Sigla</label>

                            <div class="col-md-6">
                                <input id="sigla" type="text" class="form-control" name="sigla" value="{{ old('sigla') }}" required autofocus>
                                @if($errors->has('sigla'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sigla') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('cidade') ? 'has-error' : '' }}">
                            <label for="cidade" class="col-md-4 control-label">Cidade</label>

                            <div class="col-md-6 {{ $errors->has('nome') ? 'has-error' : '' }}">
                                <input id="cidade" type="text" class="form-control" name="cidade" value="{{ old('cidade') }}" required autofocus>
                                @if($errors->has('cidade'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cidade') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('estado') ? 'has-error' : '' }}">
                            <label for="estado" class="col-md-4 control-label">Estado</label>

                            <div class="col-md-6 {{ $errors->has('nome') ? 'has-error' : '' }}">
                                <input id="estado" type="text" class="form-control" name="estado" value="{{ old('estado') }}" required autofocus>
                                @if($errors->has('estado'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estado') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('pais') ? 'has-error' : '' }}">
                            <label for="pais" class="col-md-4 control-label">País</label>

                            <div class="col-md-6">
                                <input id="pais" type="text" class="form-control" name="pais" value="{{ old('pais') }}" required autofocus>
                                @if($errors->has('pais'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pais') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Cadastrar time
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