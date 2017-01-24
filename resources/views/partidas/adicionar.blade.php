@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastro Partida</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('partida.salvar') }}">
                        {{ csrf_field() }}

                        <input type="hidden" id='user_id' name="user_id" value="{{ Auth::user()->id }}">

                        <div class="form-group {{ $errors->has('meu_time_id') ? 'has-error' : '' }}">
                            <label for="meu_time_id" class="col-md-4 control-label">Meu Time</label>

                            <div class="col-md-6">

                                <select id="meu_time_id" name="meu_time_id" class="form-control">
                                  <option value=""></option>
                                  @foreach($meu_times as $meu_time)
                                  <option value="{{ $meu_time->id }}">{{ $meu_time->primeiro_nome }}</option>
                                  @endforeach
                                </select>
                                @if($errors->has('meu_time_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('meu_time_id') }}</strong>
                                    </span>
                                @endif
                               
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('time_id') ? 'has-error' : '' }}">
                            <label for="time_id" class="col-md-4 control-label">Adversario</label>

                            <div class="col-md-6">

                            	<select id="time_id" name="time_id" class="form-control">
								  <option value=""></option>
                                  @foreach($times as $time)
								  <option value="{{ $time->id }}">{{ $time->primeiro_nome }}</option>
								  @endforeach
								</select>
                                @if($errors->has('time_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('time_id') }}</strong>
                                    </span>
                                @endif
                               
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('estadio_id') ? 'has-error' : '' }}">
                            <label for="estadio_id" class="col-md-4 control-label">Estadio</label>

                            <div class="col-md-6">

                            	<select id="estadio_id" name="estadio_id" class="form-control">
								  <option value=""></option>
                                  @foreach($estadios as $estadio)
                                  <option value="{{ $estadio->id }}">{{ $estadio->nome }}</option>
                                  @endforeach
								</select>
                                @if($errors->has('estadio_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estadio_id') }}</strong>
                                    </span>
                                @endif
                               
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('mando_de_campo') ? 'has-error' : '' }}">
                            <label for="mando_de_campo" class="col-md-4 control-label">Mando de campo</label>

                            <div class="col-md-6">

                            	<select id="mando_de_campo" name="mando_de_campo" class="form-control">
								  <option value=""></option>
                                  <option value="1">Fora de casa</option>
								  <option value="2">Dentro de casa</option>
								</select>
                                @if($errors->has('mando_de_campo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mando_de_campo') }}</strong>
                                    </span>
                                @endif
                               
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('campeonato_id') ? 'has-error' : '' }}">
                            <label for="campeonato_id" class="col-md-4 control-label">Campeonato</label>

                            <div class="col-md-6">

                            	<select id="campeonato_id" name="campeonato_id" class="form-control">
								  <option value=""></option>
                                  @foreach($campeonatos as $campeonato)
                                  <option value="{{ $campeonato->id }}">{{ $campeonato->nome }}</option>
                                  @endforeach
								</select>
                                @if($errors->has('campeonato_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('campeonato_id') }}</strong>
                                    </span>
                                @endif
                               
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('dia') ? 'has-error' : '' }}">
                            <label for="dia" class="col-md-4 control-label">Dia</label>

                            <div class="col-md-3">
                                <input id="dia" type="text" class="form-control" name="dia" value="{{ old('dia') }}" required autofocus>
                                @if($errors->has('dia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('hora') ? 'has-error' : '' }}">
                            <label for="hora" class="col-md-4 control-label">Hora</label>

                            <div class="col-md-3">
                                <input id="hora" type="text" class="form-control" name="hora" value="{{ old('hora') }}" required autofocus>
                                @if($errors->has('hora'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hora') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Cadastrar Partida
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