<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header navbar-site-river">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-navegacao">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <a class="navbar-brand hidden-sm hidden-md hidden-lg" href="{{ route('principal.index') }}">
                <img src="/img/logo_river.png" alt="Logo River" />
            </a>
            
            
            
        </div>
        <div class="container">

            <div class="collapse navbar-collapse" id="menu-navegacao">
            
                <ul id="nav" class="nav navbar-nav hidden-sm hidden-md hidden-lg ">
                    
                    <li role="presentation">
                            
                            <a href="{{ route('diretoria.pagina') }}">
                                <span> Diretoria</span>
                            </a>
                    </li>

                    <li role="presentation">
                            
                            <a href="#divslider">
                                <span> Destaques</span>
                            </a>
                    </li>

                    <li role="presentation">
                            
                            <a href="#proximojogo">
                                <span> Próximo Jogo</span>
                            </a>
                    </li>
                    
                    <li role="presentation">
                        <a href="#noticias">
                            <span> Notícias</span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#canaldogalo">
                          
                            <span> River TV</span>
                        </a>
                    </li> 
                    
                    <li role="presentation">
                        <a href="#patrocinadores">
                          
                            <span> Patrocinadores</span>
                        </a>
                    </li>
                    
                </ul>

                <ul class="navigation hidden-xs">
                    
                    <li role="presentation">
                            
                            <a href="{{ route('diretoria.pagina') }}">
                                <h2> Diretoria</h2>
                            </a>
                    </li>

                    <li role="presentation">
                            
                            <a href="#divslider">
                                <h2> Destaques</h2>
                            </a>
                    </li>
                    
                    <li role="presentation">
                            
                            <a href="#proximojogo">
                                <h2> Próximo Jogo</h2>
                            </a>
                    </li>
                    
                    <li role="presentation">
                        <a href="#noticias">
                            <h2> Notícias</h2>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#canaldogalo">
                          
                            <h2> River TV</h2>
                        </a>
                    </li> 
                    
                    <li role="presentation">
                        <a href="#patrocinadores">
                          
                            <h2> Patrocinadores</h2>
                        </a>
                    </li>
                    
                </ul>
            

                <!--<div class="container hidden-xs">

                     <a href="#" class="navbar-text navbar-right navbar-link" data-toggle="modal" data-target="#buscaSite">
                        <i class="fa fa-search fa-inverse fa-2x" aria-hidden="true"></i>
                    </a>
                </div>-->

            </div>
        </div>



        
    </div>
</nav>