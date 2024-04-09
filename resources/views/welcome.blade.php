<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('includes.header')
        <div id="content">
                <h1>Welcome to Our Template</h1>
                <p>Start easy with this laravel template, made by <a href="https://github.com/QVDW" target="_blank">QVDW</a></p>
        </div>
        @include('includes.footer')
    </body>
</html>