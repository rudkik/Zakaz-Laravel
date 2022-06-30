<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title-page')</title>
        <link rel="stylesheet" href="{{ url('../dist/css/adminlte.css') }}">
        <link rel="stylesheet" href="{{ url('../dist/css/all.css') }}">
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            @include('admin.includes.header')
            @include('admin.includes.aside')
            <div class="content-wrapper">
                <section class="content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </section>
            </div>
            @include('admin.includes.footer')
        </div>
    </body>
    <!-- jQuery -->
    <script src="{{url('../dist/js/jquery.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{url('../dist/js/bootstrap.bundle.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{url('../dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{url('../dist/js/demo.js') }}"></script>
</html>
