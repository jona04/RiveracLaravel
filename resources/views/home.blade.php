@extends('layouts.index')

@section('title')
<title>{{ config('app.name', 'River') }}</title>
@endsection

@section('content')

<!-- Slider-->
<section id="divslider" class="div_destaque">
    
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-1">
        
                <div class="slide-principal">
                   
                    @foreach($noticias_destaques as $destaque)
                    <div class="slide_principal_item">
                        
                        
                        <img src="{{ $destaque->image }}" alt="{{ $destaque->titulo }}" title="{{ $destaque->titulo }}" class="img_div_slide img-responsive">
                        
                        <div class="box_slide_principal_titulo">
	                        <a href="{{ route('noticia.pagina',['titulo'=>str_slug($destaque->titulo),'id'=>$destaque->id]) }}">


	                            <h3 class=""><strong><center>{{ $destaque->titulo }}</center></strong></h3>


	                        </a>
	                    </div>
	                   
	                    
	                </div>
                    @endforeach

                    
                
            	</div>
        	</div>
            <div class="col-xs-12 col-md-4">

                <div class="tabela-principal panel panel-danger">
                    <!-- Default panel contents -->
                      <!--<div class="panel-heading"><strong>Campeonato Piauiense</strong></div>-->

                    <ul class="nav nav-tabs nav-justified">
                        
                        <li class="active"><a data-toggle="tab" href="#tab1">Piauiense</a></li>
                        <li><a data-toggle="tab" href="#tab2">Copa&nbsp;Nordeste</a></li>
                        <li><a data-toggle="tab" href="#tab3">Série D</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="tab1" class="tab-pane fade in active">
                            <div class="page-header">
                                <h3><center><strong>Campeonato Piauense</strong></center></h3>
                            </div>

                            <div class="panel-body">
                              
                              <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>POS</th>
                                            <th>TIME</th>
                                            <th>PONTOS</th>                              
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <th><strong>1</strong></th>
                                            <td><strong>Altos</strong></td>
                                            <td><strong>3</strong></td>
                                        </tr>
                                        <tr>
                                            <th><strong>2</strong></th>
                                            <td><strong>Flamengo-PI</strong></td>
                                            <td><strong>3</strong></td>
                                        </tr>
                                        <tr>
                                            <th><strong>3</strong></th>
                                            <td><strong>Picos</strong></td>
                                            <td><strong>1</strong></td>
                                        </tr>
                                        <tr>
                                            <th><strong>4</strong></th>
                                            <td><strong>River-PI</strong></td>
                                            <td><strong>1</strong></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                               
                                <center><a href="http://globoesporte.globo.com/pi/futebol/campeonato-piauiense/" target="_blank" class="btn btn-danger"><strong>Ver tabela completa</strong></a></center>

                            </div>
                        </div>

                        <div id="tab2" class="tab-pane fade">
                            <div class="page-header">
                                <h3><center><strong>Copa Nordeste</strong></center></h3>
                            </div>

                            <div class="panel-body">
                              
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>POS</th>
                                            <th>TIME</th>
                                            <th>PONTOS</th>                              
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <th><strong>1</strong></th>
                                            <td><strong>River-PI</strong></td>
                                            <td><strong>3</strong></td>
                                        </tr>
                                        <tr>
                                            <th><strong>2</strong></th>
                                            <td><strong>Sport</strong></td>
                                            <td><strong>3</strong></td>
                                        </tr>
                                        <tr>
                                            <th><strong>3</strong></th>
                                            <td><strong>Sampaio Corrêa</strong></td>
                                            <td><strong>0</strong></td>
                                        </tr>
                                        <tr>
                                            <th><strong>4</strong></th>
                                            <td><strong>Juazeirense</strong></td>
                                            <td><strong>0</strong></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>

                                <center><a href="http://globoesporte.globo.com/futebol/copa-do-nordeste/" target="_blank" class="btn btn-danger"><strong>Ver tabela completa</strong></a></center>

                            </div>
                        </div>

                        <div id="tab3" class="tab-pane fade">
                            <div class="page-header">
                                <h3><center><strong>Brasileirão Série D</strong></center></h3>
                            </div>

                            <div class="panel-body">
                              
                                <!--
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>POS</th>
                                            <th>TIME</th>
                                            <th>PONTOS</th>                              
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($times as $time)
                                        <tr>
                                            <th><strong>1</strong></th>
                                            <td><strong>{{ $time}}</strong></td>
                                            <td><strong>2</strong></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                -->

                                <center><a href="" class="btn btn-danger"><strong>Ver tabela completa</strong></a></center>

                            </div>
                        </div>

                    </div>                    
                </div>
            </div>
    	</div>
	</div>
</section>

<!-- Prox jogo-->
<section id="proximojogo" class="div_prox_jogo">
    <div class="container">
        
        <div class="row">
            <div class="col-xs-12">
                <div class="page-header text-center"><h1>Próxima Partida</h1></div>
            </div>
        </div>
       
        <div class="row conteudo_proxjogo">
            <!--<div class="hidden-xs hidden-sm col-md-4">
                <img src="/img/back2_1.png" class="img-responsive" alt="Jogador River">
            </div>-->
            <div class="col-xs-12 col-md-offset-2 col-md-8 text-center caixa_conteudo_proxjogo">
                
                <h4 class="prox_jogo_nome_campeonato">{{ $partida_first->campeonato->nome }} - {{ $partida_first->campeonato->ano }}</h4>
                
                <div class="col-xs-12">
                    
                    <div class="col-xs-12 col-sm-5">
                        <h1>{{ $partida_first->meu_time->primeiro_nome }}</h1>
                        <img src="{{ $partida_first->meu_time->image }}" height="100px" />
                    </div>
                    <div class="col-xs-12 col-sm-2"><h1>X</h1></div>
                    <div class="col-xs-12 col-sm-5">
                        <h1>{{ $partida_first->time->primeiro_nome }}</h1>
                        <img src="{{ $partida_first->time->image }}" height="100px" />
                    </div>
                </div>
                
                <div class="col-xs-12 text-center">
                      
                    <div class="col-xs-12 text-center">
                        <h2>
                            {{ $partida_first->estadio->nome }}
                        </h2>
                    </div>
                    
                    <div class="col-xs-6">
                        <h2><?php 
                            $date = new DateTime($partida_first->data);
                            echo $result = $date->format('d-m');
                        ?></h2>
                    </div>
                    <div class="col-xs-6">
                        <h2><?php 
                            $date = new DateTime($partida_first->data);
                            echo $result = $date->format('H:i');
                        ?></h2>
                    </div>
                    
                    
                    
                    <div class="col-sm-offset-2 col-sm-8 text-center">
                        <div id="getting-started" class="row prox_jogo_tempo">

                        </div>
                    </div>
                    <br />
                    
                </div>
                
            </div>

        </div>
    </div>
</section>
<!-- Fim prox jogo -->


<!-- Noticias-->
<section id="noticias" class="div_noticias">
    <div class="container_fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-header text-center"><h1>Últimas Notícias</h1></div>
            </div>
        </div>
        <div class="row noticias_row">   

            @foreach($noticias1 as $noticia)
            <div class="col-sm-3">
                <div class="noticias_item">
                    <a href="{{ route('noticia.pagina',['titulo'=>str_slug($noticia->titulo),'id'=>$noticia->id]) }}">
                        <img src="{{ $noticia->image }}" alt="{{ $noticia->titulo }}" title="{{ $noticia->titulo }}" class="img-responsive grayscale_noticias">
                        <h3>{{ $noticia->titulo }}</h3>
                    </a>
                </div>
            </div>
            @endforeach   
            
        <div class="row noticias_row">           
            @foreach($noticias2 as $noticia)
            <div class="col-sm-3">
                <div class="noticias_item">
                    <a href="{{ route('noticia.pagina',['titulo'=>str_slug($noticia->titulo),'id'=>$noticia->id]) }}">
                        <img src="{{ $noticia->image }}" alt="{{ $noticia->titulo }}" title="{{ $noticia->titulo }}" class="img-responsive grayscale_noticias">
                        <h3>{{ $noticia->titulo }}</h3>
                    </a>
                </div>
            </div>
            @endforeach   
        </div>
        <br>
        <!--<div class="row row_mais_noticias">
            <div class="col-xs-12 text-center">
                <a href="#" class=""><h4><strong>Ver todas as noticias</strong></h4></a>
            </div>
        </div> -->
        
    </div>

</section>
<!-- FIM Noticias-->


<!-- Videos -->
<section id="canaldogalo" class="div_canal_galo">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-header text-center"><h1>River TV</h1></div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12">

                <div class="embed-responsive embed-responsive-16by9">
                    <iframe id="video_principal_canal" class="embed-responsive-item" src="{{ $video_first->url }}"></iframe>

                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12 ">
                <div class="clearfix">

                    <div class="slide-canal-galo">
                        @foreach($videos as $video)
                        <div class="slide_video">
                            
                            <div class="videos_item">
                                <a href=""><img class="img-responsive nome_imagem_video" alt="{{ $video->titulo }}" name="{{ $video->url }}" src="{{ $video->url_img }}"></a>
                                <!--<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/lFAlQvSRdaQ" frameborder="0" allowfullscreen></iframe>-->
                                <h4>{{ $video->titulo }}</h4>
                            </div>

                        </div>
                          @endforeach
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FIM Videos-->

<!-- Inici oElenco -->
<!--
<section id="elenco" class="div_elenco">
    <div class="container">
        
        <div class="row">
            <div class="col-xs-12">
                <div class="page-header text-center"><h1>Elenco</h1></div>
            </div>
        </div>
        
        
        <div class="row">
            <div class="col-xs-12 ">
                <div class="clearfix">

                    <div class="slide-elenco">

                        @foreach($jogadores as $jogador)
                        <div class="slide_elenco text-center">

                            <div class="elenco_item">
                                <a href="#" class="">
                                    <img src="{{ $jogador->image }}" class="center-block" height="400px" />
                                    <span class="nome_jogador">{{ $jogador->nome }}</span>
                                </a>
                                
                            </div>
                        </div>
                       @endforeach

                </div>
            </div>
        </div>
        
        
        
    </div>
</section>
-->
<!-- FIM Elenco -->

@endsection