<x-app-layout>
    
    <!-- Hero Section -->
    <section class="relative py-32 md:py-48 bg-brand-dark overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Design de Interiores" class="w-full h-full object-cover opacity-30 filter grayscale">
            <div class="absolute inset-0 bg-gradient-to-b from-brand-dark/50 via-brand-dark/80 to-brand-dark"></div>
        </div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="flex items-center justify-center gap-4 mb-6 reveal">
                <div class="h-px w-12 bg-brand-gold"></div>
                <p class="text-brand-gold uppercase tracking-[0.3em] text-xs font-semibold">Alma dos Espaços</p>
                <div class="h-px w-12 bg-brand-gold"></div>
            </div>
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif font-bold text-white mb-6 reveal delay-100">Design de <span class="italic text-brand-gold">Interiores</span></h1>
            <p class="text-lg md:text-xl text-white/90 font-light leading-relaxed max-w-2xl mx-auto reveal delay-200">
                A alma da arquitetura está nos detalhes onde as mãos tocam. Desenvolvemos uma curadoria meticulosa de materiais, luz, mobiliário assinado e obras de arte.
            </p>
        </div>
    </section>

    <!-- Project Features -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center mb-32">
                <div class="reveal">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="h-px w-16 bg-brand-gold"></div>
                        <p class="text-brand-gold uppercase tracking-[0.2em] text-xs font-semibold">Nossa Abordagem</p>
                    </div>
                    <h2 class="text-3xl md:text-5xl font-serif text-brand-dark mb-6">Curadoria de Experiências</h2>
                    <div class="w-16 h-px bg-brand-gold mb-6"></div>
                    <p class="text-brand-gray font-light leading-relaxed text-lg mb-6">
                        Cada elemento interior é selecionado com propósito. Da textura do tecido à temperatura da luz, criamos atmosferas que despertam emoções e contam histórias.
                    </p>
                    <p class="text-brand-gray font-light leading-relaxed text-lg">
                        Nosso processo integra funcionalidade e estética, garantindo que cada espaço seja belo e profundamente habitável.
                    </p>
                </div>
                <div class="reveal delay-200 img-zoom-hover relative">
                    <div class="absolute -inset-4 border-2 border-brand-gold/30 z-0 hidden md:block"></div>
                    <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Interior Sofisticado" class="w-full h-[500px] object-cover shadow-2xl filter grayscale contrast-125 relative z-10">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="reveal order-2 md:order-1">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="h-px w-16 bg-brand-gold"></div>
                        <p class="text-brand-gold uppercase tracking-[0.2em] text-xs font-semibold">Serviços</p>
                    </div>
                    <h2 class="text-3xl md:text-5xl font-serif text-brand-dark mb-6">O que Oferecemos</h2>
                    <div class="w-16 h-px bg-brand-gold mb-6"></div>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3 text-brand-gray uppercase tracking-wide">
                            <i data-lucide="check" class="text-brand-gold w-5 h-5"></i>
                            Design sob Medida
                        </li>
                        <li class="flex items-center gap-3 text-brand-gray uppercase tracking-wide">
                            <i data-lucide="check" class="text-brand-gold w-5 h-5"></i>
                            Luminotécnica
                        </li>
                        <li class="flex items-center gap-3 text-brand-gray uppercase tracking-wide">
                            <i data-lucide="check" class="text-brand-gold w-5 h-5"></i>
                            Materiais Nobres
                        </li>
                        <li class="flex items-center gap-3 text-brand-gray uppercase tracking-wide">
                            <i data-lucide="check" class="text-brand-gold w-5 h-5"></i>
                            Mobiliário Personalizado
                        </li>
                        <li class="flex items-center gap-3 text-brand-gray uppercase tracking-wide">
                            <i data-lucide="check" class="text-brand-gold w-5 h-5"></i>
                            Curadoria de Arte
                        </li>
                    </ul>
                </div>
                <div class="reveal delay-200 order-1 md:order-2 img-zoom-hover relative">
                    <div class="absolute -inset-4 border-2 border-brand-gold/30 z-0 hidden md:block"></div>
                    <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Detalhes Interiores" class="w-full h-[500px] object-cover shadow-2xl filter grayscale contrast-125 relative z-10">
                </div>
            </div>
        </div>
    </section>

    <!-- Process -->
    <section class="py-24 bg-brand-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-4 mb-6">
                    <div class="h-px w-8 bg-brand-gold"></div>
                    <p class="text-brand-gold uppercase tracking-[0.2em] text-xs font-semibold">Metodologia</p>
                    <div class="h-px w-8 bg-brand-gold"></div>
                </div>
                <h2 class="text-3xl md:text-5xl font-serif text-brand-dark mb-6">Como Trabalhamos</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="reveal delay-100 bg-white p-10 border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-500 text-center group">
                    <div class="w-16 h-16 bg-brand-dark text-brand-gold flex items-center justify-center mx-auto mb-6 rounded-sm group-hover:bg-brand-gold group-hover:text-brand-dark transition-colors">
                        <i data-lucide="palette" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-lg font-serif font-bold text-brand-dark mb-2">Conceito & Paleta</h3>
                    <p class="text-brand-gray text-sm font-light">Definição de atmosferas, paletas de cores e materiais que refletem sua personalidade.</p>
                </div>
                <div class="reveal delay-200 bg-white p-10 border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-500 text-center group">
                    <div class="w-16 h-16 bg-brand-dark text-brand-gold flex items-center justify-center mx-auto mb-6 rounded-sm group-hover:bg-brand-gold group-hover:text-brand-dark transition-colors">
                        <i data-lucide="layout" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-lg font-serif font-bold text-brand-dark mb-2">Layout & Fluxo</h3>
                    <p class="text-brand-gray text-sm font-light">Organização espacial inteligente que otimiza circulação e funcionalidade.</p>
                </div>
                <div class="reveal delay-300 bg-white p-10 border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-500 text-center group">
                    <div class="w-16 h-16 bg-brand-dark text-brand-gold flex items-center justify-center mx-auto mb-6 rounded-sm group-hover:bg-brand-gold group-hover:text-brand-dark transition-colors">
                        <i data-lucide="lamp" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-lg font-serif font-bold text-brand-dark mb-2">Detalhamento</h3>
                    <p class="text-brand-gray text-sm font-light">Seleção de mobiliário, iluminação, tecidos e acabamentos finais.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-32 bg-brand-dark relative overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Background" class="w-full h-full object-cover">
        </div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <i data-lucide="sparkles" class="w-16 h-16 text-brand-gold mx-auto mb-8"></i>
            <h2 class="text-4xl md:text-5xl font-serif text-white mb-6">Transforme seu <span class="italic text-brand-gold">ambiente</span></h2>
            <p class="text-xl text-white/90 font-light mb-12 max-w-2xl mx-auto">
                Vamos criar juntos um interior que conta sua história. Entre em contato para uma consultoria personalizada.
            </p>
            <a href="{{ route('contact') }}" class="inline-block bg-brand-gold hover:bg-white text-brand-dark uppercase tracking-widest text-sm font-bold px-10 py-5 transition-all shadow-lg hover:shadow-xl">
                Solicitar Consultoria
            </a>
        </div>
    </section>

</x-app-layout>
