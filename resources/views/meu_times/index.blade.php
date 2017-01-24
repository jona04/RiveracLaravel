@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li class="active">Meus Times</li>
                </ol>

                <div class="panel-body">
                    
                    <p>
                        <a class="btn btn-success" href="{{ route('meu_time.adicionar') }}">Adicionar Meu Time</a>
                    </p>

                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Sigla</th>
                                <th>Cidade</th>
                                <th>Estado</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($meu_times as $meu_time)
                            <tr>
                                <th scope="row">{{ $meu_time->id }}</th>
                                <td>{{ $meu_time->nome_completo }}</td>
                                <td>{{ $meu_time->sigla }}</td>
                                <td>{{ $meu_time->cidade }}</td>
                                <td>{{ $meu_time->estado }}</td>
                                <td>
                                    <a class="btn btn-default" href="#">Detalhe</a>
                                    <a class="btn btn-primary" href="#">Editar</a>
                                    <a class="btn btn-danger" href="javascript:(confirm('Deletar esse time?') ? window.location.href='#' : false )">Excluir</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div align="center">
                        {!! $meu_times->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection