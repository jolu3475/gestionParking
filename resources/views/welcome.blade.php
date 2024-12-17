<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body>

    @php
        $routeName = request()->route()->getName();
    @endphp

    <div class="w-full h-screen overflow-scroll">
        <div class="fixed w-full bg-slate-500 p-2">
            Gestion de parking
        </div>
        <div class="flex h-full pt-10">
            <div class="flex w-1/6 ">
                @include('sidebar')
            </div>
            <div class="flex w-5/6 bg-slate-300">
                @yield('content')
            </div>
        </div>
    </div>

</body>

</html>
