<x-app-layout :seoMeta="$seoMeta">
    
    <!-- Hero Section -->
    <section class="relative py-32 md:py-48 bg-brand-dark overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/projeto-arquitetura-fortaleza-design.jpeg') }}" alt="Design 3D" class="w-full h-full object-cover opacity-30 filter grayscale">
            <div class="absolute inset-0 bg-gradient-to-b from-brand-dark/50 via-brand-dark/80 to-brand-dark"></div>
        </div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="flex items-center justify-center gap-4 mb-6 reveal">
                <div class="h-px w-12 bg-brand-gold"></div>
                <p class="text-brand-gold uppercase tracking-[0.3em] text-xs font-semibold">Visualização Imersiva</p>
                <div class="h-px w-12 bg-brand-gold"></div>
            </div>
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif font-bold text-white mb-6 reveal delay-100">Design <span class="italic text-brand-gold">3D</span></h1>
            <p class="text-lg md:text-xl text-white/90 font-light leading-relaxed max-w-2xl mx-auto reveal delay-200">
                Visualizações fotorrealistas e experiências imersivas que trazem seu projeto à vida antes da construção. Explore cada ambiente com detalhes precisos de materiais, iluminação e atmosfera.
            </p>
        </div>
    </section>

    <!-- Project Features -->
    <section class="py-24 bg-theme-secondary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center mb-32">
                <div class="reveal">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="h-px w-16 bg-brand-gold"></div>
                        <p class="text-brand-gold uppercase tracking-[0.2em] text-xs font-semibold">Nossa Abordagem</p>
                    </div>
                    <h2 class="text-3xl md:text-5xl font-serif text-theme-primary mb-6">Realidade Virtual</h2>
                    <div class="w-16 h-px bg-brand-gold mb-6"></div>
                    <p class="text-theme-secondary font-light leading-relaxed text-lg mb-6">
                        A tecnologia 3D permite que você experimente seu projeto antes de construí-lo. Passeie pelos ambientes, sinta a escala dos espaços e tome decisões com confiança.
                    </p>
                    <p class="text-theme-secondary font-light leading-relaxed text-lg">
                        Nossas renderizações capturam cada detalhe: a textura dos materiais, a qualidade da luz natural em diferentes horários, e a atmosfera que cada ambiente transmite.
                    </p>
                </div>
                <div class="reveal delay-200 img-zoom-hover relative">
                    <div class="absolute -inset-4 border-2 border-brand-gold/30 z-0 hidden md:block"></div>
                    <img src="{{ asset('images/arquitetura-fortaleza-ricardo-morais.jpeg') }}" alt="Renderização 3D" class="w-full h-[500px] object-cover shadow-2xl filter grayscale contrast-125 relative z-10">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="reveal order-2 md:order-1">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="h-px w-16 bg-brand-gold"></div>
                        <p class="text-brand-gold uppercase tracking-[0.2em] text-xs font-semibold">Serviços</p>
                    </div>
                    <h2 class="text-3xl md:text-5xl font-serif text-theme-primary mb-6">O que Oferecemos</h2>
                    <div class="w-16 h-px bg-brand-gold mb-6"></div>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3 text-theme-secondary uppercase tracking-wide">
                            <i data-lucide="check" class="text-brand-gold w-5 h-5"></i>
                            Renderizações Fotorrealistas
                        </li>
                        <li class="flex items-center gap-3 text-theme-secondary uppercase tracking-wide">
                            <i data-lucide="check" class="text-brand-gold w-5 h-5"></i>
                            Passeios Virtuais 360°
                        </li>
                        <li class="flex items-center gap-3 text-theme-secondary uppercase tracking-wide">
                            <i data-lucide="check" class="text-brand-gold w-5 h-5"></i>
                            Modelagem BIM
                        </li>
                        <li class="flex items-center gap-3 text-theme-secondary uppercase tracking-wide">
                            <i data-lucide="check" class="text-brand-gold w-5 h-5"></i>
                            Tours Interativos
                        </li>
                        <li class="flex items-center gap-3 text-theme-secondary uppercase tracking-wide">
                            <i data-lucide="check" class="text-brand-gold w-5 h-5"></i>
                            Animações Cinematográficas
                        </li>
                    </ul>
                </div>
                <div class="reveal delay-200 order-1 md:order-2 img-zoom-hover relative">
                    <div class="absolute -inset-4 border-2 border-brand-gold/30 z-0 hidden md:block"></div>
                    <img src="{{ asset('images/projeto-arquitetura-ricardo-morais.jpeg') }}" alt="Visualização Arquitetônica" class="w-full h-[500px] object-cover shadow-2xl filter grayscale contrast-125 relative z-10">
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits -->
    <section class="py-24 bg-theme-primary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-4 mb-6">
                    <div class="h-px w-8 bg-brand-gold"></div>
                    <p class="text-brand-gold uppercase tracking-[0.2em] text-xs font-semibold">Benefícios</p>
                    <div class="h-px w-8 bg-brand-gold"></div>
                </div>
                <h2 class="text-3xl md:text-5xl font-serif text-theme-primary mb-6">Por que Visualizar em 3D</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="reveal delay-100 bg-theme-secondary p-10 border border-theme shadow-sm hover:shadow-xl transition-all duration-500 text-center group">
                    <div class="w-16 h-16 bg-theme-primary text-brand-gold flex items-center justify-center mx-auto mb-6 rounded-sm group-hover:bg-brand-gold group-hover:text-theme-primary transition-colors">
                        <i data-lucide="eye" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-lg font-serif font-bold text-theme-primary mb-2">Decisão Consciente</h3>
                    <p class="text-theme-secondary text-sm font-light">Visualize materiais, cores e proporções antes de investir na construção.</p>
                </div>
                <div class="reveal delay-200 bg-theme-secondary p-10 border border-theme shadow-sm hover:shadow-xl transition-all duration-500 text-center group">
                    <div class="w-16 h-16 bg-theme-primary text-brand-gold flex items-center justify-center mx-auto mb-6 rounded-sm group-hover:bg-brand-gold group-hover:text-theme-primary transition-colors">
                        <i data-lucide="puzzle" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-lg font-serif font-bold text-theme-primary mb-2">Economia de Recursos</h3>
                    <p class="text-theme-secondary text-sm font-light">Identifique ajustes necessários antes da execução, evitando custos desnecessários.</p>
                </div>
                <div class="reveal delay-300 bg-theme-secondary p-10 border border-theme shadow-sm hover:shadow-xl transition-all duration-500 text-center group">
                    <div class="w-16 h-16 bg-theme-primary text-brand-gold flex items-center justify-center mx-auto mb-6 rounded-sm group-hover:bg-brand-gold group-hover:text-theme-primary transition-colors">
                        <i data-lucide="monitor" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-lg font-serif font-bold text-theme-primary mb-2">Apresentação Profissional</h3>
                    <p class="text-theme-secondary text-sm font-light">Comunique suas ideias com clareza e impacto para clientes e parceiros.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-32 bg-brand-dark relative overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('images/projeto-arquitetura-fortaleza-design.jpeg') }}" alt="Background" class="w-full h-full object-cover">
        </div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <i data-lucide="box" class="w-16 h-16 text-brand-gold mx-auto mb-8"></i>
            <h2 class="text-4xl md:text-5xl font-serif text-white mb-6">Visualize seu <span class="italic text-brand-gold">projeto</span></h2>
            <p class="text-xl text-white/90 font-light mb-12 max-w-2xl mx-auto">
                Transforme suas ideias em visualizações impressionantes. Entre em contato para uma demonstração.
            </p>
            <a href="{{ route('contact') }}" class="inline-block bg-brand-gold hover:bg-theme-secondary text-theme-primary uppercase tracking-widest text-sm font-bold px-10 py-5 transition-all shadow-lg hover:shadow-xl">
                Solicitar Demonstração
            </a>
        </div>
    </section>

</x-app-layout>
