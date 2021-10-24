<html xmlns:xi="http://www.w3.org/2001/XInclude">
    <head lang="ru">
        <meta charset="utf-8" />
        <title>Теплострой - специализированная компания</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <meta name="yandex-verification" content="c87268e5ba71b290" />
        <link rel="stylesheet" href="/static/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="static/css/app.css" />
        <script src="/static/js/jquery-2.1.4.min.js"></script>
        <script src="/static/bootstrap/js/bootstrap.js"></script>
        <script src="/static/js/script.js"></script>
    </head>
    <body>
    @include('public.inc.header')
    @yield('content')
    @include('public.inc.footer')
    @include('public.inc.modal-success')
    @include('public.inc.modal-image')
    @include('public.inc.modal-order')
    @stack('captcha')
    @include('public.inc.scripts')

    </body>
</html>
