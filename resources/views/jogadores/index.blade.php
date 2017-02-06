@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li class="active">Jogadores</li>
                </ol>

                <div class="panel-body">
                    
                    <p>
                        <a class="btn btn-success" href="{{ route('jogador.adicionar') }}">Adicionar Jogador</a>
                    </p>

                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Imagem</th>
                                <th>Nome</th>
                                <th>Posicao</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jogadores as $jogador)
                            <tr>
                                <th scope="row">{{ $jogador->id }}</th>
                                <td><img src="{{ $jogador->image }}" width="60" /></td>
                                <td>{{ $jogador->nome }}</td>
                                <td>{{ $jogador->posicao }}</td>
                                <td>
                                    <a class="btn btn-default" href="#">Detalhe</a>
                                    <a class="btn btn-primary" href="{{ route('jogador.editar',$jogador->id) }}">Editar</a>
                                    <a class="btn btn-danger" href="javascript:(confirm('Deletar esse jogador?') ? window.location.href='{{ route('jogador.deletar',$jogador->id) }}' : false )">Excluir</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div align="center">
                        {!! $jogadores->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection