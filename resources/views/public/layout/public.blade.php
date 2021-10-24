<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Купить скорлупу и отводы ППУ с выгодой 20% | СК Теплострой</title>
        <meta name="description" content="Производство теплоизоляционных изделий из пенополиуретана - скорлупа и отводы ППУ в Красноярске и Челябинске"/>
        <meta name="keywords" content="скорлупа ппу, отводы ппу, купить скорлупу ппу">
        <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
        <meta name="yandex-verification" content="c87268e5ba71b290" />
        <link rel="stylesheet" href="{{ asset('/static/bootstrap/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('static/css/app.css') }}" />
        <script src="{{ asset('/static/js/jquery-2.1.4.min.js') }}"></script>
        <script src="{{ asset('/static/bootstrap/js/bootstrap.js') }}"></script>
        <script src="{{ asset('/static/js/script.js') }}"></script>
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
