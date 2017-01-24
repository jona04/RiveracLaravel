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
                    
                    <p>
                        <a class="btn btn-success" href="{{ route('noticia.adicionar') }}">Adicionar Noticia</a>
                    </p>

                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Data</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($noticias as $noticia)
                            <tr <?php if ($noticia->visibilidade == 0): ?>
                                class="danger"
                            <?php endif ?> >
                                <th scope="row">{{ $noticia->id }}</th>
                                <td>{{ $noticia->titulo }}</td>
                                <td>{{ $noticia->created_at }}</td>
                                <td>
                                    <a class="btn btn-default" href="{{ route('noticia.detalhe',$noticia->id) }}">Detalhe</a>
                                    <a class="btn btn-primary" href="{{ route('noticia.editar',$noticia->id) }}">Editar</a>
                                    <a class="btn btn-danger" href="javascript:(confirm('Deletar essa noticia?') ? window.location.href='{{ route('noticia.deletar',$noticia->id) }}' : false )">Excluir</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div align="center">
                        {!! $noticias->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection