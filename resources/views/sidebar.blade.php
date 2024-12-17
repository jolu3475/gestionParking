<div class="flex flex-col w-full">
    <div
        class="flex justify-center items-center h-16 bg-gradient-to-r from-sky-500 to-emerald-500 underline shadow-lg text-white">
        <h1 class="text-2xl">Sidebar</h1>
    </div>
    <div class="flex flex-col p-4">
        <a {{-- href="{{ route('home') }}" --}} @class([
            'p-2 rounded-lg mt-2',
            'bg-gradient-to-r from-sky-500 to-emerald-500 underline shadow-lg' =>
                $routeName === 'home',
            'hover:bg-gradient-to-r hover:from-sky-500 hover:to-emerald-500 hover:underline hover:shadow-lg' =>
                $routeName !== 'home',
        ])>Dashboard</a>
        <a {{-- href="{{ route('about') }}" --}} @class([
            'p-2 rounded-lg mt-2',
            'bg-gradient-to-r from-sky-500 to-emerald-500 underline shadow-lg' =>
                $routeName === 'sup',
            'hover:bg-gradient-to-r hover:from-sky-500 hover:to-emerald-500 hover:underline hover:shadow-lg' =>
                $routeName !== 'sup',
        ])>Edition</a>
        <a {{-- href="{{ route('contact') }}" --}} @class([
            'p-2 rounded-lg mt-2',
            'bg-gradient-to-r from-sky-500 to-emerald-500 underline shadow-lg' =>
                $routeName === 'edit',
            'hover:bg-gradient-to-r hover:from-sky-500 hover:to-emerald-500 hover:underline hover:shadow-lg' =>
                $routeName !== 'edit',
        ])>Suppression</a>
    </div>
</div>
