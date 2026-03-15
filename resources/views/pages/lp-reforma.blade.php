<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ricardo Morais | Arquitetura & Reformas de Alto Padrão</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            gold: '#C5A880',
                            gold_hover: '#B0946B',
                            dark: '#111111',
                            surface: '#1A1A1A',
                            light: '#F8F9FA',
                            gray: '#888888'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>

    <style>
        html { scroll-behavior: smooth; }

        /* Typography selections */
        ::selection {
            background-color: #C5A880;
            color: #111;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #111; }
        ::-webkit-scrollbar-thumb { background: #C5A880; border-radius: 4px; }

        /* Parallax Backgrounds */
        .parallax-hero {
            background-image: linear-gradient(to bottom, rgba(17, 17, 17, 0.4), rgba(17, 17, 17, 0.8)), url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=2070&auto=format&fit=crop');
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .parallax-cta {
            background-image: linear-gradient(to bottom, rgba(17, 17, 17, 0.9), rgba(17, 17, 17, 0.95)), url('https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?q=80&w=2070&auto=format&fit=crop');
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .img-zoom-hover {
            overflow: hidden;
        }
        .img-zoom-hover img {
            transition: transform 0.7s ease;
        }
        .img-zoom-hover:hover img {
            transform: scale(1.05);
        }

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
    </style>
</head>
<body class="bg-brand-light text-brand-dark font-sans antialiased overflow-x-hidden" x-data="{ scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 50)">

    <!-- 1. Navbar with Call to Action -->
    <nav :class="{ 'bg-brand-dark/95 backdrop-blur-md shadow-lg py-4': scrolled, 'bg-transparent py-6': !scrolled }" class="fixed w-full z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 flex justify-between items-center">
            <a href="#" class="text-2xl font-serif font-bold tracking-wider text-white">
                RM<span class="text-brand-gold italic font-light">ARQ</span>
            </a>
            <div class="hidden lg:flex space-x-8 text-xs uppercase tracking-[0.2em] text-white/80 font-medium items-center">
                <a href="#seguranca" class="hover:text-brand-gold transition-colors">Segurança</a>
                <a href="#diferenciais" class="hover:text-brand-gold transition-colors">Por Que Nós</a>
                <a href="#projetos" class="hover:text-brand-gold transition-colors">Projetos</a>
                <a href="#arquiteto" class="hover:text-brand-gold transition-colors">O Arquiteto</a>
                <a href="#contato" class="bg-brand-gold hover:bg-brand-gold_hover text-brand-dark px-6 py-3 rounded-sm transition-all shadow-[0_0_15px_rgba(197,168,128,0.3)] hover:shadow-[0_0_25px_rgba(197,168,128,0.5)] font-semibold flex items-center gap-2">
                    <i data-lucide="calendar" class="w-4 h-4"></i>
                    Agendar Reunião
                </a>
            </div>
            
            <!-- Mobile Toggle -->
            <button class="lg:hidden text-white hover:text-brand-gold">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
        </div>
    </nav>

    <!-- 2. Apresentação (Hero Section) -->
    <header id="home" class="parallax-hero min-h-screen flex items-center pt-20 relative">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-dark/80 to-transparent"></div>
        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full relative z-10">
            <div class="max-w-3xl reveal">
                <div class="flex items-center gap-4 mb-6">
                    <div class="h-px w-12 bg-brand-gold"></div>
                    <p class="text-brand-gold uppercase tracking-[0.3em] text-xs font-semibold">Especialistas em Reformas</p>
                </div>
                <h1 class="text-5xl md:text-7xl font-serif text-white leading-[1.1] mb-6">
                    Redefinindo o padrão <br><span class="italic font-light text-brand-gold">da sua morada.</span>
                </h1>
                <p class="text-lg md:text-xl text-white/80 mb-10 font-light max-w-2xl leading-relaxed">
                    Projetos arquitetônicos sofisticados encontram a execução perfeita. Transformamos sua casa em uma verdadeira obra de arte, sem dores de cabeça e no prazo combinado.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#contato" class="bg-brand-gold hover:bg-brand-gold_hover text-brand-dark uppercase tracking-[0.15em] text-xs font-bold px-8 py-4 text-center transition-all flex items-center justify-center gap-2">
                        Iniciar Minha Reforma
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Scroll indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 flex flex-col items-center animate-bounce">
            <span class="text-white/50 text-xs tracking-widest uppercase mb-2">Role para descobrir</span>
            <i data-lucide="chevron-down" class="text-brand-gold w-5 h-5"></i>
        </div>
    </header>

    <!-- 3. Segurança para o Cliente -->
    <section id="seguranca" class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <h2 class="text-3xl md:text-5xl font-serif text-brand-dark mb-6">Sua Paz de Espírito <br><span class="italic text-brand-gray">em Primeiro Lugar</span></h2>
                <div class="w-16 h-px bg-brand-gold mx-auto mb-6"></div>
                <p class="text-brand-gray leading-relaxed text-lg font-light">
                    Entendemos o estigma das reformas. Prometi mudar isso. Oferecemos um controle absoluto desde o rascunho até a entrega das chaves.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="reveal delay-100 p-10 bg-brand-light border border-gray-100 hover:shadow-2xl transition-all duration-500 group relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-brand-gold transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
                    <div class="w-14 h-14 bg-brand-dark text-brand-gold flex items-center justify-center mb-8 rounded-sm">
                        <i data-lucide="file-check-2" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-serif font-semibold mb-4 text-brand-dark">Garantia Contratual</h3>
                    <p class="text-brand-gray font-light leading-relaxed mb-8">Cronograma e orçamento estritamente travados em contrato. Sem surpresas ou custos ocultos no meio da obra.</p>
                </div>
                
                <!-- Card 2 -->
                <div class="reveal delay-200 p-10 bg-brand-dark text-white hover:shadow-2xl hover:shadow-brand-dark/20 transition-all duration-500 group relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-brand-gold transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
                    <div class="w-14 h-14 bg-brand-gold text-brand-dark flex items-center justify-center mb-8 rounded-sm">
                        <i data-lucide="eye" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-serif font-semibold mb-4">Acompanhamento Transparente</h3>
                    <p class="text-white/70 font-light leading-relaxed mb-8">Você recebe relatórios semanais com fotos, vídeos e evolução do cronograma diário diretamente no seu celular.</p>
                </div>
                
                <!-- Card 3 -->
                <div class="reveal delay-300 p-10 bg-brand-light border border-gray-100 hover:shadow-2xl transition-all duration-500 group relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-brand-gold transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
                    <div class="w-14 h-14 bg-brand-dark text-brand-gold flex items-center justify-center mb-8 rounded-sm">
                        <i data-lucide="shield" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-serif font-semibold mb-4 text-brand-dark">Gestão Completa</h3>
                    <p class="text-brand-gray font-light leading-relaxed mb-8">Nós gerenciamos absolutamente tudo: compras, recebimentos, equipes técnicas e limpeza pós-obra.</p>
                </div>
            </div>

            <!-- CTA -->
            <div class="mt-16 text-center reveal">
                <a href="#contato" class="inline-flex items-center gap-2 border-b-2 border-brand-gold text-brand-dark uppercase tracking-widest text-sm font-semibold pb-1 hover:text-brand-gold transition-colors">
                    Entenda Nosso Processo Seguro
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- 4. Por Que Nos Escolher -->
    <section id="diferenciais" class="py-24 bg-brand-surface relative overflow-hidden">
        <div class="absolute top-0 left-1/2 w-px h-full bg-white/5 hidden md:block"></div>
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div class="reveal img-zoom-hover relative">
                    <div class="absolute -inset-4 border border-brand-gold/30 z-0 hidden md:block"></div>
                    <img src="https://images.unsplash.com/photo-1628624747186-a941c476b7ef?q=80&w=2070&auto=format&fit=crop" alt="Detalhe de Arquitetura Interiores" class="relative z-10 w-full h-[600px] object-cover shadow-2xl">
                    <div class="absolute bottom-8 right-8 bg-brand-dark p-6 z-20 shadow-xl border-l-4 border-brand-gold">
                        <p class="text-4xl font-serif text-brand-gold mb-1">100%</p>
                        <p class="text-white text-sm uppercase tracking-wider">Comprometimento</p>
                    </div>
                </div>

                <div class="reveal delay-200">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="h-px w-8 bg-brand-gold"></div>
                        <p class="text-brand-gold uppercase tracking-[0.2em] text-xs font-semibold">Exclusividade e Precisão</p>
                    </div>
                    <h2 class="text-3xl md:text-5xl font-serif text-white mb-8 leading-[1.2]">
                        Expertise focada em <br> <span class="italic text-brand-gray">Reformas Residenciais</span>
                    </h2>
                    
                    <ul class="space-y-8 mb-12">
                        <li class="flex items-start gap-4">
                            <i data-lucide="check" class="text-brand-gold w-6 h-6 shrink-0 mt-1"></i>
                            <div>
                                <h4 class="text-white font-serif text-xl mb-2">Turnkey (Chave na Mão)</h4>
                                <p class="text-white/60 font-light leading-relaxed">Entregamos a obra totalmente pronta para você morar, incluindo decoração e limpeza fina.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <i data-lucide="check" class="text-brand-gold w-6 h-6 shrink-0 mt-1"></i>
                            <div>
                                <h4 class="text-white font-serif text-xl mb-2">Fornecedores Homologados</h4>
                                <p class="text-white/60 font-light leading-relaxed">Trabalhamos apenas com equipes e materiais que atendem aos mais altos padrões de qualidade do mercado.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <i data-lucide="check" class="text-brand-gold w-6 h-6 shrink-0 mt-1"></i>
                            <div>
                                <h4 class="text-white font-serif text-xl mb-2">Estética Refinada</h4>
                                <p class="text-white/60 font-light leading-relaxed">Nossos projetos harmonizam luz, texturas e proporções para criar espaços que emocionam.</p>
                            </div>
                        </li>
                    </ul>

                    <a href="#projetos" class="inline-block bg-brand-gold hover:bg-brand-gold_hover text-brand-dark uppercase tracking-widest text-xs font-bold px-8 py-4 transition-all shadow-lg hover:shadow-xl">
                        Verifique Nossa Qualidade
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Projetos (Galeria) -->
    <section id="projetos" class="py-24 bg-brand-light">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 reveal">
                <div class="max-w-2xl">
                    <h2 class="text-3xl md:text-5xl font-serif text-brand-dark mb-4">Obras Realizadas</h2>
                    <p class="text-brand-gray text-lg font-light">Reprojetando espaços, redefinindo histórias. A perfeição mora nos pormenores.</p>
                </div>
                <div class="mt-6 md:mt-0">
                    <a href="#contato" class="flex items-center gap-2 border border-brand-dark/20 hover:border-brand-dark px-6 py-3 uppercase tracking-widest text-xs text-brand-dark transition-all duration-300">
                        Quero Esse Padrão <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>

            <!-- CSS Grid Gallery -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Item 1 (Wide) -->
                <div class="lg:col-span-2 group relative overflow-hidden h-[400px] reveal delay-100 cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" alt="Reforma Sala de Estar">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/90 via-brand-dark/20 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 p-8 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <p class="text-brand-gold text-sm tracking-widest uppercase mb-2">Reforma Residencial</p>
                        <h3 class="text-3xl font-serif text-white mb-2">Casa Figueiras</h3>
                        <p class="text-white/70 font-light opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">Integração completa de living e nova área gourmet.</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="group relative overflow-hidden h-[400px] reveal delay-200 cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?q=80&w=1974&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" alt="Reforma Cozinha">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/90 via-brand-dark/20 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 p-8 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <p class="text-brand-gold text-sm tracking-widest uppercase mb-2">Interiores</p>
                        <h3 class="text-2xl font-serif text-white mb-2">Apt. Lumina</h3>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="group relative overflow-hidden h-[400px] reveal delay-100 cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1600585154526-990dced4ea0d?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" alt="Reforma Banheiro">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/90 via-brand-dark/20 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 p-8 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <p class="text-brand-gold text-sm tracking-widest uppercase mb-2">Banho Master</p>
                        <h3 class="text-2xl font-serif text-white mb-2">Suite Minimal</h3>
                    </div>
                </div>

                <!-- Item 4 (Wide) -->
                <div class="lg:col-span-2 group relative overflow-hidden h-[400px] reveal delay-200 cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1600607686527-6fb886090705?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" alt="Área Externa">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/90 via-brand-dark/20 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 p-8 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <p class="text-brand-gold text-sm tracking-widest uppercase mb-2">Retrofit Total</p>
                        <h3 class="text-3xl font-serif text-white mb-2">Cobertura Jardins</h3>
                        <p class="text-white/70 font-light opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">Redesenho moderno com acabamentos nobres e automação.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Sobre o Arquiteto -->
    <section id="arquiteto" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center gap-16">
                <!-- Image -->
                <div class="w-full md:w-5/12 reveal">
                    <div class="relative p-6">
                        <div class="absolute inset-0 border-2 border-brand-gold/50 transform translate-x-4 -translate-y-4"></div>
                        <img src="https://arquitetoricardomoraisprojetos.com/var/assets/img/media/original/c650705bed1c6efe5a89585811e4513f/j4.jpg" alt="Arquiteto Ricardo Morais" class="relative z-10 w-full object-cover grayscale hover:grayscale-0 transition-all duration-700 shadow-xl max-h-[600px]">
                    </div>
                </div>
                
                <!-- Content -->
                <div class="w-full md:w-7/12 reveal delay-200">
                    <h2 class="text-4xl md:text-6xl font-serif text-brand-dark mb-2">Ricardo Morais</h2>
                    <p class="text-brand-gold text-lg uppercase tracking-widest mb-8">Arquiteto Diretor</p>
                    
                    <div class="space-y-6 text-brand-gray font-light leading-relaxed text-lg mb-10">
                        <p>
                            Com mais de uma década dedicada à arquitetura de alto padrão, minha missão nunca foi apenas "construir ou quebrar paredes". Meu objetivo é traduzir a identidade e os anseios dos meus clientes em arquitetura palpável.
                        </p>
                        <p>
                            Especializei-me em reformas porque acredito no poder da renovação. Existe uma mágica em olhar para um espaço estagnado e visualizar o potencial de uma vida muito mais confortável e elegante ali dentro.
                        </p>
                        <p class="italic text-brand-dark border-l-4 border-brand-gold pl-6 py-2">
                            "A verdadeira sofisticação de uma reforma está na paz que ela traz ao cliente antes mesmo de ficar pronta."
                        </p>
                    </div>

                    <a href="#contato" class="inline-flex items-center gap-2 bg-brand-dark hover:bg-brand-gold text-white hover:text-brand-dark uppercase tracking-widest text-xs font-bold px-8 py-4 transition-all">
                        Fale Diretamente Comigo
                        <i data-lucide="mail" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. CTA Final -->
    <section id="contato" class="parallax-cta py-32 relative text-center">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-brand-dark/80 mix-blend-multiply"></div>
        
        <div class="max-w-4xl mx-auto px-6 lg:px-8 relative z-10 reveal">
            <i data-lucide="compass" class="w-16 h-16 text-brand-gold mx-auto mb-8 animate-pulse"></i>
            <h2 class="text-4xl md:text-6xl font-serif text-white mb-6">Pronto para Mudar a <span class="italic text-brand-gold">Forma como Vive?</span></h2>
            <p class="text-xl text-white/80 font-light mb-12 max-w-2xl mx-auto">
                Vamos conversar sobre o seu espaço. Nossa equipe está pronta para realizar um diagnóstico e estruturar a reforma dos seus sonhos.
            </p>
            
            <form class="max-w-xl mx-auto bg-white/5 p-8 backdrop-blur-sm border border-white/10 mt-8 mb-10 text-left">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-white/70 text-xs uppercase tracking-widest mb-2">Nome Completo</label>
                        <input type="text" class="w-full bg-transparent border-b border-white/30 focus:border-brand-gold text-white py-2 outline-none transition-colors" placeholder="Seu nome">
                    </div>
                    <div>
                        <label class="block text-white/70 text-xs uppercase tracking-widest mb-2">Telefone / WhatsApp</label>
                        <input type="text" class="w-full bg-transparent border-b border-white/30 focus:border-brand-gold text-white py-2 outline-none transition-colors" placeholder="(00) 00000-0000">
                    </div>
                </div>
                <div class="mb-8">
                    <label class="block text-white/70 text-xs uppercase tracking-widest mb-2">Como podemos ajudar?</label>
                    <textarea rows="3" class="w-full bg-transparent border-b border-white/30 focus:border-brand-gold text-white py-2 outline-none transition-colors" placeholder="Resumo do imóvel e intenção..."></textarea>
                </div>
                <button type="button" class="w-full bg-brand-gold hover:bg-white text-brand-dark uppercase tracking-widest text-sm font-bold px-8 py-4 transition-all">
                    Agendar Diagnóstico Gratuito
                </button>
            </form>
            
            <p class="text-white/50 text-sm">Ou chame-nos no <a href="#" class="text-brand-gold hover:underline">WhatsApp (+55 11 9999-9999)</a></p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-brand-dark py-12 border-t border-white/10">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center md:text-left flex flex-col md:flex-row justify-between items-center group">
            <a href="#" class="text-2xl font-serif font-bold tracking-wider text-white mb-6 md:mb-0">
                RM<span class="text-brand-gold italic font-light">ARQ</span>
            </a>
            
            <div class="text-white/50 text-sm font-light flex flex-col items-center md:items-end">
                <p>&copy; 2026 Ricardo Morais Arquitetura. Todos os direitos reservados.</p>
                <div class="flex gap-4 mt-4">
                    <a href="#" class="hover:text-brand-gold transition-colors"><i data-lucide="instagram" class="w-5 h-5"></i></a>
                    <a href="#" class="hover:text-brand-gold transition-colors"><i data-lucide="linkedin" class="w-5 h-5"></i></a>
                    <a href="#" class="hover:text-brand-gold transition-colors"><i data-lucide="mail" class="w-5 h-5"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Initialize Scripts -->
    <script>
        // Initialize Lucide Icons
        lucide.createIcons();
        
        // Scroll Reveal Observer
        document.addEventListener("DOMContentLoaded", () => {
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
