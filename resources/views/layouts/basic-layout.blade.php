<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config("app.name", "MPA-SPA-Framework")}}</title>
        <link rel="stylesheet" href="{{asset("css/app.css")}}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @include("navbars.navbar")
        @yield('content')
    </body>
    @include("footers.footer")
</html>
