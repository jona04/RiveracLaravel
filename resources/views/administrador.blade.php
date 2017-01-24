@extends('layouts.app')

@section('title')
<title>Admin - {{ config('app.name', 'River') }}</title>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p class=""><center>Bem vindo a área do Administrador!</center></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
