<!doctype html>
<html lang="{{config('app.locale')}}">
     <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <meta name="viewport"content="width=device-width,initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- Default CSS --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        {{-- Custom CSS --}}
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <title>{{config('app.name','LSAPP')}}</title>
     </head>

     <body>
          @include('inc.navbar')
          <br>
          <div class="container">
               @yield('content')
          </div>
     </body>

</html>