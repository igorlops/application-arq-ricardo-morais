<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if(isset($seoMeta) && $seoMeta)
        <title>{{ $seoMeta->meta_title ?? config('app.name', 'Arquitetura') }}</title>
        @if($seoMeta->meta_description)
            <meta name="description" content="{{ $seoMeta->meta_description }}">
        @endif
        @if($seoMeta->meta_keywords)
            <meta name="keywords" content="{{ $seoMeta->meta_keywords }}">
        @endif
    @else
        <title>{{ config('app.name', 'Arquitetura') }}</title>
    @endif

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=playfair-display:400,600,700|inter:300,400,500,600"
        rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .font-serif {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>

<body class="font-sans antialiased text-gray-800 bg-gray-50 flex flex-col min-h-screen">

    <header class="bg-white/90 backdrop-blur-md sticky top-0 z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <a href="{{ route('home') }}" class="text-2xl font-serif font-bold tracking-tight text-gray-900 relative z-50">
                Ricardo Morais <span
                    class="block text-xs font-sans font-light tracking-widest text-gray-500 uppercase mt-0.5">Arquitetura</span>
            </a>

            <!-- Desktop Menu -->
            <nav class="hidden md:flex space-x-8">
                <a href="{{ route('home') }}"
                    class="text-sm font-medium text-gray-600 hover:text-gray-900 transition border-b-2 hover:border-gray-900 pb-1 {{ request()->routeIs('home') ? 'border-gray-900' : ' border-transparent' }}">Início</a>
                <a href="{{ route('about') }}"
                    class="text-sm font-medium text-gray-600 hover:text-gray-900 transition border-b-2 hover:border-gray-900 pb-1 {{ request()->routeIs('about') ? 'border-gray-900' : ' border-transparent' }}">Sobre</a>
                <a href="{{ route('services') }}"
                    class="text-sm font-medium text-gray-600 hover:text-gray-900 transition border-b-2 hover:border-gray-900 pb-1 {{ request()->routeIs('services') ? 'border-gray-900' : ' border-transparent' }}">Serviços</a>
                <a href="{{ route('blog') }}"
                    class="text-sm font-medium text-gray-600 hover:text-gray-900 transition border-b-2 hover:border-gray-900 pb-1 {{ request()->routeIs('blog') ? 'border-gray-900' : ' border-transparent' }}">Blog</a>
                <a href="{{ route('contact') }}"
                    class="text-sm font-medium text-gray-600 hover:text-gray-900 transition border-b-2 hover:border-gray-900 pb-1 {{ request()->routeIs('contact') ? 'border-gray-900' : ' border-transparent' }}">Contato</a>
            </nav>

            <!-- Mobile Menu Toggle Button -->
            <button class="md:hidden cursor-pointer relative z-50 text-gray-900 w-10 h-10 flex items-center justify-center p-2" id="mobile-menu-button" aria-expanded="false" aria-label="Alternar Menu">
                <!-- Hamburger Icon -->
                <svg id="icon-menu" class="w-6 h-6 transition-all duration-300 transform scale-100 opacity-100 absolute" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <!-- Close (X) Icon -->
                <svg id="icon-close" class="w-6 h-6 transition-all duration-300 transform scale-0 opacity-0 absolute" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu Overlay -->
        <div id="mobile-menu" class="absolute top-0 left-0 w-full bg-white md:hidden transition-all duration-500 ease-[cubic-bezier(0.4,0,0.2,1)] opacity-0 invisible -translate-y-[10px] shadow-2xl pb-10 border-b border-gray-100 z-40">
            <!-- Espaço para compensar a altura do header -->
            <div class="h-24"></div>
            
            <nav class="flex flex-col px-8 space-y-6">
                <a href="{{ route('home') }}" class="text-3xl font-serif text-gray-900 transition hover:text-gray-500 py-1 border-b border-gray-100 inline-block w-full {{ request()->routeIs('home') ? 'font-bold' : '' }}">Início</a>
                <a href="{{ route('about') }}" class="text-3xl font-serif text-gray-900 transition hover:text-gray-500 py-1 border-b border-gray-100 inline-block w-full {{ request()->routeIs('about') ? 'font-bold' : '' }}">Sobre</a>
                <a href="{{ route('services') }}" class="text-3xl font-serif text-gray-900 transition hover:text-gray-500 py-1 border-b border-gray-100 inline-block w-full {{ request()->routeIs('services') ? 'font-bold' : '' }}">Serviços</a>
                <a href="{{ route('blog') }}" class="text-3xl font-serif text-gray-900 transition hover:text-gray-500 py-1 border-b border-gray-100 inline-block w-full {{ request()->routeIs('blog') ? 'font-bold' : '' }}">Blog</a>
                <a href="{{ route('contact') }}" class="text-3xl font-serif text-gray-900 transition hover:text-gray-500 py-1 border-b border-gray-100 inline-block w-full {{ request()->routeIs('contact') ? 'font-bold' : '' }}">Contato</a>
                
                <div class="mt-8 pt-6">
                    <p class="text-xs uppercase tracking-widest text-gray-400 font-bold mb-3">Fale Conosco</p>
                    <a href="mailto:contato@ricardomorais.arq.br" class="text-sm font-light text-gray-600 block mb-1">contato@ricardomorais.arq.br</a>
                    <a href="tel:+5511999999999" class="text-sm font-light text-gray-600 block">+55 (11) 99999-9999</a>
                </div>
            </nav>
        </div>
    </header>

    <main class="flex-grow">
        {{ $slot }}
    </main>

    <footer class="bg-gray-900 text-white mt-16 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-xl font-serif font-bold mb-4">Ricardo Morais</h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Transformando ideias em espaços sofisticados, funcionais e atemporais com excelência em cada
                    detalhe.
                </p>
            </div>
            <div>
                <h4 class="text-sm font-bold tracking-wider uppercase mb-4 text-gray-300">Contato</h4>
                <p class="text-gray-400 text-sm mb-2">contato@ricardomorais.arq.br</p>
                <p class="text-gray-400 text-sm">+55 (11) 99999-9999</p>
            </div>
            <div>
                <h4 class="text-sm font-bold tracking-wider uppercase mb-4 text-gray-300">Links Rápidos</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li><a href="#" class="hover:text-white transition">Início</a></li>
                    <li><a href="#" class="hover:text-white transition">Projetos</a></li>
                    <li><a href="{{ route('login') }}" class="hover:text-white transition">Admin</a></li>
                </ul>
            </div>
        </div>
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12 pt-8 border-t border-gray-800 text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} Ricardo Morais Arquitetura. Todos os direitos reservados.
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const iconMenu = document.getElementById('icon-menu');
            const iconClose = document.getElementById('icon-close');
            let isMenuOpen = false;

            mobileMenuButton.addEventListener('click', () => {
                isMenuOpen = !isMenuOpen;
                mobileMenuButton.setAttribute('aria-expanded', isMenuOpen);

                if (isMenuOpen) {
                    // Open Menu
                    mobileMenu.classList.remove('opacity-0', 'invisible', '-translate-y-[10px]');
                    mobileMenu.classList.add('opacity-100', 'visible', 'translate-y-0');
                    document.body.classList.add('overflow-hidden'); // Prevent scrolling
                    
                    // Switch Icons (Hide Menu, Show Close)
                    iconMenu.classList.replace('scale-100', 'scale-0');
                    iconMenu.classList.replace('opacity-100', 'opacity-0');
                    
                    iconClose.classList.replace('scale-0', 'scale-100');
                    iconClose.classList.replace('opacity-0', 'opacity-100');
                } else {
                    // Close Menu
                    mobileMenu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                    mobileMenu.classList.add('opacity-0', 'invisible', '-translate-y-[10px]');
                    document.body.classList.remove('overflow-hidden'); // Enable scrolling
                    
                    // Switch Icons (Hide Close, Show Menu)
                    iconMenu.classList.replace('scale-0', 'scale-100');
                    iconMenu.classList.replace('opacity-0', 'opacity-100');
                    
                    iconClose.classList.replace('scale-100', 'scale-0');
                    iconClose.classList.replace('opacity-100', 'opacity-0');
                }
            });
        });
    </script>
</body>

</html>