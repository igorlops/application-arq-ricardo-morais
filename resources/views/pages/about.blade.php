<x-app-layout>
    
    <!-- Hero Section -->
    <section class="relative py-32 md:py-48 bg-brand-dark overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/garagem-arquitetura.jpeg') }}" alt="Ricardo Morais" class="w-full h-full object-cover opacity-30 filter grayscale">
            <div class="absolute inset-0 bg-gradient-to-b from-brand-dark/50 via-brand-dark/80 to-brand-dark"></div>
        </div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="flex items-center justify-center gap-4 mb-6 reveal">
                <div class="h-px w-12 bg-brand-gold"></div>
                <p class="text-brand-gold uppercase tracking-[0.3em] text-xs font-semibold">A Essência do Morar Bem</p>
                <div class="h-px w-12 bg-brand-gold"></div>
            </div>
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif font-bold text-white mb-6 reveal delay-100">A Essência do <span class="italic text-brand-gold">Morar Bem</span></h1>
            <p class="text-lg md:text-xl text-white/90 font-light leading-relaxed max-w-2xl mx-auto reveal delay-200">
                Nossa história, nossa visão e nossa paixão por transformar matérias-primas em experiências únicas de espaço e luz.
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-24 bg-theme-secondary transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                
                <!-- Image -->
                <div class="reveal lg:sticky lg:top-32">
                    <div class="relative">
                        <div class="absolute -inset-4 border-2 border-brand-gold/30 z-0 hidden md:block"></div>
                        <img src="{{ asset('images/perfil.jpg') }}" alt="Ricardo Morais" class="w-full h-auto shadow-2xl filter grayscale contrast-125 relative z-10">
                    </div>
                    <span class="block text-right mt-4 text-xs text-theme-secondary uppercase tracking-widest">O Arquiteto</span>
                </div>

                <!-- Text content -->
                <div class="reveal delay-200">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="h-px w-8 bg-brand-gold"></div>
                        <p class="text-brand-gold uppercase tracking-[0.2em] text-xs font-semibold">O Fundador</p>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-serif text-theme-primary mb-6">O Arquiteto Ricardo Morais</h2>
                    <div class="w-16 h-px bg-brand-gold mb-8"></div>
                    
                    <div class="space-y-6 text-theme-secondary font-light text-lg leading-relaxed">
                        <p>
                            A arquitetura vai além do papel e concreto. Para Ricardo Morais, é a materialização de identidades. Com mais de 15 anos de atuação, sua assinatura reside na criação de espaços que equilibram funcionalidade impecável com minimalismo acolhedor.
                        </p>
                        <p>
                            Formado pelas melhores instituições e com passagens por estúdios de renome internacional na Europa e no Japão, Ricardo trouxe de suas vivências uma filosofia onde o menos é sempre mais, desde que meticulosamente desenhado.
                        </p>
                    </div>
                    
                    <div class="mt-12 pt-12 border-t border-gray-100">
                        <h3 class="text-2xl font-serif text-theme-primary mb-6">Nossa Filosofia de Trabalho</h3>
                        <p class="text-theme-secondary font-light leading-relaxed mb-6">
                            Acreditamos firmemente que o bom design é invisível; ele serve às pessoas silenciosamente, elevando seu cotidiano. Nossos projetos são caracterizados pelo uso honesto dos materiais — madeira, pedra, concreto afago — e pela manipulação cuidadosa da luz natural.
                        </p>
                        
                        <ul class="space-y-4 mt-8">
                            <li class="flex items-start gap-4">
                                <i data-lucide="check" class="text-brand-gold w-5 h-5 shrink-0 mt-1"></i>
                                <span class="text-theme-secondary font-light">Atenção rigorosa aos detalhes construtivos.</span>
                            </li>
                            <li class="flex items-start gap-4">
                                <i data-lucide="check" class="text-brand-gold w-5 h-5 shrink-0 mt-1"></i>
                                <span class="text-theme-secondary font-light">Sustentabilidade integrada desde o primeiro esboço.</span>
                            </li>
                            <li class="flex items-start gap-4">
                                <i data-lucide="check" class="text-brand-gold w-5 h-5 shrink-0 mt-1"></i>
                                <span class="text-theme-secondary font-light">Diálogo constante e colaborativo com o cliente.</span>
                            </li>
                            <li class="flex items-start gap-4">
                                <i data-lucide="check" class="text-brand-gold w-5 h-5 shrink-0 mt-1"></i>
                                <span class="text-theme-secondary font-light">Busca pela atemporalidade ao invés de tendências passageiras.</span>
                            </li>
                        </ul>
                    </div>

                    <blockquote class="mt-12 bg-theme-secondary p-8 border-l-4 border-brand-gold">
                        <p class="text-xl text-theme-primary font-serif italic leading-relaxed">
                            "Arquitetura não é sobre preencher o espaço, mas sobre entendê-lo e, com muito cuidado, moldar a luz ao redor do que importa: a vida humana."
                        </p>
                        <p class="text-xs uppercase tracking-widest text-theme-secondary text-right mt-4 font-semibold">— Ricardo Morais</p>
                    </blockquote>
                </div>

            </div>
        </div>
    </section>

    <!-- Our Values -->
    <section class="py-24 bg-theme-primary transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-4 mb-6">
                    <div class="h-px w-8 bg-brand-gold"></div>
                    <p class="text-brand-gold uppercase tracking-[0.2em] text-xs font-semibold">Princípios</p>
                    <div class="h-px w-8 bg-brand-gold"></div>
                </div>
                <h2 class="text-3xl md:text-5xl font-serif text-theme-primary mb-6">Nossos Valores Fundamentais</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="reveal delay-100 p-10 bg-theme-secondary border border-theme hover:shadow-2xl transition-all duration-500 group">
                    <div class="w-14 h-14 bg-brand-dark text-brand-gold flex items-center justify-center mb-8 rounded-sm">
                        <i data-lucide="minimize-2" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-serif font-semibold mb-4 text-theme-primary">Essência Minimalista</h3>
                    <p class="text-theme-secondary font-light leading-relaxed">Acreditamos que o design mais poderoso é aquele que remove o desnecessário para revelar o que é verdadeiramente essencial e belo.</p>
                </div>
                <div class="reveal delay-200 p-10 bg-brand-gold text-theme-primary hover:shadow-2xl hover:shadow-brand-gold/20 transition-all duration-500 group">
                    <div class="w-14 h-14 bg-brand-dark text-brand-gold flex items-center justify-center mb-8 rounded-sm">
                        <i data-lucide="leaf" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-serif font-semibold mb-4">Sustentabilidade Integrada</h3>
                    <p class="text-theme-primary/70 font-light leading-relaxed">Nossa responsabilidade primária é com o futuro. Projetamos com consciência ambiental, materiais duráveis e eficiência energética.</p>
                </div>
                <div class="reveal delay-300 p-10 bg-theme-secondary border border-theme hover:shadow-2xl transition-all duration-500 group">
                    <div class="w-14 h-14 bg-brand-dark text-brand-gold flex items-center justify-center mb-8 rounded-sm">
                        <i data-lucide="ruler" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-serif font-semibold mb-4 text-theme-primary">Precisão Técnica</h3>
                    <p class="text-theme-secondary font-light leading-relaxed">A excelência estética só é sustentada por uma base técnica impecável. Detalhes milimétricos são a nossa assinatura de qualidade.</p>
                </div>
            </div>
        </div>
    </section>

   

    <!-- Call to Action -->
    <section class="py-32 bg-brand-dark relative overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('images/arquitetura-ricardo-morais.jpeg') }}" alt="Background" class="w-full h-full object-cover">
        </div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <i data-lucide="users" class="w-16 h-16 text-brand-gold mx-auto mb-8"></i>
            <h2 class="text-4xl md:text-5xl font-serif text-white mb-6">Faça parte da nossa <span class="italic text-brand-gold">história.</span></h2>
            <p class="text-xl text-white/90 font-light mb-12 max-w-2xl mx-auto">
                Cada projeto é uma nova história de sucesso. Vamos escrever a sua juntos.
            </p>
            <a href="{{ route('contact') }}" class="inline-block bg-brand-gold hover:bg-white text-theme-primary uppercase tracking-widest text-sm font-bold px-10 py-5 transition-all shadow-lg hover:shadow-xl">
                Iniciar um Projeto
            </a>
        </div>
    </section>

</x-app-layout>
