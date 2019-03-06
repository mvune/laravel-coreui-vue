<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/favicon.png">

    <title>
        @hasSection('title') @yield('title') | @endif
        {{ config('app.name') }}
    </title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset(mix('css/main.css')) }}">
</head>

<body>
    <div id="app"></div>

    <script defer src="{{ asset(mix('js/main.js')) }}"></script>
</body>

</html>
