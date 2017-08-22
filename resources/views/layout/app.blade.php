<!doctype html>
<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::to('css/main.css') }}">
    </head>
    <body>
        <div align="center">
        @include('includes.header')
        @section('body')
            @show
        
    </body>
</html>
