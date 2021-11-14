<!doctype html>
<html class="dark"  lang="en">
<head>

{{--    Style--}}
    <link href='https://css.gg/spinner-two.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @livewireStyles
    @stack('styles')

{{--    Meta--}}
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
</head>

<body>
@yield('content')
</body>

{{--Scripts--}}
<script src="{{asset('js/dark-mode.js')}}"></script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@stack('scripts')
@livewireScripts
</html>
