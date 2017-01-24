@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li class="active">Estadios</li>
                </ol>

                <div class="panel-body">
                    
                    <p>
                        <a class="btn btn-success" href="{{ route('estadio.adicionar') }}">Adicionar Estadio</a>
                    </p>

                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Cidade</th>
                                <th>Estado</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($estadios as $estadio)
                            <tr>
                                <th scope="row">{{ $estadio->id }}</th>
                                <td>{{ $estadio->nome }}</td>
                                <td>{{ $estadio->cidade }}</td>
                                <td>{{ $estadio->estado }}</td>
                                <td>
                                    <a class="btn btn-default" href="#">Detalhe</a>
                                    <a class="btn btn-primary" href="{{ route('estadio.editar',$estadio->id) }}">Editar</a>
                                    <a class="btn btn-danger" href="javascript:(confirm('Deletar esse time?') ? window.location.href='#' : false )">Excluir</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div align="center">
                        {!! $estadios->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection