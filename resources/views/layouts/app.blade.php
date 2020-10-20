<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>{{config('app.name', 'LSAPP')}}</title>

        <!-- Styles -->
        <style>
        </style>

        <style>
        </style>
    </head>
    <body class="antialiased">
    @include('inc.navbar')
    @include('inc.messages')
    <div class="container">
       @yield('content')
    </div>
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('article-ckeditor')
    </script>
    </body>
</html>
