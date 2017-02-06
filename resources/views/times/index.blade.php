@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li class="active">Times</li>
                </ol>

                <div class="panel-body">
                    
                    <p>
                        <a class="btn btn-success" href="{{ route('time.adicionar') }}">Adicionar Times</a>
                    </p>

                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Imagem</th>
                                <th>Nome</th>
                                <th>Sigla</th>
                                <th>Estado</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($times as $time)
                            <tr>
                                <th scope="row">{{ $time->id }}</th>
                                <td><img src="{{ $time->image }}" width="60" /></td>
                                <td>{{ $time->nome_completo }}</td>
                                <td>{{ $time->sigla }}</td>
                                <td>{{ $time->estado }}</td>
                                <td>
                                    <a class="btn btn-default" href="#">Detalhe</a>
                                    <a class="btn btn-primary" href="{{ route('time.editar',$time->id) }}">Editar</a>
                                    <a class="btn btn-danger" href="javascript:(confirm('Deletar esse time?') ? window.location.href='#' : false )">Excluir</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div align="center">
                        {!! $times->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection