<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Page</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="w-full h-screen overflow-scroll">
        <div class="fixed w-full bg-slate-500 p-2">
            Gestion de parking
        </div>
        <div class="flex h-full pt-10">
            <div class="flex w-1/5 ">
                @include('sidebar')
            </div>
            <div class="flex w-4/5 bg-slate-300">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
