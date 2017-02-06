@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastro Jogador</div>
                <div class="panel-body">
                    <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ route('jogador.salvar') }}">
                        {{ csrf_field() }}

                        <input type="hidden" id='user_id' name="user_id" value="{{ Auth::user()->id }}">

                        <div class="form-group {{ $errors->has('primeiro_nome') ? 'has-error' : '' }} ">
                            <label for="nome" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" name="nome" value="{{ old('nome') }}" required autofocus>
                                @if($errors->has('nome'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('nome_completo') ? 'has-error' : '' }} ">
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

                        <div class="form-group">
                            <label for="image" class="col-md-4 control-label">Imagem</label>
                            <div class="col-md-6">
                            <input class="form-control" type="file" id="image" name="image">
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('nascimento') ? 'has-error' : '' }}">
                            <label for="nascimento" class="col-md-4 control-label">Nascimento</label>

                            <div class="col-md-6">
                                <input id="nascimento" type="text" class="form-control" name="nascimento" value="{{ old('nascimento') }}" required autofocus>
                                @if($errors->has('nascimento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nascimento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('posicao') ? 'has-error' : '' }}">
                            <label for="posicao" class="col-md-4 control-label">Posição</label>

                            <div class="col-md-6">

                                <select id="posicao" name="posicao" class="form-control">
                                  <option value=""></option>
                                  <option value="1">Goleiro</option>
                                  <option value="2">Zagueiro</option>
                                  <option value="3">Lateral</option>
                                  <option value="4">Volante</option>
                                  <option value="5">Meio Campo</option>
                                  <option value="6">Atacante</option>
                                </select>
                                @if($errors->has('posicao'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('posicao') }}</strong>
                                    </span>
                                @endif
                               
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('altura') ? 'has-error' : '' }}">
                            <label for="altura" class="col-md-4 control-label">Altura</label>

                            <div class="col-md-6 {{ $errors->has('nome') ? 'has-error' : '' }}">
                                <input id="altura" type="text" class="form-control" name="altura" value="{{ old('altura') }}" required autofocus>
                                @if($errors->has('altura'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('altura') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('peso') ? 'has-error' : '' }}">
                            <label for="peso" class="col-md-4 control-label">Peso</label>

                            <div class="col-md-6 {{ $errors->has('nome') ? 'has-error' : '' }}">
                                <input id="peso" type="text" class="form-control" name="peso" value="{{ old('peso') }}" required autofocus>
                                @if($errors->has('peso'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('peso') }}</strong>
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
                                    Cadastrar jogador
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