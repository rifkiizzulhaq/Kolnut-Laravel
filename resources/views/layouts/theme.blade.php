<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <title>{{ Auth::user()->name }}</title> --}}
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>
<body>
    <div>
        {{-- @include('name') --}}
        <div>
            @include('components.header')
        </div>
        <div>
            @yield('content')
        </div>
    </div>
</body>
</html>