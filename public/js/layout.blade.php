<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" >
    
    <title>CRUD</title>
  </head>
  <body>
    <h1 class="bg-primary text-white text-center">Crud con LARAVEL 8 y Bootstrap 5!</h1>
    <div class="container">
        @yield('contenido')
    </div>

    <script src="{{ asset('/js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}" ></script>
    <script src="{{ asset('/js/jquery.dataTables.min.js') }}" ></script>
    <script src="{{ asset('/js/dataTables.bootstrap5.min.js') }}" ></script>
    <script src="{{ asset('/js/site.js') }}"></script>

  </body>
</html>