<!doctype html>
<html lang="@yield('lang')">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('js/app.js') }}">
    @stack('style')
</head>
<body>

@yield('content')
<script src="/node_modules/jquery/dist/jquery.min.js"></script>
<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
