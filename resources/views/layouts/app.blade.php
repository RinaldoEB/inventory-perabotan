<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Inventory - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-gray-50 text-gray-800">

{{-- Sidebar --}}
<aside class="fixed left-0 top-0 h-full w-64 bg-white shadow-sm flex flex-col p-4 z-50 border-r border-gray-200">
    <div class="mb-8 px-2">
        <h1 class="text-xl font-bold text-blue-600">RetailERP</h1>
        <p class="text-xs text-gray-500">Small Business Admin</p>
    </div>
    <nav class="flex-grow space-y-1">
        <a href="{{ route('dashboard') }}"
           class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium
           {{ request()->routeIs('dashboard') ? 'bg-blue-50 text-blue-600 border-l-4 border-blue-600' : 'text-gray-600 hover:bg-gray-100' }}">
            <span class="material-symbols-outlined text-[20px]">inventory_2</span>
            Inventory
        </a>
    </nav>
    <div class="mt-auto pt-4 border-t border-gray-200">
        <div class="flex items-center justify-between px-2">
            <div>
                <p class="text-sm font-semibold">{{ auth()->user()->name }}</p>
                <p class="text-xs text-gray-500">Admin</p>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-gray-400 hover:text-red-500 transition-colors">
                    <span class="material-symbols-outlined text-[20px]">logout</span>
                </button>
            </form>
        </div>
    </div>
</aside>

{{-- Header --}}
<header class="fixed top-0 right-0 left-64 h-16 bg-white border-b border-gray-200 flex justify-between items-center px-8 z-40">
    <h2 class="text-lg font-semibold text-gray-800">@yield('title')</h2>
    <a href="{{ route('products.create') }}"
       class="bg-blue-600 text-white px-5 py-2 rounded-lg text-sm font-medium flex items-center gap-2 hover:bg-blue-700 transition-colors">
        <span class="material-symbols-outlined text-[18px]">add</span>
        Tambah Produk
    </a>
</header>

{{-- Main Content --}}
<main class="ml-64 pt-16 min-h-screen">
    <div class="p-8">

        {{-- Flash message --}}
        @if (session('success'))
            <div class="mb-6 bg-green-50 border border-green-200 text-green-700 text-sm px-4 py-3 rounded-lg flex items-center gap-2">
                <span class="material-symbols-outlined text-[18px]">check_circle</span>
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>
</main>

</body>
</html>
