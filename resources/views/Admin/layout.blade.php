<!doctype html>
<html class="dark" lang="en">
<head>
    <script src="{{asset('js/dark-mode.js')}}" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href='https://css.gg/spinner-two.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href='https://cdn.jsdelivr.net/npm/css.gg/icons/all.css' rel='stylesheet'>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @livewireStyles
    <title>@yield('page_title')</title>
</head>
<body>

<section>

    @yield('content')

    @stack('alerts')

</section>

@livewireScripts
</body>
</html>
