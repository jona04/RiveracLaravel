@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li class="active">Campeonatos</li>
                </ol>

                <div class="panel-body">
                    
                    <p>
                        <a class="btn btn-success" href="{{ route('campeonato.adicionar') }}">Adicionar Campeonato</a>
                    </p>

                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Ano</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($campeonatos as $campeonato)
                            <tr>
                                <th scope="row">{{ $campeonato->id }}</th>
                                <td>{{ $campeonato->nome }}</td>
                                <td>{{ $campeonato->ano }}</td>
                                <td>
                                    <a class="btn btn-default" href="#">Detalhe</a>
                                    <a class="btn btn-primary" href="{{ route('campeonato.editar',$campeonato->id) }}">Editar</a>
                                    <a class="btn btn-danger" href="javascript:(confirm('Deletar esse time?') ? window.location.href='#' : false )">Excluir</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div align="center">
                        {!! $campeonatos->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection