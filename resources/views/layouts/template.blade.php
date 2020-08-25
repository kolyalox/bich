<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@yield('div')

    <div class="top-right links">

        <ul class="ul-bitch">

            <li class="li-bitch"><a href="{{route('register')}}" class="link-bitch">REGISTER</a></li>

            <li class="li-bitch"><a href="{{route('login')}}" class="link-bitch">LOGIN</a></li>

            @if(request()->is('register') or request()->is('login') or request()->is('personal'))

                <li class="li-bitch"><a href="{{route('home')}}" class="link-bitch">HOME</a></li>

            @endif

        </ul>

    </div>

@yield('content')
</body>
</html>
