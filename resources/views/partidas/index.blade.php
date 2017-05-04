@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li class="active">Partidas</li>
                </ol>

                <div class="panel-body">
                    
                    <p>
                        <a class="btn btn-success" href="{{ route('partida.adicionar') }}">Adicionar Partida</a>
                    </p>

                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Adversario</th>
                                <th>Estadio</th>
                                <th>Data</th>
                                <th>Campeonato</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($partidas as $partida)
                            <tr>
                                <th scope="row">{{ $partida->id }}</th>
                                <td>{{ $partida->time->primeiro_nome }}</td>
                                <td>{{ $partida->estadio->nome }}</td>
                                <td>{{ $partida->data }}</td>
                                <td>{{ $partida->campeonato->nome }}</td>
                                <td>
                                    <a class="btn btn-default" href="#">Detalhe</a>
                                    <a class="btn btn-primary" href="{{ route('partida.editar',$partida->id) }}">Editar</a>
                                    <a class="btn btn-danger" href="javascript:(confirm('Deletar esse time?') ? window.location.href='#' : false )">Excluir</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div align="center">
                        {!! $partidas->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection