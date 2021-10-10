<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/main.css">
    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body class="">
    <nav class="space-between">
        <ul class="center">
            <li class="p10">
                <a href="{{ route('home')}}">Home</a>
            </li>
            <li class="p10">
                <a href="/category/1">Products</a>
            </li>

        </ul>
        <ul class="center">
            @if(auth()->user())
            <li class="p10">
                <a href="/profile" style="color: #009dff;">{{auth()->user()->name}}</a>
            </li>
            <li class="p10">
                <a href="/cart">Cart</a>
            </li>
            <li class="p10">
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button class="link" type="submit">Logout</button>
                </form>

            </li>
            @else
            <li class="p10">
                <a href="{{route('login')}}">Login</a>
            </li>
            <li class="p10">
                <a href="{{route('register')}}">Register</a>
            </li>
            @endif
        </ul>
    </nav>
    @yield('content')
</body>

</html>