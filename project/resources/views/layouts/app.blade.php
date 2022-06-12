<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title-page')</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
            @include('includes.header')
            @yield('content')
            @include('includes.footer')
    </body>
    <script src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/app.js"></script>
</html>
