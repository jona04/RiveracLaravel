@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastro Campeonato</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('campeonato.salvar') }}">
                        {{ csrf_field() }}

                        <input type="hidden" id='user_id' name="user_id" value="{{ Auth::user()->id }}">

                        <div class="form-group {{ $errors->has('nome') ? 'has-error' : '' }}">
                            <label for="nome" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" name="nome" value="{{ old('nome_completo') }}" required autofocus>
                                @if($errors->has('nome'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('ano') ? 'has-error' : '' }}">
                            <label for="ano" class="col-md-4 control-label">Ano</label>

                            <div class="col-md-6">
                                <input id="ano" type="text" class="form-control" name="ano" value="{{ old('ano') }}" required autofocus>
                                @if($errors->has('ano'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ano') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Cadastrar Campeonato
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