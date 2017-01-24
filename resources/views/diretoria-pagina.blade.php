@extends('layouts.index')

@section('title')
<title>Diretoria - {{ config('app.name', 'River') }}</title>
@endsection

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<ol class="breadcrumb panel-heading">
	            <li><a href="{{ route('principal.index') }}">Home</a></li>
	            <li class="active">Diretoria</li>

	        </ol>

			
			<div class="page-header">
				<h1><strong>Diretoria do clube</strong></h1>
			</div>

			<div class="col-md-12">
				
				<p><strong>RIVER ATLÉTICO CLUBE</strong></p>
			
				<p><strong>Eterno Presidente</strong><br>
				Afrânio Messias Alves Nunes<p>
				<br>
				<p><strong>DIRETORIA EXECUTIVA 2015-2017</strong></p>

				<p><strong>Presidente</strong><br>
				Elizeu Aguiar</p>
				<p><strong>Presidente do Conselho Deliberativo</strong><br>
				Delson Rocha</p>
				<p><strong>Vice-presidente</strong><br>
				Júlio Arcoverde</p>
				<p><strong>Secretário Geral</strong><br>
				João de Deus</p>
				<p><strong>Vice-presidente Financeiro</strong><br>
				Francisco das Chagas Costa</p>
				<p><strong>Vice-presidente Social</strong><br>
				Haroldo Francisco</p>
				<p><strong>Vice-presidente Patrimonial</strong><br>
				Sheila Viana Rocha</p>
				<p><strong>Vice-presidente Amador</strong><br>
				Franklin Kalume Brigido </p>
				<p><strong>Vice-presidente Jurídico</strong><br>
				Jairo Cavalcante</p>
				<p><strong>Vice-presidente Dep. Médico</strong><br>
				Dr. Miguel Ângelo Costa Lago</p>
				<p><strong>Vice-presidente Publicidade</strong><br>
				Geraldo Alves</p>
				<p><strong>Vice-presidente de Futebol</strong><br>
				Renato Berger</p>
				<p><strong>Diretor de Futebol</strong><br>
				Robert Ibiapina</p>
			</div>
		</div>
	</div>
</div>

@endsection