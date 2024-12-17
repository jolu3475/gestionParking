<div class="flex flex-col w-full">
    <div class="flex justify-center items-center h-16 bg-slate-400 text-white">
        <h1 class="text-2xl">Sidebar</h1>
    </div>
    <div class="flex flex-col p-4">
        <a {{-- href="{{ route('home') }}" --}} @class([
            'p-2 rounded-lg',
            'bg-slate-400 underline' => $routeName === 'home',
            'hover:bg-slate-400 hover:underline' => $routeName !== 'home',
        ]) class="">Dashboard</a>
        <a {{-- href="{{ route('about') }}" --}} class="p-2 rounded-lg hover:bg-slate-400 hover:underline">Edition</a>
        <a {{-- href="{{ route('contact') }}" --}} class="p-2 rounded-lg hover:bg-slate-400 hover:underline">Suppression</a>
        <a {{-- href="{{ route('contact') }}" --}} class="p-2 rounded-lg hover:bg-slate-400 hover:underline">{{ $routeName }}</a>
    </div>
</div>
