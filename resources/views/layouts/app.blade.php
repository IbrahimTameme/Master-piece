<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/register.css') }}" rel="stylesheet">


    
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
  href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

<!-- bootstrap core css -->
<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('/js/bootstrap2.js')}}" />

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
<!-- Custom styles for this template -->
<link href="{{ asset ('/css/style.css')}}" rel="stylesheet" />
<!-- responsive style -->
<link href="{{ asset ('/css/responsive.css')}}" rel="stylesheet" />
  <!-- card style -->
  <link  href="{{ asset ('/css/card.css')}}" rel="stylesheet">
{{-- tournaments cards css --}}


@yield('css')


@stack('scripts')
   

    
</head>

@include('layouts.navbar')


<body>
    
    <div id="app">
       
        <main >
           
            @yield('content')
            @yield('content2')
            
          @include('layouts.footer')
        </main>
    </div>

    
</body>


</html>
