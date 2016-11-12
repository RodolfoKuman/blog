<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>@yield('title','Default')| Panel de administración</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/generals.css')}}">
    <link rel="stylesheet" href="{{asset('/css/home.css')}}">
  </head>
  <body>
    @include('admin.template.partials.nav')
    <section>
      <div class="container">
        @include('flash::message')
      </div>

      @yield('content')
    </section>



    <script src="{{asset('plugins/bootstrap/js/jquery.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
  </body>
</html>
