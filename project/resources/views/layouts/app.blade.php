<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title-page')</title>
        <link rel="stylesheet" href="{{ url('../css/style.css') }}">
    </head>
    <body>
            @include('includes.header')
            @yield('content')
            @include('includes.footer')
    </body>
    <script src="{{ url('../js/jquery.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
    <script src="{{ url('../js/app.js') }}"></script>
</html>
