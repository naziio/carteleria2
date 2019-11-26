<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', '') }}</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" crossorigin="anonymous">
        {{-- <link rel="stylesheet" href="{{asset('css/all.min.css')}}"> --}}

        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('css/leaflet.css')}}" />
        {{-- <script src="{{asset('js/jquery.min.js')}}"></script> --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
       <style>
        @font-face{
           font-family: 'FuturaStdBook';
           src: url("../fonts/FuturaStd-Book.otf");
        }
        @font-face{
           font-family: 'FuturaStdMedium';
           src: url("../fonts/FuturaStd-Medium.otf");
        }
           @font-face {
               font-family: Didot;
                src: url("../fonts/Didot.ttc");
           }
       </style>
</head>
<body>

  <div id="app">

    <dashboard></dashboard>
  </div>
    {{-- <script async src="{{asset('js/leaflet.js')}}"></script>
    <script src="{{ asset('js/initial.js') }}"></script>
    --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
