<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')
   <!--<title>{{ config('app.name', 'River') }}</title> -->

    <link rel="shortcut icon" href="{{{ asset('/img/favicon.png') }}}">

    <link href="/css/estilo.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/slick.css" rel="stylesheet">

    <link href="/css/navigation.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

    @include('layouts._includes._modals')
    @include('layouts._includes._topo_principal')
    @include('layouts._includes._nav_principal')
    @include('layouts._includes._propaganda_topo')


    @yield('content')
    
    @include('layouts._includes._footer_principal')
    
    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <!-- usado para slide personalizado //usado no elenco e videos -->
    <script src="/js/slick.min.js"></script>
    <!-- codigos jquery e javascript criado pelo desenvolvedor -->
    <script src="/js/main.js"></script>
    <!-- usado para contador de tempo // prox jogo -->
    <script src="/js/jquery.countdown.min.js"></script>
    
    <script type="text/javascript">
        
        $('#getting-started').countdown('{{ $partida_first->data }}', function(event) {
           var $this = $(this).html(event.strftime(''
            
             + "<div class='dias col-xs-3 text-center'><h1>%D</h1>DIAS</div>"
             + "<div class='dias col-xs-3 text-center'><h1>%H</h1>HORAS</div>"
             + "<div class='dias col-xs-3 text-center'><h1>%M</h1>MINUTOS</div>"
             + "<div class='dias col-xs-3 text-center'><h1>%S</h1>SEGUNDOS</div>"));
        });

        //funcao para ativar scroll animado quando aperta no link do menu
        $(function() {
          $('a[href*="#"]:not([href="#"],[href="#tab1"],[href="#tab2"],[href="#tab3"])').click(function() {
            //alert(location.pathname.replace(/^\//,'') + " - "+location.hostname+" - "+this.hostname);

            if (location.pathname.replace(/^\//,'') == '' && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html, body').animate({
                  scrollTop: target.offset().top
                }, 1000);
                return false;
              }
            }else{
              window.location.href = "{{ route('principal.index') }}";
            }
          });
        });
        
    </script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-89722107-1', 'auto');
      ga('send', 'pageview');

    </script>
</body>
</html>
