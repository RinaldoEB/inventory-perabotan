<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center">

    <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-8 w-full max-w-md">

        {{-- Header --}}
        <div class="text-center mb-8">
            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                </svg>
            </div>
            <h1 class="text-xl font-semibold text-gray-800">Selamat datang</h1>
            <p class="text-sm text-gray-500 mt-1">Masuk ke akun kamu</p>
        </div>

        {{-- Pesan error --}}
        @if ($errors->any())
            <div class="flex items-center gap-2 bg-red-50 border border-red-200 text-red-600 text-sm rounded-lg px-4 py-3 mb-6">
                <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                {{ $errors->first('email') }}
            </div>
        @endif

        {{-- Form --}}
        <form method="POST" action="{{ route('login.post') }}" class="space-y-5">
            @csrf

            {{-- Email --}}
            <div>
                <label class="block text-sm text-gray-600 mb-1.5">Email</label>
                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="contoh@email.com"
                    required
                    class="w-full px-4 py-2.5 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                />
            </div>

            {{-- Password --}}
            <div>
                <label class="block text-sm text-gray-600 mb-1.5">Password</label>
                <input
                    type="password"
                    name="password"
                    placeholder="••••••••"
                    required
                    class="w-full px-4 py-2.5 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                />
            </div>

            {{-- Tombol Login --}}
            <button
                type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 active:scale-95 text-white text-sm font-medium py-2.5 rounded-lg transition-all duration-150"
            >
                Masuk
            </button>

        </form>

    </div>

</body>
</html>
