@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li class="active">Videos</li>
                </ol>

                <div class="panel-body">
                    
                    <p>
                        <a class="btn btn-success" href="{{ route('video.adicionar') }}">Adicionar Videos</a>
                    </p>

                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>url</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($videos as $video)
                            <tr>
                                <th scope="row">{{ $video->id }}</th>
                                <td>{{ $video->titulo }}</td>
                                <td>{{ $video->url }}</td>
                                <td>
                                    <a class="btn btn-default" href="#">Detalhe</a>
                                    <a class="btn btn-primary" href="{{ route('video.editar',$video->id) }}">Editar</a>
                                    <a class="btn btn-danger" href="javascript:(confirm('Deletar esse video?') ? window.location.href='{{ route('video.deletar',$video->id) }}' : false )">Excluir</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div align="center">
                        {!! $videos->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection