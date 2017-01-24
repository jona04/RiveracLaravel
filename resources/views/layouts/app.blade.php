<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'River') }}</title>

    <link href="/css/app.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        
        @include('layouts._includes._nav_admin')

        @if(Session::has('flash_message'))
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div align="center" class="alert {{ Session::get('flash_message')['class'] }}">
                            {{ Session::get('flash_message')['msg'] }}
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>

    <!-- include summernote css/js-->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
    <script>
      $(document).ready(function() {
          $('#summernote').summernote({
            height: 200,
          });
      });
    </script>

</body>
</html>
