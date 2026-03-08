<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Painel Admin - {{ config('app.name', 'Arquitetura') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100 text-gray-900">

    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r border-gray-200 flex flex-col">
            <div class="h-16 flex items-center px-6 border-b border-gray-200">
                <span class="text-lg font-bold text-gray-800">Admin Panel</span>
            </div>
            <nav class="flex-1 px-4 py-6 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg">
                    Dashboard
                </a>
                <a href="{{ route('admin.posts.index') }}" class="flex items-center px-4 py-2 text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-colors">
                    Posts (Blog)
                </a>
                <a href="{{ route('admin.contacts.index') }}" class="flex items-center px-4 py-2 text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-colors">
                    Mensagens
                </a>
                <a href="{{ route('admin.seo.index') }}" class="flex items-center px-4 py-2 text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-colors">
                    SEO Meta Tags
                </a>
            </nav>
            <div class="p-4 border-t border-gray-200">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 text-sm font-medium text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                        Sair do sistema
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 flex flex-col">
            <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-8 bg-white/70 backdrop-blur-md sticky top-0 z-10">
                <h1 class="text-xl font-semibold text-gray-800">{{ $header ?? '' }}</h1>
                <div class="text-sm text-gray-600">
                    Olá, {{ auth()->user()->name ?? 'Admin' }}
                </div>
            </header>
            
            <div class="p-8 overflow-auto">
                {{ $slot }}
            </div>
        </main>
    </div>

</body>
</html>
