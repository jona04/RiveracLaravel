@extends('layouts.index')

@section('title')
<title>{{ $noticia->titulo }}</title>
@endsection

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">

		<ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('principal.index') }}">Home</a></li>
                    <li class="active">{{ $noticia->titulo }}</li>

                </ol>

			
			<div class="page-header"><h1><strong>{{ $noticia->titulo }}</strong></h1>
				<small>Por: {{ $usuario->name }}</small><br>
				<small>Publicado no dia {{ $dia }} as {{ $hora }}</small>
			</div>

			<div class="col-md-12">
				{!! $noticia->conteudo !!}
			</div>

		</div>
	</div>
</div>

@endsection