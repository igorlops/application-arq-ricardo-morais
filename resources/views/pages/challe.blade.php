<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos de Chalés e Refúgios | Ricardo Morais</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Use a different font stack: minimalist sans-serif for everything, very modern -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@200;300;400;500;600;700&family=Cormorant:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cabana: {
                            base: '#F4F2EE',      // Warm off-white background
                            text: '#2C2B2A',      // Soft black for text
                            accent: '#6A7062',    // Muted sage green
                            accent_hover: '#54594E',
                            stone: '#D4D0C8',     // Light stone border color
                            dark: '#1C1E1A',      // Very dark subtle green
                        }
                    },
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                        serif: ['Cormorant', 'serif'],
                    }
                }
            }
        }
    </script>

    <style>
        html { scroll-behavior: smooth; }

        body {
            background-color: #F4F2EE;
            color: #2C2B2A;
        }

        ::selection {
            background-color: #6A7062;
            color: #F4F2EE;
        }

        /* Minimalist Scrollbar */
        ::-webkit-scrollbar { width: 4px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #D4D0C8; border-radius: 10px; }

        .fade-in-up {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }
        .fade-in-up.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Floating image effect */
        .float-img {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }

        .clip-diagonal {
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
        }
        .clip-diagonal-reverse {
            clip-path: polygon(0 10%, 100% 0, 100% 100%, 0 100%);
        }
    </style>
</head>
<body class="font-sans antialiased overflow-x-hidden" x-data="{ scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 50)">

    <!-- Minimalist Navbar -->
    <nav :class="{ 'bg-cabana-base/90 backdrop-blur-md border-b border-cabana-stone py-4 shadow-sm': scrolled, 'bg-transparent py-6': !scrolled }" class="fixed w-full z-50 transition-all duration-500">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 flex justify-between items-center">
            <a href="/" class="text-2xl font-serif font-light tracking-widest text-cabana-text flex items-center gap-2">
                <i data-lucide="zap" class="w-5 h-5 text-cabana-accent"></i>
                R.MORAIS
            </a>
            <div class="hidden lg:flex space-x-10 text-sm font-light text-cabana-text items-center tracking-wide">
                <a href="#solucao" class="hover:text-cabana-accent transition-colors relative group">
                    Descubra
                    <span class="absolute -bottom-1 left-0 w-0 h-px bg-cabana-accent transition-all group-hover:w-full"></span>
                </a>
                <a href="#obras" class="hover:text-cabana-accent transition-colors relative group">
                    Portfólio
                    <span class="absolute -bottom-1 left-0 w-0 h-px bg-cabana-accent transition-all group-hover:w-full"></span>
                </a>
                <a href="#arquiteto" class="hover:text-cabana-accent transition-colors relative group">
                    Autor
                    <span class="absolute -bottom-1 left-0 w-0 h-px bg-cabana-accent transition-all group-hover:w-full"></span>
                </a>
                <a href="#contato" class="border border-cabana-text hover:bg-cabana-text hover:text-cabana-base px-6 py-2 rounded-full transition-all duration-300 flex items-center gap-2 font-medium">
                    Consultoria
                </a>
            </div>
            
            <button class="lg:hidden text-cabana-text">
                <i data-lucide="align-right" class="w-6 h-6"></i>
            </button>
        </div>
    </nav>

    <!-- Hero Section (Split Asymmetric) -->
    <header class="min-h-screen pt-24 lg:pt-0 flex items-center relative overflow-hidden">
        <!-- Abstract shape background -->
        <div class="absolute top-0 right-0 w-2/3 h-full bg-cabana-stone/20 rounded-bl-[150px] -z-10 hidden lg:block"></div>
        
        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div class="fade-in-up mt-10 lg:mt-0">
                    <span class="inline-block py-1 px-3 border border-cabana-accent rounded-full text-cabana-accent text-xs tracking-widest uppercase mb-6">
                        Arquitetura de Refúgio
                    </span>
                    <h1 class="text-5xl lg:text-7xl font-sans font-light text-cabana-text leading-tight mb-6 tracking-tight">
                        Crie o chalé <br>
                        que o <span class="font-serif italic text-cabana-accent">mercado deseja.</span>
                    </h1>
                    <p class="text-lg text-cabana-text/70 mb-10 font-light max-w-lg leading-relaxed">
                        Desenhamos conceitos arquitetônicos de alta rentabilidade e rápida execução, entregando uma estética natural que impressiona.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contato" class="bg-cabana-accent hover:bg-cabana-accent_hover text-white px-8 py-4 rounded-full text-center transition-all shadow-[0_10px_20px_rgba(106,112,98,0.2)] hover:-translate-y-1 font-medium tracking-wide">
                            Iniciar Meu Projeto
                        </a>
                        <a href="#obras" class="px-8 py-4 flex items-center justify-center gap-3 text-cabana-text hover:text-cabana-accent transition-colors font-medium">
                            <span class="w-8 h-px bg-current"></span>
                            Ver Projetos
                        </a>
                    </div>
                </div>
                
                <div class="relative fade-in-up" style="transition-delay: 200ms;">
                    <!-- Image 4: h1.webp -->
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl aspect-[4/5] lg:aspect-auto lg:h-[700px]">
                        <img src="https://arquitetoricardomoraisprojetos.com/var/assets/img/media/iW=5000&iH=any/eef42699e92adf607798f12e8b04e767/tu.jpg" alt="Chalé Moderno" class="w-full h-full object-cover">
                        <!-- Glassmorphism card -->
                        <div class="absolute bottom-8 right-8 bg-white/20 backdrop-blur-xl border border-white/40 p-6 rounded-2xl w-64 shadow-xl">
                            <i data-lucide="mountain-snow" class="w-8 h-8 text-white mb-3"></i>
                            <h3 class="text-white font-medium mb-1">Integração Total</h3>
                            <p class="text-white/80 text-sm font-light">Desenho que respeita a topografia e a luz natural.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- The Solution / Concept (Minimal Grid) -->
    <section id="solucao" class="py-24 lg:py-32 bg-cabana-dark text-cabana-base clip-diagonal">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 pt-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-5 fade-in-up">
                    <h2 class="text-4xl lg:text-5xl font-sans font-light leading-tight mb-8">
                        Rentabilidade elevada ao <span class="font-serif italic text-cabana-stone">estado da arte.</span>
                    </h2>
                    <ul class="space-y-6 text-cabana-base/80 font-light">
                        <li class="flex items-start gap-4">
                            <div class="w-8 h-8 rounded-full border border-cabana-stone flex items-center justify-center shrink-0 mt-1">
                                <span class="text-xs">01</span>
                            </div>
                            <div>
                                <h4 class="text-lg text-white font-medium mb-1">Design Magnético</h4>
                                <p class="text-sm leading-relaxed">Arquitetura altamente "instagramável" que aumenta reservas orgânicas e perceção de valor nas estadias.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="w-8 h-8 rounded-full border border-cabana-stone flex items-center justify-center shrink-0 mt-1">
                                <span class="text-xs">02</span>
                            </div>
                            <div>
                                <h4 class="text-lg text-white font-medium mb-1">Eficiência de Canteiro</h4>
                                <p class="text-sm leading-relaxed">Projetos padronizados mentalmente para sistemas construtivos rápidos (Wood Frame, Steel Frame).</p>
                            </div>
                        </li>
                    </ul>
                    <a href="#contato" class="mt-10 inline-flex items-center gap-2 bg-white text-cabana-dark px-6 py-3 rounded-full hover:bg-cabana-stone transition-all text-sm font-medium">
                        Discutir Viabilidade <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                    </a>
                </div>
                
                <div class="lg:col-span-7 fade-in-up" style="transition-delay: 200ms;">
                    <!-- Image 1: tu.jpg -->
                    <div class="rounded-3xl overflow-hidden float-img">
                        <img src="https://arquitetoricardomoraisprojetos.com/var/assets/media/original/0710f0c95791d50603493f3abfa4187e/h1.webp" alt="Estrutura de Madeira e Vidro" class="w-full h-[500px] object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Typography / Divider Section -->
    <section class="py-20 bg-cabana-base overflow-hidden">
        <div class="whitespace-nowrap opacity-5 font-serif text-8xl md:text-[12rem] tracking-tighter overflow-hidden">
            ARQUITETURA DE REFÚGIO . CHALÉS . CABANAS . 
        </div>
    </section>

    <!-- Obras / Portfólio using alternating layout -->
    <section id="obras" class="py-20 bg-cabana-base">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-20 fade-in-up">
                <i data-lucide="layout-grid" class="w-8 h-8 text-cabana-accent mx-auto mb-6"></i>
                <h2 class="text-4xl lg:text-5xl font-light mb-4">Obras em <span class="font-serif italic text-cabana-accent">Destaque</span></h2>
                <p class="text-cabana-text/70 font-light">Cabanas desenhadas não apenas para abrigar, mas para causar impacto e rentabilizar o seu lote de terra.</p>
            </div>

            <div class="space-y-32">
                <!-- Project 1 (Image 3: 1888.png) -->
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="fade-in-up order-2 lg:order-1 relative">
                        <div class="absolute -top-10 -left-10 w-32 h-32 bg-cabana-stone/30 rounded-full blur-3xl -z-10"></div>
                        <span class="text-cabana-accent font-serif text-5xl mb-4 block">01</span>
                        <h3 class="text-3xl font-light mb-4">Cabana Aurora</h3>
                        <p class="text-cabana-text/70 font-light leading-relaxed mb-6">
                            Um layout compacto mas incrivelmente poderoso. Telhados acentuados que rompem a copa das árvores e frentes 100% envidraçadas que borram a linha entre interior e exterior. Ideal para turismo romântico.
                        </p>
                        <ul class="flex gap-4 mb-8">
                            <li class="bg-white px-4 py-2 rounded-lg text-sm shadow-sm border border-cabana-stone">Wood Frame</li>
                            <li class="bg-white px-4 py-2 rounded-lg text-sm shadow-sm border border-cabana-stone">35m²</li>
                        </ul>
                        <a href="#contato" class="text-cabana-accent hover:text-cabana-dark transition-colors inline-flex items-center gap-2 font-medium">
                            Quero este estilo <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                    <div class="fade-in-up order-1 lg:order-2">
                        <div class="rounded-2xl overflow-hidden shadow-2xl h-[450px]">
                            <img src="https://arquitetoricardomoraisprojetos.com/var/assets/img/media/original/50f9d5a40609d30cc053d9c1d91d1b5b/1888.png" alt="Projeto Cabana 1" class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                        </div>
                    </div>
                </div>

                <!-- Project 2 (Image 5: 888888.png) -->
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="fade-in-up">
                        <div class="rounded-2xl overflow-hidden shadow-2xl h-[450px]">
                            <img src="https://arquitetoricardomoraisprojetos.com/var/assets/img/media/original/98cb9967217ca8a967a67b497b058555/888888.png" alt="Projeto Cabana 2" class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                        </div>
                    </div>
                    <div class="fade-in-up lg:pl-12 relative">
                        <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-cabana-accent/10 rounded-full blur-3xl -z-10"></div>
                        <span class="text-cabana-accent font-serif text-5xl mb-4 block">02</span>
                        <h3 class="text-3xl font-light mb-4">Refúgio Zen</h3>
                        <p class="text-cabana-text/70 font-light leading-relaxed mb-6">
                            Madeiras claras contrastando com estruturas escuras. Uma arquitetura de pavilhão que se esparrama pelo terreno, com aberturas laterais que integram o deck contínuo à paisagem. Suíte master com banheira de imersão de frente para a natureza.
                        </p>
                        <ul class="flex gap-4 mb-8">
                            <li class="bg-white px-4 py-2 rounded-lg text-sm shadow-sm border border-cabana-stone">Steel Frame</li>
                            <li class="bg-white px-4 py-2 rounded-lg text-sm shadow-sm border border-cabana-stone">60m²</li>
                        </ul>
                        <a href="#contato" class="text-cabana-accent hover:text-cabana-dark transition-colors inline-flex items-center gap-2 font-medium">
                            Quero este estilo <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="mt-20 text-center fade-in-up">
                <a href="#contato" class="inline-block border-2 border-cabana-text text-cabana-text hover:bg-cabana-text hover:text-white px-10 py-4 rounded-full transition-all duration-300 font-medium tracking-wide">
                    Desenvolver Projeto Exclusivo
                </a>
            </div>
        </div>
    </section>

    <!-- The Architect (Image 2: j4.jpg) -->
    <section id="arquiteto" class="py-24 bg-white clip-diagonal-reverse relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 mt-10">
            <div class="bg-cabana-base rounded-[40px] p-8 lg:p-16 relative">
                <!-- Decorative Quotes -->
                <i data-lucide="quote" class="absolute top-10 right-10 w-24 h-24 text-cabana-stone/50 rotate-180"></i>
                
                <div class="grid lg:grid-cols-5 gap-12 items-center relative z-10">
                    <div class="lg:col-span-2 fade-in-up">
                        <div class="aspect-[3/4] rounded-3xl overflow-hidden border-8 border-white shadow-xl">
                            <img src="https://arquitetoricardomoraisprojetos.com/var/assets/img/media/original/c650705bed1c6efe5a89585811e4513f/j4.jpg" alt="Ricardo Morais" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="lg:col-span-3 fade-in-up">
                        <h2 class="text-4xl lg:text-5xl font-light mb-2">Ricardo Morais</h2>
                        <p class="text-cabana-accent tracking-widest uppercase text-sm font-medium mb-8">O Arquiteto Criador</p>
                        
                        <div class="space-y-6 text-cabana-text/80 font-light text-lg mb-10 leading-relaxed">
                            <p>
                                Minha visão ao projetar chalés baseia-se num princípio simples: "A arquitetura não deve subjugar a natureza, mas emoldurá-la."
                            </p>
                            <p>
                                Nosso estúdio não entrega apenas plantas de execução. Entregamos um produto pensado de ponta a ponta para investidores e sonhadores que anseiam por refúgios que se destacam instantaneamente em qualquer portfólio imobiliário ou catálogo de aluguéis por temporada.
                            </p>
                            <p class="font-serif italic text-2xl text-cabana-text">
                                Um chalé extraordinário é um imã magnético para experiências inesquecíveis.
                            </p>
                        </div>
                        
                        <div class="flex items-center gap-6">
                            <img src="https://arquitetoricardomoraisprojetos.com/var/assets/img/media/original/c650705bed1c6efe5a89585811e4513f/j4.jpg" class="w-16 h-16 rounded-full object-cover border-2 border-white shadow-md grayscale" />
                            <div>
                                <p class="font-medium text-cabana-dark">Assinatura</p>
                                <p class="font-serif italic text-cabana-accent text-xl">Ricardo Morais</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form / CTA -->
    <section id="contato" class="py-24 lg:py-32 bg-cabana-base">
        <div class="max-w-5xl mx-auto px-6 lg:px-8">
            <div class="bg-cabana-dark rounded-3xl overflow-hidden shadow-2xl flex flex-col md:flex-row">
                
                <!-- Left side Info -->
                <div class="w-full md:w-5/12 bg-cabana-accent p-10 text-white flex flex-col justify-between relative overflow-hidden">
                    <!-- Leaf background decorative -->
                    <i data-lucide="leaf" class="absolute -bottom-10 -left-10 w-64 h-64 text-white/5"></i>
                    
                    <div class="relative z-10">
                        <h3 class="text-3xl font-serif mb-4">Dê o primeiro passo.</h3>
                        <p class="font-light text-white/80 mb-10 text-sm">Nossa equipe entrará em contato para analisar o potencial do seu lote e desenhar as premissas do seu futuro Chalé.</p>
                        
                        <div class="space-y-6">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center">
                                    <i data-lucide="phone" class="w-4 h-4"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-white/60 mb-1">WhatsApp direto</p>
                                    <p class="font-medium">+55 (11) 9999-9999</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center">
                                    <i data-lucide="mail" class="w-4 h-4"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-white/60 mb-1">E-mail</p>
                                    <p class="font-medium">projetos@rmorais.arq</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Form Side -->
                <div class="w-full md:w-7/12 p-10 bg-white">
                    <h3 class="text-2xl font-light mb-8 text-cabana-dark">Solicite uma Análise Especializada</h3>
                    
                    <form class="space-y-5">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-xs uppercase tracking-widest text-cabana-accent mb-2 font-medium">Nome</label>
                                <input type="text" class="w-full bg-cabana-base border border-cabana-stone focus:border-cabana-accent rounded-lg px-4 py-3 outline-none transition-all text-sm" placeholder="João Silva">
                            </div>
                            <div>
                                <label class="block text-xs uppercase tracking-widest text-cabana-accent mb-2 font-medium">Celular</label>
                                <input type="text" class="w-full bg-cabana-base border border-cabana-stone focus:border-cabana-accent rounded-lg px-4 py-3 outline-none transition-all text-sm" placeholder="(00) 00000-0000">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-xs uppercase tracking-widest text-cabana-accent mb-2 font-medium">Terreno / Lote</label>
                            <select class="w-full bg-cabana-base border border-cabana-stone focus:border-cabana-accent rounded-lg px-4 py-3 outline-none transition-all text-sm text-cabana-text">
                                <option value="">Já possui área?</option>
                                <option value="sim">Sim, área urbana ou condomínio fechado</option>
                                <option value="sim_rural">Sim, área rural livre</option>
                                <option value="nao">Não, pretendo investir primeiro</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-xs uppercase tracking-widest text-cabana-accent mb-2 font-medium">Visão do Projeto</label>
                            <textarea rows="3" class="w-full bg-cabana-base border border-cabana-stone focus:border-cabana-accent rounded-lg px-4 py-3 outline-none transition-all text-sm" placeholder="Ex: Penso numa cabana estilo A-Frame para colocar no Airbnb..."></textarea>
                        </div>
                        
                        <button type="button" class="w-full bg-cabana-dark hover:bg-cabana-accent text-white rounded-lg py-4 font-medium transition-colors shadow-lg flex justify-center items-center gap-2">
                            Enviar Solicitação <i data-lucide="send" class="w-4 h-4"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-cabana-base py-10 border-t border-cabana-stone">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-6">
            <a href="/" class="text-xl font-serif font-light tracking-widest text-cabana-text flex items-center gap-2">
                <i data-lucide="zap" class="w-4 h-4 text-cabana-accent"></i>
                R.MORAIS
            </a>
            
            <p class="text-cabana-text/50 text-xs font-light">© 2026 Ricardo Morais Arquitetura de Refúgios.</p>
            
            <div class="flex gap-4">
                <a href="#" class="w-10 h-10 rounded-full bg-cabana-stone/50 flex items-center justify-center text-cabana-text hover:bg-cabana-accent hover:text-white transition-all"><i data-lucide="instagram" class="w-4 h-4"></i></a>
                <a href="#" class="w-10 h-10 rounded-full bg-cabana-stone/50 flex items-center justify-center text-cabana-text hover:bg-cabana-accent hover:text-white transition-all"><i data-lucide="linkedin" class="w-4 h-4"></i></a>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        lucide.createIcons();
        
        // Scroll Animation Observer for .fade-in-up elements
        document.addEventListener("DOMContentLoaded", () => {
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.15
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.fade-in-up').forEach((el) => {
                observer.observe(el);
            });
            
            // Trigger initially for elements already in viewport
            setTimeout(() => {
                document.querySelectorAll('.fade-in-up').forEach((el) => {
                    const rect = el.getBoundingClientRect();
                    if(rect.top < window.innerHeight) {
                        el.classList.add('is-visible');
                    }
                });
            }, 100);
        });
    </script>
</body>
</html>