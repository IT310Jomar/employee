<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Argon Dashboard') }}</title>
        
     @include('layouts.headers.myCss')
    </head>
    <body class="{{ $class ?? '' }}">

        @include('layouts.navbars.sidebar')

        <div class="main-content">
            @include('layouts.navbars.navs.auth')
            @yield('content')
        </div>

       

    </body>
</html>
@include('layouts.footers.myScripts')