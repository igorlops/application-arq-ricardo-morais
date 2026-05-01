<x-app-layout :seoMeta="$seoMeta">
    
    <!-- Hero Section -->
    <section class="relative py-32 md:py-48 bg-brand-dark overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/arquitetura-fortaleza-ricardo-morais.jpeg') }}" alt="Serviços" class="w-full h-full object-cover opacity-30 filter grayscale">
            <div class="absolute inset-0 bg-gradient-to-b from-brand-dark/50 via-brand-dark/80 to-brand-dark"></div>
        </div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="flex items-center justify-center gap-4 mb-6 reveal">
                <div class="h-px w-12 bg-brand-gold"></div>
                <p class="text-brand-gold uppercase tracking-[0.3em] text-xs font-semibold">Excelência Projetual</p>
                <div class="h-px w-12 bg-brand-gold"></div>
            </div>
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif font-bold text-white mb-6 reveal delay-100">Nossas <span class="italic text-brand-gold">Especialidades</span></h1>
            <p class="text-lg md:text-xl text-white/90 font-light leading-relaxed max-w-2xl mx-auto reveal delay-200">
                Do conceito à entrega das chaves. Um escopo completo de atuação focado em excelência projetual e execução impecável.
            </p>
        </div>
    </section>

    <!-- Services Detailed -->
    <section class="py-24 bg-theme-secondary transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-32">
            
            <!-- Service 1 -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="reveal order-2 md:order-1">
                    <div class="flex items-center gap-4 mb-6">
                        <span class="text-brand-gold text-6xl font-serif font-light">01</span>
                        <div class="h-px w-16 bg-brand-gold"></div>
                    </div>
                    <h2 class="text-3xl md:text-5xl font-serif text-theme-primary mb-6">Projetos Residenciais</h2>
                    <div class="w-16 h-px bg-brand-gold mb-6"></div>
                    <p class="text-theme-secondary font-light leading-relaxed text-lg mb-6">
                        Criamos residências que são verdadeiros refúgios: espaços que dialogam com a natureza, valorizam a luz e se adaptam profundamente ao estilo de vida dos moradores.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3 text-sm text-theme-secondary uppercase tracking-wide">
                            <i data-lucide="minus" class="text-brand-gold w-4 h-4"></i>
                            Arquitetura Minimalista
                        </li>
                        <li class="flex items-center gap-3 text-sm text-theme-secondary uppercase tracking-wide">
                            <i data-lucide="minus" class="text-brand-gold w-4 h-4"></i>
                            Sustentabilidade
                        </li>
                        <li class="flex items-center gap-3 text-sm text-theme-secondary uppercase tracking-wide">
                            <i data-lucide="minus" class="text-brand-gold w-4 h-4"></i>
                            Integração Paisagística
                        </li>
                    </ul>
                    <div class="mt-8">
                        <a href="{{ route('residential-projects') }}" class="inline-flex items-center gap-2 text-theme-primary uppercase tracking-widest text-sm font-semibold hover:text-brand-gold transition-colors">
                            Saiba Mais <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
                <div class="reveal delay-200 order-1 md:order-2 img-zoom-hover relative">
                    <div class="absolute -inset-4 border-2 border-brand-gold/30 z-0 hidden md:block"></div>
                    <img src="{{ asset('images/projeto-arquitetura-fortaleza.jpeg') }}" alt="Residencial" class="w-full h-[500px] object-cover shadow-2xl filter grayscale contrast-125 relative z-10">
                </div>
            </div>

            <!-- Service 2 -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="reveal img-zoom-hover relative">
                    <div class="absolute -inset-4 border-2 border-brand-gold/30 z-0 hidden md:block"></div>
                    <img src="{{ asset('images/launge-arquiteto-fortaleza.jpeg') }}" alt="Comercial" class="w-full h-[500px] object-cover shadow-2xl filter grayscale contrast-125 relative z-10">
                </div>
                <div class="reveal delay-200">
                    <div class="flex items-center gap-4 mb-6">
                        <span class="text-brand-gold text-6xl font-serif font-light">02</span>
                        <div class="h-px w-16 bg-brand-gold"></div>
                    </div>
                    <h2 class="text-3xl md:text-5xl font-serif text-theme-primary mb-6">Projetos Comerciais</h2>
                    <div class="w-16 h-px bg-brand-gold mb-6"></div>
                    <p class="text-theme-secondary font-light leading-relaxed text-lg mb-6">
                        O design ao serviço dos negócios. Espaços imersivos que comunicam o valor da sua marca aos clientes, otimizando o fluxo de trabalho e o bem-estar da equipe.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3 text-sm text-theme-secondary uppercase tracking-wide">
                            <i data-lucide="minus" class="text-brand-gold w-4 h-4"></i>
                            Lojas Conceito
                        </li>
                        <li class="flex items-center gap-3 text-sm text-theme-secondary uppercase tracking-wide">
                            <i data-lucide="minus" class="text-brand-gold w-4 h-4"></i>
                            Escritórios Corporativos
                        </li>
                        <li class="flex items-center gap-3 text-sm text-theme-secondary uppercase tracking-wide">
                            <i data-lucide="minus" class="text-brand-gold w-4 h-4"></i>
                            Clínicas de Alto Padrão
                        </li>
                    </ul>
                    <div class="mt-8">
                        <a href="{{ route('commercial-projects') }}" class="inline-flex items-center gap-2 text-theme-primary uppercase tracking-widest text-sm font-semibold hover:text-brand-gold transition-colors">
                            Saiba Mais <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="reveal order-2 md:order-1">
                    <div class="flex items-center gap-4 mb-6">
                        <span class="text-brand-gold text-6xl font-serif font-light">03</span>
                        <div class="h-px w-16 bg-brand-gold"></div>
                    </div>
                    <h2 class="text-3xl md:text-5xl font-serif text-theme-primary mb-6">Design de Interiores</h2>
                    <div class="w-16 h-px bg-brand-gold mb-6"></div>
                    <p class="text-theme-secondary font-light leading-relaxed text-lg mb-6">
                        A alma da arquitetura está nos detalhes onde as mãos tocam. Desenvolvemos uma curadoria meticulosa de materiais, luz, mobiliário assinado e obras de arte.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3 text-sm text-theme-secondary uppercase tracking-wide">
                            <i data-lucide="minus" class="text-brand-gold w-4 h-4"></i>
                            Design sob medida
                        </li>
                        <li class="flex items-center gap-3 text-sm text-theme-secondary uppercase tracking-wide">
                            <i data-lucide="minus" class="text-brand-gold w-4 h-4"></i>
                            Luminotécnica
                        </li>
                        <li class="flex items-center gap-3 text-sm text-theme-secondary uppercase tracking-wide">
                            <i data-lucide="minus" class="text-brand-gold w-4 h-4"></i>
                            Materiais Nobres
                        </li>
                    </ul>
                    <div class="mt-8">
                        <a href="{{ route('interior-design') }}" class="inline-flex items-center gap-2 text-theme-primary uppercase tracking-widest text-sm font-semibold hover:text-brand-gold transition-colors">
                            Saiba Mais <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
                <div class="reveal delay-200 order-1 md:order-2 img-zoom-hover relative">
                    <div class="absolute -inset-4 border-2 border-brand-gold/30 z-0 hidden md:block"></div>
                    <img src="{{ asset('images/sala-jantar-arquiteto-ricardo-morais.jpeg') }}" alt="Interiores" class="w-full h-[500px] object-cover shadow-2xl filter grayscale contrast-125 relative z-10">
                </div>
            </div>

            <!-- Service 4 -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="reveal img-zoom-hover relative">
                    <div class="absolute -inset-4 border-2 border-brand-gold/30 z-0 hidden md:block"></div>
                    <img src="{{ asset('images/projeto-arquitetura-fortaleza-design.jpeg') }}" alt="Design 3D" class="w-full h-[500px] object-cover shadow-2xl filter grayscale contrast-125 relative z-10">
                </div>
                <div class="reveal delay-200">
                    <div class="flex items-center gap-4 mb-6">
                        <span class="text-brand-gold text-6xl font-serif font-light">04</span>
                        <div class="h-px w-16 bg-brand-gold"></div>
                    </div>
                    <h2 class="text-3xl md:text-5xl font-serif text-theme-primary mb-6">Design 3D</h2>
                    <div class="w-16 h-px bg-brand-gold mb-6"></div>
                    <p class="text-theme-secondary font-light leading-relaxed text-lg mb-6">
                        Visualizações fotorrealistas e experiências imersivas que trazem seu projeto à vida antes da construção. Explore cada ambiente com detalhes precisos de materiais, iluminação e atmosfera.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3 text-sm text-theme-secondary uppercase tracking-wide">
                            <i data-lucide="minus" class="text-brand-gold w-4 h-4"></i>
                            Renderizações Fotorrealistas
                        </li>
                        <li class="flex items-center gap-3 text-sm text-theme-secondary uppercase tracking-wide">
                            <i data-lucide="minus" class="text-brand-gold w-4 h-4"></i>
                            Passeios Virtuais
                        </li>
                        <li class="flex items-center gap-3 text-sm text-theme-secondary uppercase tracking-wide">
                            <i data-lucide="minus" class="text-brand-gold w-4 h-4"></i>
                            Modelagem BIM
                        </li>
                    </ul>
                    <div class="mt-8">
                        <a href="{{ route('3d-design') }}" class="inline-flex items-center gap-2 text-theme-primary uppercase tracking-widest text-sm font-semibold hover:text-brand-gold transition-colors">
                            Saiba Mais <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-24 bg-theme-primary transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-4 mb-6">
                    <div class="h-px w-8 bg-brand-gold"></div>
                    <p class="text-brand-gold uppercase tracking-[0.2em] text-xs font-semibold">Diferenciais</p>
                    <div class="h-px w-8 bg-brand-gold"></div>
                </div>
                <h2 class="text-3xl md:text-5xl font-serif text-theme-primary mb-6">Por que o nosso estúdio?</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Differential 1 -->
                <div class="reveal delay-100 bg-theme-secondary p-8 border border-theme shadow-sm hover:shadow-xl transition-all duration-500 text-center group">
                    <div class="w-16 h-16 bg-brand-dark text-brand-gold flex items-center justify-center mx-auto mb-6 rounded-sm group-hover:bg-brand-gold group-hover:text-brand-dark transition-colors">
                        <i data-lucide="gem" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-lg font-serif font-bold text-theme-primary mb-2">Exclusividade</h3>
                    <p class="text-theme-secondary text-sm font-light">Cada projeto é desenhado a partir do zero, garantindo que não existam duas obras iguais.</p>
                </div>
                <!-- Differential 2 -->
                <div class="reveal delay-200 bg-theme-secondary p-8 border border-theme shadow-sm hover:shadow-xl transition-all duration-500 text-center group">
                    <div class="w-16 h-16 bg-brand-dark text-brand-gold flex items-center justify-center mx-auto mb-6 rounded-sm group-hover:bg-brand-gold group-hover:text-brand-dark transition-colors">
                        <i data-lucide="clipboard-check" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-lg font-serif font-bold text-theme-primary mb-2">Acompanhamento Total</h3>
                    <p class="text-theme-secondary text-sm font-light">Do anteprojeto à entrega final da obra, nossa equipe gerencia todas as fases, mitigando imprevistos.</p>
                </div>
                <!-- Differential 3 -->
                <div class="reveal delay-300 bg-theme-secondary p-8 border border-theme shadow-sm hover:shadow-xl transition-all duration-500 text-center group">
                    <div class="w-16 h-16 bg-brand-dark text-brand-gold flex items-center justify-center mx-auto mb-6 rounded-sm group-hover:bg-brand-gold group-hover:text-brand-dark transition-colors">
                        <i data-lucide="leaf" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-lg font-serif font-bold text-theme-primary mb-2">Sustentabilidade</h3>
                    <p class="text-theme-secondary text-sm font-light">Iniciativas passivas e ativas de sustentabilidade como selo de responsabilidade inerente em todos os projetos.</p>
                </div>
                <!-- Differential 4 -->
                <div class="reveal delay-100 bg-theme-secondary p-8 border border-theme shadow-sm hover:shadow-xl transition-all duration-500 text-center group">
                    <div class="w-16 h-16 bg-brand-dark text-brand-gold flex items-center justify-center mx-auto mb-6 rounded-sm group-hover:bg-brand-gold group-hover:text-brand-dark transition-colors">
                        <i data-lucide="wallet" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-lg font-serif font-bold text-theme-primary mb-2">Gestão de Custos</h3>
                    <p class="text-theme-secondary text-sm font-light">Planejamento minucioso do orçamento e dos recursos para que o valor planejado seja mantido.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Work Process -->
    <section class="py-24 bg-theme-secondary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center bg-theme-secondary p-12 md:p-16 border border-theme shadow-xl reveal">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="h-px w-8 bg-brand-gold"></div>
                        <p class="text-brand-gold uppercase tracking-[0.2em] text-xs font-semibold">Processo</p>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-serif text-theme-primary mb-4">Metodologia Personalizada</h2>
                    <p class="text-theme-secondary font-light leading-relaxed">Nossa abordagem adapta-se ao escopo, mantendo a excelência do começo ao fim. Independentemente de ser um estúdio, uma casa de campo, ou um grande edifício corporativo, a essência do design minucioso permanece.</p>
                </div>
                <div class="md:w-1/3">
                    <ul class="space-y-4 font-light text-theme-secondary">
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 bg-brand-gold"></span>
                            Briefing e Imersão
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 bg-brand-gold"></span>
                            Estudo Preliminar
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 bg-brand-gold"></span>
                            Anteprojeto e Aprovações
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 bg-brand-gold"></span>
                            Projeto Executivo
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 bg-brand-gold"></span>
                            Acompanhamento de Obra
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to action -->
    <section class="py-32 bg-brand-dark relative overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('images/arquitetura-ricardo-morais.jpeg') }}" alt="Background" class="w-full h-full object-cover">
        </div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <i data-lucide="compass" class="w-16 h-16 text-brand-gold mx-auto mb-8"></i>
            <h2 class="text-4xl md:text-5xl font-serif text-white mb-6">Traga sua visão à <span class="italic text-brand-gold">vida.</span></h2>
            <p class="text-xl text-white/90 font-light mb-12 max-w-2xl mx-auto">
                Vamos conversar sobre o seu espaço. Nossa equipe está pronta para realizar um diagnóstico e estruturar o projeto dos seus sonhos.
            </p>
            <a href="{{ route('contact') }}" class="inline-block bg-brand-gold hover:bg-white text-brand-dark uppercase tracking-widest text-sm font-bold px-10 py-5 transition-all shadow-lg hover:shadow-xl">
                Iniciar um Projeto
            </a>
        </div>
    </section>

</x-app-layout>
