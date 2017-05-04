@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Atualizar Video</div>
                <div class="panel-body">
                    <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ route('video.atualizar',$video->id) }}">
                        {{ csrf_field() }}

						<input type="hidden" name="_method" value="put">

                        <input type="hidden" id='user_id' name="user_id" value="{{ Auth::user()->id }}">

                        <div class="form-group {{ $errors->has('titulo') ? 'has-error' : '' }} ">
                            <label for="titulo" class="col-md-4 control-label">Titulo</label>

                            <div class="col-md-6">
                                <input id="titulo" type="text" class="form-control" name="titulo" value="{{ $video->titulo }}" required autofocus>
                                @if($errors->has('titulo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('titulo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('url') ? 'has-error' : '' }}">
                            <label for="url" class="col-md-4 control-label">Url</label>

                            <div class="col-md-6">
                                <input id="url" type="text" class="form-control" name="url" value="{{ $video->url }}" required autofocus>
                                @if($errors->has('url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Cadastrar video
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