@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li class="active">Noticias</li>
                </ol>

                <div class="panel-body">
                    
                    <div class="page-header"><h1>{{ $noticia->titulo }}</h1>
						<small>{{ $noticia->created_at }}</small>
					</div>

					<div class="col-md-12">
						{!! $noticia->conteudo !!}
					</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection