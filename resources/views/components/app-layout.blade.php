@props(['seoMeta' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="sjX2hSKq626VogbX3up1-XFzrcHjoXgeToIzsCibb_s" />
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Theme Detection (must run before page renders to prevent flash) -->
    <script>
        (function() {
            const savedTheme = localStorage.getItem('theme');
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            if (savedTheme === 'dark' || (!savedTheme && prefersDark)) {
                document.documentElement.classList.add('dark');
            }
        })();
    </script>

    <style>
        :root {
            --brand-gold: #C5A880;
            --brand-gold-hover: #B0946B;
            --brand-dark: #111111;
            --brand-surface: #1A1A1A;
            --brand-light: #F8F9FA;
            --brand-gray: #888888;

            /* Light theme (default) */
            --bg-primary: #F8F9FA;
            --bg-primary-translucent: rgba(248, 249, 250, 0.8);
            --bg-secondary: #FFFFFF;
            --bg-tertiary: #111111;
            --text-primary: #111111;
            --text-secondary: #888888;
            --text-muted: #6B7280;
            --border-color: #E5E7EB;
            --card-bg: #FFFFFF;
        }

        .dark {
            --bg-primary: #111111;
            --bg-primary-translucent: rgba(17, 17, 17, 0.8);
            --bg-secondary: #1A1A1A;
            --bg-tertiary: #F8F9FA;
            --text-primary: #F8F9FA;
            --text-secondary: #A1A1A1;
            --text-muted: #888888;
            --border-color: #2A2A2A;
            --card-bg: #1A1A1A;
        }

        html { scroll-behavior: smooth; }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-primary);
            color: var(--text-primary);
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        h1, h2, h3, h4, h5, h6, .font-serif {
            font-family: 'Playfair Display', serif;
        }

        /* Typography selections */
        ::selection {
            background-color: #C5A880;
            color: #111;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: var(--bg-secondary); }
        ::-webkit-scrollbar-thumb { background: #C5A880; border-radius: 4px; }

        /* Reveal Animations */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.9s cubic-bezier(0.5, 0, 0, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }
        .delay-300 { transition-delay: 300ms; }

        /* Image zoom hover effect */
        .img-zoom-hover { overflow: hidden; }
        .img-zoom-hover img { transition: transform 0.7s ease; }
        .img-zoom-hover:hover img { transform: scale(1.05); }

        /* Gold accent line */
        .gold-line {
            width: 48px;
            height: 2px;
            background-color: #C5A880;
        }

        /* Theme aware utility classes */
        .bg-theme-primary { background-color: var(--bg-primary); }
        .bg-theme-secondary { background-color: var(--bg-secondary); }
        .bg-theme-tertiary { background-color: var(--bg-tertiary); }
        .text-theme-primary { color: var(--text-primary); }
        .text-theme-secondary { color: var(--text-secondary); }
        .border-theme { border-color: var(--border-color); }
        .bg-theme-primary-transparent { background-color: var(--bg-primary-translucent, transparent); }
        /* Theme toggle animation */
        .theme-toggle-icon {
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        /* Brand colors utility classes */
        .text-brand-gold { color: #C5A880; }
        .text-brand-dark { color: #111111; }
        .text-brand-gray { color: #888888; }
        .bg-brand-gold { background-color: #C5A880; }
        .bg-brand-dark { background-color: #111111; }
        .bg-brand-surface { background-color: #1A1A1A; }
        .bg-brand-light { background-color: #F8F9FA; }
        .border-brand-gold { border-color: #C5A880; }
        .hover\:bg-brand-gold-hover:hover { background-color: #B0946B; }
        .hover\:text-brand-gold:hover { color: #C5A880; }
    </style>
</head>

<body class="font-sans antialiased flex flex-col min-h-screen bg-theme-primary text-theme-primary">

    <header class="bg-theme-primary-transparent backdrop-blur-md sticky top-0 z-50 border-b border-theme transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <a href="{{ route('home') }}" class="relative z-50 transition-colors duration-300">
                <img src="{{ asset('images/logo.png') }}" alt="Ricardo Morais Arquitetura" class="h-[100px] md:h-[130px] w-auto block dark:hidden">
                <img src="{{ asset('images/logo-white.png') }}" alt="Ricardo Morais Arquitetura" class="h-[100px] md:h-[130px] w-auto hidden dark:block">
            </a>

            <!-- Desktop Menu -->
            <nav class="hidden md:flex space-x-8 items-center">
                <a href="{{ route('home') }}"
                    class="text-xs uppercase tracking-[0.2em] font-medium text-theme-primary hover:text-brand-gold transition pb-1 {{ request()->routeIs('home') ? 'text-brand-gold' : '' }}">Início</a>
                <a href="{{ route('about') }}"
                    class="text-xs uppercase tracking-[0.2em] font-medium text-theme-primary hover:text-brand-gold transition pb-1 {{ request()->routeIs('about') ? 'text-brand-gold' : '' }}">Sobre</a>
                
                <!-- Services Dropdown -->
                <div class="relative" id="services-dropdown">
                    <button id="services-dropdown-btn" class="text-xs uppercase tracking-[0.2em] font-medium text-theme-primary hover:text-brand-gold transition pb-1 flex items-center gap-1 {{ request()->routeIs('services') || request()->routeIs('residential-projects') || request()->routeIs('commercial-projects') || request()->routeIs('interior-design') || request()->routeIs('3d-design') ? 'text-brand-gold' : '' }}">
                        Serviços
                        <svg id="services-arrow" class="w-3 h-3 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" strokelinejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <!-- Dropdown Menu -->
                    <div id="services-menu" class="absolute top-full left-0 mt-2 w-56 bg-theme-primary shadow-xl border border-theme rounded-sm opacity-0 invisible transform -translate-y-2 transition-all duration-200 z-50">
                        <div class="py-2">
                            <a href="{{ route('services') }}" class="block px-5 py-3 text-xs uppercase tracking-[0.15em] text-theme-primary hover:bg-brand-light hover:text-brand-gold transition font-medium {{ request()->routeIs('services') ? 'text-brand-gold bg-brand-light' : '' }}">
                                Todos os Serviços
                            </a>
                            <div class="h-px bg-theme my-1"></div>
                            <a href="{{ route('residential-projects') }}" class="block px-5 py-3 text-xs uppercase tracking-[0.15em] text-theme-primary hover:bg-brand-light hover:text-brand-gold transition font-medium {{ request()->routeIs('residential-projects') ? 'text-brand-gold bg-brand-light' : '' }}">
                                Projetos Residenciais
                            </a>
                            <a href="{{ route('commercial-projects') }}" class="block px-5 py-3 text-xs uppercase tracking-[0.15em] text-theme-primary hover:bg-brand-light hover:text-brand-gold transition font-medium {{ request()->routeIs('commercial-projects') ? 'text-brand-gold bg-brand-light' : '' }}">
                                Projetos Comerciais
                            </a>
                            <a href="{{ route('interior-design') }}" class="block px-5 py-3 text-xs uppercase tracking-[0.15em] text-theme-primary hover:bg-brand-light hover:text-brand-gold transition font-medium {{ request()->routeIs('interior-design') ? 'text-brand-gold bg-brand-light' : '' }}">
                                Design de Interiores
                            </a>
                            <a href="{{ route('3d-design') }}" class="block px-5 py-3 text-xs uppercase tracking-[0.15em] text-theme-primary hover:bg-brand-light hover:text-brand-gold transition font-medium {{ request()->routeIs('3d-design') ? 'text-brand-gold bg-brand-light' : '' }}">
                                Design 3D
                            </a>
                        </div>
                    </div>
                </div>
                
                <a href="{{ route('blog') }}"
                    class="text-xs uppercase tracking-[0.2em] font-medium text-theme-primary hover:text-brand-gold transition pb-1 {{ request()->routeIs('blog') ? 'text-brand-gold' : '' }}">Blog</a>
                <a href="{{ route('contact') }}"
                    class="text-xs uppercase tracking-[0.2em] font-medium text-theme-primary hover:text-brand-gold transition pb-1 {{ request()->routeIs('contact') ? 'text-brand-gold' : '' }}">Contato</a>
                
                <!-- Theme Toggle Button -->
                <button id="theme-toggle" class="p-2 rounded-full hover:bg-brand-gold/10 transition-colors duration-300 text-theme-primary" aria-label="Alternar tema">
                    <i data-lucide="sun" id="theme-icon-light" class="w-5 h-5 theme-toggle-icon hidden dark:block"></i>
                    <i data-lucide="moon" id="theme-icon-dark" class="w-5 h-5 theme-toggle-icon block dark:hidden"></i>
                </button>
                
                <a href="{{ route('contact') }}" class="bg-brand-gold hover:bg-brand-gold-hover text-brand-dark px-6 py-3 text-xs uppercase tracking-widest font-semibold transition-all shadow-md hover:shadow-lg flex items-center gap-2 ml-4">
                    <i data-lucide="calendar" class="w-4 h-4"></i>
                    Agendar Reunião
                </a>
                <a href="https://www.instagram.com/ricardomorais_arquiteto/" class="w-12 h-12 border border-white/20 flex items-center justify-center text-white hover:bg-brand-gold hover:border-brand-gold hover:text-theme-primary transition-all">
                    <img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="w-5 h-5">
                </a>
            </nav>

            <!-- Mobile Menu Toggle Button -->
            <div class="flex items-center gap-2 md:hidden">
                <!-- Mobile Theme Toggle -->
                <button id="theme-toggle-mobile" class="p-2 rounded-full hover:bg-brand-gold/10 transition-colors duration-300 text-theme-primary" aria-label="Alternar tema">
                    <i data-lucide="sun" id="theme-icon-light-mobile" class="w-5 h-5 theme-toggle-icon hidden dark:block"></i>
                    <i data-lucide="moon" id="theme-icon-dark-mobile" class="w-5 h-5 theme-toggle-icon block dark:hidden"></i>
                </button>
                
                <button class="cursor-pointer relative z-50 text-theme-primary w-10 h-10 flex items-center justify-center p-2" id="mobile-menu-button" aria-expanded="false" aria-label="Alternar Menu">
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
        </div>

        <!-- Mobile Menu Overlay -->
        <div id="mobile-menu" class="absolute top-0 left-0 w-full bg-theme-secondary md:hidden transition-all duration-500 ease-[cubic-bezier(0.4,0,0.2,1)] opacity-0 invisible -translate-y-[10px] shadow-2xl pb-10 border-b border-theme z-40">
            <!-- Espaço para compensar a altura do header -->
            <div class="h-24"></div>
            
            <nav class="flex flex-col px-8 space-y-6">
                <a href="{{ route('home') }}" class="text-3xl font-serif text-theme-primary transition hover:text-brand-gold py-1 border-b border-theme inline-block w-full {{ request()->routeIs('home') ? 'font-bold' : '' }}">Início</a>
                <a href="{{ route('about') }}" class="text-3xl font-serif text-theme-primary transition hover:text-brand-gold py-1 border-b border-theme inline-block w-full {{ request()->routeIs('about') ? 'font-bold' : '' }}">Sobre</a>
                
                <!-- Mobile Services Dropdown -->
                <div class="border-b border-theme">
                    <button id="mobile-services-btn" class="flex items-center justify-between w-full py-1">
                        <span class="text-3xl font-serif text-theme-primary transition hover:text-brand-gold {{ request()->routeIs('services') || request()->routeIs('residential-projects') || request()->routeIs('commercial-projects') || request()->routeIs('interior-design') || request()->routeIs('3d-design') ? 'font-bold' : '' }}">Serviços</span>
                        <svg id="mobile-services-arrow" class="w-5 h-5 text-gray-400 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="mobile-services-menu" class="overflow-hidden transition-all duration-300 ease-in-out" style="max-height: 0px;">
                        <div class="pl-4 py-4 space-y-4">
                            <a href="{{ route('services') }}" class="block text-lg text-theme-secondary hover:text-brand-gold transition {{ request()->routeIs('services') ? 'text-brand-gold font-medium' : '' }}">Todos os Serviços</a>
                            <a href="{{ route('residential-projects') }}" class="block text-lg text-theme-secondary hover:text-brand-gold transition {{ request()->routeIs('residential-projects') ? 'text-brand-gold font-medium' : '' }}">Projetos Residenciais</a>
                            <a href="{{ route('commercial-projects') }}" class="block text-lg text-theme-secondary hover:text-brand-gold transition {{ request()->routeIs('commercial-projects') ? 'text-brand-gold font-medium' : '' }}">Projetos Comerciais</a>
                            <a href="{{ route('interior-design') }}" class="block text-lg text-theme-secondary hover:text-brand-gold transition {{ request()->routeIs('interior-design') ? 'text-brand-gold font-medium' : '' }}">Design de Interiores</a>
                            <a href="{{ route('3d-design') }}" class="block text-lg text-theme-secondary hover:text-brand-gold transition {{ request()->routeIs('3d-design') ? 'text-brand-gold font-medium' : '' }}">Design 3D</a>
                        </div>
                    </div>
                </div>
                
                <a href="{{ route('blog') }}" class="text-3xl font-serif text-theme-primary transition hover:text-brand-gold py-1 border-b border-theme inline-block w-full {{ request()->routeIs('blog') ? 'font-bold' : '' }}">Blog</a>
                <a href="{{ route('contact') }}" class="text-3xl font-serif text-theme-primary transition hover:text-brand-gold py-1 border-b border-theme inline-block w-full {{ request()->routeIs('contact') ? 'font-bold' : '' }}">Contato</a>
                
                <div class="mt-8 pt-6">
                    <p class="text-xs uppercase tracking-widest text-gray-400 font-bold mb-3">Fale Conosco</p>
                    <a href="mailto:contato@arquitetoricardomoraisprojetos.com" class="text-sm font-light text-theme-secondary block mb-1">contato@arquitetoricardomoraisprojetos.com</a>
                    <a href="tel:{{ config('services.whatsapp.number') }}" class="text-sm font-light text-theme-secondary block">{{ config('services.whatsapp.formatted') }}</a>
                </div>

                <!-- Instagram -->
                <div class="mt-8 w-full">
                    <a href="https://www.instagram.com/ricardomorais_arquiteto/" class="w-12 h-12 border border-white/20 flex items-center justify-center text-white hover:bg-brand-gold hover:border-brand-gold hover:text-theme-primary transition-all">
                        <img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="w-5 h-5">
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <main class="flex-grow">
        {{ $slot }}
    </main>

    <footer class="bg-brand-dark text-white py-12 border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center">
            <a href="{{ route('home') }}" class="mb-6 md:mb-0">
                <img src="{{ asset('images/logo-white.png') }}" alt="Ricardo Morais Arquitetura" class="h-[120px] w-auto">
            </a>
            
            <div class="text-white/50 text-sm font-light flex flex-col items-center md:items-end">
                <p>&copy; {{ date('Y') }} Ricardo Morais Arquitetura. Todos os direitos reservados.</p>
                <p>Desenvolvido por <a href="https://sigowebsolutions.com.br" target="_blank" class="text-amber-300 underline">Sigo Web Solutions</a></p>
                <div class="flex gap-4 mt-4">
                    <a href="https://wa.me/{{ config('services.whatsapp.number') }}?text={{ urlencode('Olá! Tenho interesse nos serviços de arquitetura.') }}" target="_blank" class="hover:text-brand-gold transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    </a>
                    <a href="#" class="hover:text-brand-gold transition-colors"><i data-lucide="instagram" class="w-5 h-5"></i></a>
                    <a href="#" class="hover:text-brand-gold transition-colors"><i data-lucide="linkedin" class="w-5 h-5"></i></a>
                    <a href="mailto:contato@arquitetoricardomoraisprojetos.com" class="hover:text-brand-gold transition-colors"><i data-lucide="mail" class="w-5 h-5"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/{{ config('services.whatsapp.number') }}?text={{ urlencode('Olá! Tenho interesse nos serviços de arquitetura. Gostaria de saber mais informações.') }}"
       target="_blank"
       class="fixed bottom-6 right-6 z-50 bg-[#25D366] hover:bg-[#128C7E] text-white p-4 rounded-full shadow-2xl transition-all duration-300 hover:scale-110 group"
       aria-label="Falar pelo WhatsApp">
        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
        <span class="absolute right-full mr-3 top-1/2 -translate-y-1/2 bg-white text-gray-800 px-4 py-2 rounded-lg shadow-lg text-sm font-medium whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
            Fale Conosco
        </span>
    </a>

    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        document.addEventListener('DOMContentLoaded', function () {
            // Theme Toggle Functionality
            const themeToggle = document.getElementById('theme-toggle');
            const themeToggleMobile = document.getElementById('theme-toggle-mobile');
            const html = document.documentElement;

            function toggleTheme() {
                const isDark = html.classList.contains('dark');
                if (isDark) {
                    html.classList.remove('dark');
                    localStorage.setItem('theme', 'light');
                } else {
                    html.classList.add('dark');
                    localStorage.setItem('theme', 'dark');
                }
                // Re-render icons after theme change
                lucide.createIcons();
            }

            if (themeToggle) {
                themeToggle.addEventListener('click', toggleTheme);
            }
            if (themeToggleMobile) {
                themeToggleMobile.addEventListener('click', toggleTheme);
            }

            // Mobile Menu Toggle
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

            // Desktop Services Dropdown
            const servicesDropdown = document.getElementById('services-dropdown');
            const servicesMenu = document.getElementById('services-menu');
            const servicesArrow = document.getElementById('services-arrow');
            let desktopDropdownOpen = false;

            if (servicesDropdown && servicesMenu) {
                // Mouse enter - open dropdown
                servicesDropdown.addEventListener('mouseenter', () => {
                    desktopDropdownOpen = true;
                    servicesMenu.classList.remove('opacity-0', 'invisible', '-translate-y-2');
                    servicesMenu.classList.add('opacity-100', 'visible', 'translate-y-0');
                    servicesArrow.classList.add('rotate-180');
                });

                // Mouse leave - close dropdown
                servicesDropdown.addEventListener('mouseleave', () => {
                    desktopDropdownOpen = false;
                    servicesMenu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                    servicesMenu.classList.add('opacity-0', 'invisible', '-translate-y-2');
                    servicesArrow.classList.remove('rotate-180');
                });

                // Click toggle for touch devices
                const servicesBtn = document.getElementById('services-dropdown-btn');
                servicesBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    desktopDropdownOpen = !desktopDropdownOpen;
                    
                    if (desktopDropdownOpen) {
                        servicesMenu.classList.remove('opacity-0', 'invisible', '-translate-y-2');
                        servicesMenu.classList.add('opacity-100', 'visible', 'translate-y-0');
                        servicesArrow.classList.add('rotate-180');
                    } else {
                        servicesMenu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                        servicesMenu.classList.add('opacity-0', 'invisible', '-translate-y-2');
                        servicesArrow.classList.remove('rotate-180');
                    }
                });

                // Close dropdown when clicking outside
                document.addEventListener('click', (e) => {
                    if (!servicesDropdown.contains(e.target) && desktopDropdownOpen) {
                        desktopDropdownOpen = false;
                        servicesMenu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                        servicesMenu.classList.add('opacity-0', 'invisible', '-translate-y-2');
                        servicesArrow.classList.remove('rotate-180');
                    }
                });
            }

            // Mobile Services Dropdown
            const mobileServicesBtn = document.getElementById('mobile-services-btn');
            const mobileServicesMenu = document.getElementById('mobile-services-menu');
            const mobileServicesArrow = document.getElementById('mobile-services-arrow');
            let mobileServicesOpen = false;

            if (mobileServicesBtn && mobileServicesMenu) {
                mobileServicesBtn.addEventListener('click', () => {
                    mobileServicesOpen = !mobileServicesOpen;
                    
                    if (mobileServicesOpen) {
                        mobileServicesMenu.style.maxHeight = mobileServicesMenu.scrollHeight + 'px';
                        mobileServicesArrow.classList.add('rotate-180');
                    } else {
                        mobileServicesMenu.style.maxHeight = '0px';
                        mobileServicesArrow.classList.remove('rotate-180');
                    }
                });
            }

            // Scroll Reveal Observer
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                    }
                });
            }, { threshold: 0.15 });
            
            document.querySelectorAll('.reveal').forEach((el) => {
                observer.observe(el);
            });
        });
    </script>
</body>

</html>