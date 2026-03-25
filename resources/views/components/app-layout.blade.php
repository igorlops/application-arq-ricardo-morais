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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --brand-gold: #C5A880;
            --brand-gold-hover: #B0946B;
            --brand-dark: #111111;
            --brand-surface: #1A1A1A;
            --brand-light: #F8F9FA;
            --brand-gray: #888888;
        }

        html { scroll-behavior: smooth; }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--brand-light);
            color: var(--brand-dark);
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
        ::-webkit-scrollbar-track { background: #111; }
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

<body class="font-sans antialiased text-gray-800 bg-brand-light flex flex-col min-h-screen">

    <header class="bg-white/95 backdrop-blur-md sticky top-0 z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <a href="{{ route('home') }}" class="text-2xl font-serif font-bold tracking-wider text-gray-900 relative z-50">
                RM<span class="text-brand-gold italic font-light">ARQ</span>
            </a>

            <!-- Desktop Menu -->
            <nav class="hidden md:flex space-x-8 items-center">
                <a href="{{ route('home') }}"
                    class="text-xs uppercase tracking-[0.2em] font-medium text-gray-600 hover:text-brand-gold transition pb-1 {{ request()->routeIs('home') ? 'text-brand-gold' : '' }}">Início</a>
                <a href="{{ route('about') }}"
                    class="text-xs uppercase tracking-[0.2em] font-medium text-gray-600 hover:text-brand-gold transition pb-1 {{ request()->routeIs('about') ? 'text-brand-gold' : '' }}">Sobre</a>
                
                <!-- Services Dropdown -->
                <div class="relative" id="services-dropdown">
                    <button id="services-dropdown-btn" class="text-xs uppercase tracking-[0.2em] font-medium text-gray-600 hover:text-brand-gold transition pb-1 flex items-center gap-1 {{ request()->routeIs('services') || request()->routeIs('residential-projects') || request()->routeIs('commercial-projects') || request()->routeIs('interior-design') || request()->routeIs('3d-design') ? 'text-brand-gold' : '' }}">
                        Serviços
                        <svg id="services-arrow" class="w-3 h-3 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <!-- Dropdown Menu -->
                    <div id="services-menu" class="absolute top-full left-0 mt-2 w-56 bg-white shadow-xl border border-gray-100 rounded-sm opacity-0 invisible transform -translate-y-2 transition-all duration-200 z-50">
                        <div class="py-2">
                            <a href="{{ route('services') }}" class="block px-5 py-3 text-xs uppercase tracking-[0.15em] text-gray-600 hover:bg-brand-light hover:text-brand-gold transition font-medium {{ request()->routeIs('services') ? 'text-brand-gold bg-brand-light' : '' }}">
                                Todos os Serviços
                            </a>
                            <div class="h-px bg-gray-100 my-1"></div>
                            <a href="{{ route('residential-projects') }}" class="block px-5 py-3 text-xs uppercase tracking-[0.15em] text-gray-600 hover:bg-brand-light hover:text-brand-gold transition font-medium {{ request()->routeIs('residential-projects') ? 'text-brand-gold bg-brand-light' : '' }}">
                                Projetos Residenciais
                            </a>
                            <a href="{{ route('commercial-projects') }}" class="block px-5 py-3 text-xs uppercase tracking-[0.15em] text-gray-600 hover:bg-brand-light hover:text-brand-gold transition font-medium {{ request()->routeIs('commercial-projects') ? 'text-brand-gold bg-brand-light' : '' }}">
                                Projetos Comerciais
                            </a>
                            <a href="{{ route('interior-design') }}" class="block px-5 py-3 text-xs uppercase tracking-[0.15em] text-gray-600 hover:bg-brand-light hover:text-brand-gold transition font-medium {{ request()->routeIs('interior-design') ? 'text-brand-gold bg-brand-light' : '' }}">
                                Design de Interiores
                            </a>
                            <a href="{{ route('3d-design') }}" class="block px-5 py-3 text-xs uppercase tracking-[0.15em] text-gray-600 hover:bg-brand-light hover:text-brand-gold transition font-medium {{ request()->routeIs('3d-design') ? 'text-brand-gold bg-brand-light' : '' }}">
                                Design 3D
                            </a>
                        </div>
                    </div>
                </div>
                
                <a href="{{ route('blog') }}"
                    class="text-xs uppercase tracking-[0.2em] font-medium text-gray-600 hover:text-brand-gold transition pb-1 {{ request()->routeIs('blog') ? 'text-brand-gold' : '' }}">Blog</a>
                <a href="{{ route('contact') }}"
                    class="text-xs uppercase tracking-[0.2em] font-medium text-gray-600 hover:text-brand-gold transition pb-1 {{ request()->routeIs('contact') ? 'text-brand-gold' : '' }}">Contato</a>
                <a href="{{ route('contact') }}" class="bg-brand-gold hover:bg-brand-gold-hover text-brand-dark px-6 py-3 text-xs uppercase tracking-widest font-semibold transition-all shadow-md hover:shadow-lg flex items-center gap-2 ml-4">
                    <i data-lucide="calendar" class="w-4 h-4"></i>
                    Agendar Reunião
                </a>
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
                
                <!-- Mobile Services Dropdown -->
                <div class="border-b border-gray-100">
                    <button id="mobile-services-btn" class="flex items-center justify-between w-full py-1">
                        <span class="text-3xl font-serif text-gray-900 transition hover:text-gray-500 {{ request()->routeIs('services') || request()->routeIs('residential-projects') || request()->routeIs('commercial-projects') || request()->routeIs('interior-design') || request()->routeIs('3d-design') ? 'font-bold' : '' }}">Serviços</span>
                        <svg id="mobile-services-arrow" class="w-5 h-5 text-gray-400 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="mobile-services-menu" class="overflow-hidden transition-all duration-300 ease-in-out" style="max-height: 0px;">
                        <div class="pl-4 py-4 space-y-4">
                            <a href="{{ route('services') }}" class="block text-lg text-gray-600 hover:text-brand-gold transition {{ request()->routeIs('services') ? 'text-brand-gold font-medium' : '' }}">Todos os Serviços</a>
                            <a href="{{ route('residential-projects') }}" class="block text-lg text-gray-600 hover:text-brand-gold transition {{ request()->routeIs('residential-projects') ? 'text-brand-gold font-medium' : '' }}">Projetos Residenciais</a>
                            <a href="{{ route('commercial-projects') }}" class="block text-lg text-gray-600 hover:text-brand-gold transition {{ request()->routeIs('commercial-projects') ? 'text-brand-gold font-medium' : '' }}">Projetos Comerciais</a>
                            <a href="{{ route('interior-design') }}" class="block text-lg text-gray-600 hover:text-brand-gold transition {{ request()->routeIs('interior-design') ? 'text-brand-gold font-medium' : '' }}">Design de Interiores</a>
                            <a href="{{ route('3d-design') }}" class="block text-lg text-gray-600 hover:text-brand-gold transition {{ request()->routeIs('3d-design') ? 'text-brand-gold font-medium' : '' }}">Design 3D</a>
                        </div>
                    </div>
                </div>
                
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

    <footer class="bg-brand-dark text-white py-12 border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center">
            <a href="{{ route('home') }}" class="text-2xl font-serif font-bold tracking-wider text-white mb-6 md:mb-0">
                RM<span class="text-brand-gold italic font-light">ARQ</span>
            </a>
            
            <div class="text-white/50 text-sm font-light flex flex-col items-center md:items-end">
                <p>&copy; {{ date('Y') }} Ricardo Morais Arquitetura. Todos os direitos reservados.</p>
                <p>Desenvolvido por <a href="https://sigowebsolutions.com.br" target="_blank" class="text-amber-300 underline">Sigo Web Solutions</a></p>
                <div class="flex gap-4 mt-4">
                    <a href="#" class="hover:text-brand-gold transition-colors"><i data-lucide="instagram" class="w-5 h-5"></i></a>
                    <a href="#" class="hover:text-brand-gold transition-colors"><i data-lucide="linkedin" class="w-5 h-5"></i></a>
                    <a href="mailto:contato@ricardomorais.arq.br" class="hover:text-brand-gold transition-colors"><i data-lucide="mail" class="w-5 h-5"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        document.addEventListener('DOMContentLoaded', function () {
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