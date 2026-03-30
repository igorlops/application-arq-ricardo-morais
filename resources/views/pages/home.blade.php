<x-app-layout>
    
    <!-- Hero Section -->
    <section class="relative h-screen flex flex-col items-center justify-center overflow-hidden bg-gray-900">
        <div class="absolute inset-0 z-0">
            <!-- Using a sophisticated placeholder hero image from unsplash -->
            <img src="{{ asset('images/garagem-reformas-fortaleza.jpeg') }}" alt="Arquitetura Moderna" class="w-full h-full object-cover opacity-50 filter grayscale transition duration-1000 hover:grayscale-0">
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10">
            <div class="max-w-3xl reveal">
                <div class="flex items-center gap-4 mb-6">
                    <div class="h-px w-12 bg-brand-gold"></div>
                    <p class="text-brand-gold uppercase tracking-[0.3em] text-xs font-semibold">Arquitetura de Alto Padrão</p>
                </div>
                <h1 class="text-5xl md:text-7xl font-serif text-white leading-[1.1] mb-6">
                    Projetando o Futuro <br><span class="italic font-light text-brand-gold">com Essência</span>
                </h1>
                <p class="text-lg md:text-xl text-white mb-10 font-light max-w-2xl leading-relaxed">
                    Arquitetura atemporal que eleva a experiência humana através do design meticuloso e inovação sustentável.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('services') }}" class="bg-brand-gold hover:bg-brand-gold-hover text-brand-dark uppercase tracking-[0.15em] text-xs font-bold px-8 py-4 text-center transition-all flex items-center justify-center gap-2">
                        Conheça nossos Serviços
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                    <a href="{{ route('contact') }}" class="border border-white/30 hover:border-brand-gold text-white uppercase tracking-[0.15em] text-xs font-bold px-8 py-4 text-center transition-all flex items-center justify-center gap-2 hover:text-brand-gold">
                        Fale Conosco
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Brief About Snippet -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center ">
                <div class="reveal delay-200 relative img-zoom-hover">
                    <div class="absolute -inset-4 border-2 border-brand-gold/30 z-0 hidden md:block"></div>
                    <img src="{{ asset('images/projeto-arquitetura-ricardo-morais.jpeg') }}" alt="Interior Design" class="relative z-10 w-full h-auto shadow-2xl">
                </div>
                <div class="reveal">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="h-px w-8 bg-brand-gold"></div>
                        <p class="text-brand-gold uppercase tracking-[0.2em] text-xs font-semibold">Sobre o Estúdio</p>
                    </div>
                    <h2 class="text-3xl md:text-5xl font-serif text-brand-dark mb-6 leading-tight">Filosofia de Design</h2>
                    <div class="w-16 h-px bg-brand-gold mb-6"></div>
                    <p class="text-brand-gray font-light leading-relaxed mb-6 text-lg">
                        Cada projeto é uma narrativa única. Acreditamos que a arquitetura não é apenas sobre construir espaços, mas sobre materializar sonhos e propósitos em formas tangíveis.
                    </p>
                    <p class="text-brand-gray font-light leading-relaxed mb-8">
                        Liderado por Ricardo Morais, nosso estúdio foca em soluções minimalistas, elegância duradoura e integração harmoniosa com o ambiente.
                    </p>
                    <a href="{{ route('about') }}" class="inline-flex items-center gap-2 border-b-2 border-brand-gold text-brand-dark uppercase tracking-widest text-sm font-semibold pb-1 hover:text-brand-gold transition-colors">
                        Ler Mais Sobre Nós
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Featured Services -->
    <section class="py-24 bg-brand-light border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-4 mb-6">
                    <div class="h-px w-8 bg-brand-gold"></div>
                    <p class="text-brand-gold uppercase tracking-[0.2em] text-xs font-semibold">Especialidades</p>
                    <div class="h-px w-8 bg-brand-gold"></div>
                </div>
                <h2 class="text-3xl md:text-5xl font-serif text-brand-dark mb-6">Áreas de Atuação</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
                <!-- Service 1 -->
                <div class="reveal delay-100 bg-white p-10 border border-gray-100 hover:shadow-2xl transition-all duration-500 group relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-brand-gold transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
                    <div class="w-14 h-14 bg-brand-dark text-brand-gold flex items-center justify-center mb-8 rounded-sm">
                        <i data-lucide="home" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-serif font-semibold mb-4 text-brand-dark">Projetos Residenciais</h3>
                    <p class="text-brand-gray font-light leading-relaxed mb-8">Desenvolvemos residências de alto padrão que refletem o estilo de vida contemporâneo com máximo conforto.</p>
                    <a href="{{ route('residential-projects') }}" class="inline-flex items-center gap-2 text-brand-dark uppercase tracking-widest text-xs font-semibold hover:text-brand-gold transition-colors">
                        Saiba Mais <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
                
                <!-- Service 2 -->
                <div class="reveal delay-200 bg-brand-dark text-white p-10 hover:shadow-2xl hover:shadow-brand-dark/20 transition-all duration-500 group relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-brand-gold transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
                    <div class="w-14 h-14 bg-brand-gold text-brand-dark flex items-center justify-center mb-8 rounded-sm">
                        <i data-lucide="building-2" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-serif font-semibold mb-4">Projetos Comerciais</h3>
                    <p class="text-white/70 font-light leading-relaxed mb-8">Espaços corporativos e comerciais otimizados para fluxo e imagem de marca, unindo estética e funcionalidade.</p>
                    <a href="{{ route('commercial-projects') }}" class="inline-flex items-center gap-2 text-brand-gold uppercase tracking-widest text-xs font-semibold hover:text-white transition-colors">
                        Saiba Mais <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>

                <!-- Service 3 -->
                <div class="reveal delay-300 bg-white p-10 border border-gray-100 hover:shadow-2xl transition-all duration-500 group relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-brand-gold transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
                    <div class="w-14 h-14 bg-brand-dark text-brand-gold flex items-center justify-center mb-8 rounded-sm">
                        <i data-lucide="sparkles" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-serif font-semibold mb-4 text-brand-dark">Design de Interiores</h3>
                    <p class="text-brand-gray font-light leading-relaxed mb-8">Curadoria de mobiliário, iluminação e texturas para criar ambientes memoráveis e sofisticados.</p>
                    <a href="{{ route('interior-design') }}" class="inline-flex items-center gap-2 text-brand-dark uppercase tracking-widest text-xs font-semibold hover:text-brand-gold transition-colors">
                        Saiba Mais <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
                
                <!-- Service 4 -->
                <div class="reveal delay-100 bg-white p-10 border border-gray-100 hover:shadow-2xl transition-all duration-500 group relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-brand-gold transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
                    <div class="w-14 h-14 bg-brand-dark text-brand-gold flex items-center justify-center mb-8 rounded-sm">
                        <i data-lucide="box" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-serif font-semibold mb-4 text-brand-dark">Design 3D</h3>
                    <p class="text-brand-gray font-light leading-relaxed mb-8">Visualizações imersivas e renderizações que trazem seu projeto à realidade antes da construção.</p>
                    <a href="{{ route('3d-design') }}" class="inline-flex items-center gap-2 text-brand-dark uppercase tracking-widest text-xs font-semibold hover:text-brand-gold transition-colors">
                        Saiba Mais <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest from Blog -->
    @if($latestPosts->count() > 0)
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 reveal">
                <div>
                    <div class="flex items-center gap-4 mb-4">
                        <div class="h-px w-8 bg-brand-gold"></div>
                        <p class="text-brand-gold uppercase tracking-[0.2em] text-xs font-semibold">Jornal</p>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-serif text-brand-dark">Últimos Artigos</h2>
                </div>
                <a href="{{ route('blog') }}" class="mt-6 md:mt-0 inline-flex items-center gap-2 border-b-2 border-brand-gold text-brand-dark uppercase tracking-widest text-sm font-semibold pb-1 hover:text-brand-gold transition-colors">
                    Ver Todos <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($latestPosts as $index => $post)
                    <article class="reveal delay-{{ ($index + 1) * 100 }} group">
                        <div class="max-w-full overflow-hidden mb-6 img-zoom-hover">
                            @if($post->featured_image)
                                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-64 object-cover filter grayscale group-hover:grayscale-0 transition duration-700">
                            @else
                                <div class="w-full h-64 bg-brand-light flex items-center justify-center">
                                    <span class="text-brand-gray font-serif italic">Sem imagem</span>
                                </div>
                            @endif
                        </div>
                        <span class="text-xs text-brand-gray uppercase tracking-widest">{{ $post->published_at->format('M d, Y') }}</span>
                        <h3 class="mt-2 text-xl font-serif font-bold text-brand-dark group-hover:text-brand-gold transition">
                            <a href="{{ route('blog.post', $post->slug) }}">{{ $post->title }}</a>
                        </h3>
                        <p class="mt-3 text-brand-gray text-sm font-light line-clamp-2">
                            {{ $post->excerpt ?? Str::limit(strip_tags($post->content), 100) }}
                        </p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Portfolio Highlights -->
    <section class="py-24 bg-brand-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6 reveal">
                <div class="max-w-2xl">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="h-px w-8 bg-brand-gold"></div>
                        <p class="text-brand-gold uppercase tracking-[0.2em] text-xs font-semibold">Nosso Trabalho</p>
                    </div>
                    <h2 class="text-3xl md:text-5xl font-serif text-white mb-6">Projetos em Destaque</h2>
                    <p class="text-white/80 font-light leading-relaxed">
                        Explorando fronteiras entre estética e funcionalidade. Cada projeto é uma prova do nosso compromisso com a excelência criativa e inovação estrutural.
                    </p>
                </div>
                <a href="#" class="inline-flex items-center gap-2 border border-white/30 hover:border-brand-gold text-white uppercase tracking-widest text-xs font-semibold px-6 py-3 transition-all hover:text-brand-gold">
                    Ver Portfólio Completo <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Project 1 -->
                <div class="reveal delay-100 group cursor-pointer relative overflow-hidden">
                    <div class="overflow-hidden mb-0">
                        <img src="{{ asset('images/projeto-arquitetura-fortaleza.jpeg') }}" alt="Residência Aurora" class="w-full h-96 md:h-[30rem] object-cover transition duration-1000 group-hover:scale-110 filter grayscale group-hover:grayscale-0">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-dark via-transparent to-transparent opacity-80"></div>
                    <div class="absolute bottom-0 left-0 p-8 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <span class="text-brand-gold text-xs uppercase tracking-widest">Residencial / 2024</span>
                        <h3 class="text-2xl font-serif text-white mt-2">Residência Aurora</h3>
                        <p class="text-white/70 font-light mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">Uma obra-prima de minimalismo e elegância.</p>
                    </div>
                </div>
                
                <!-- Project 2 -->
                <div class="reveal delay-200 group cursor-pointer relative overflow-hidden md:mt-24">
                    <div class="overflow-hidden mb-0">
                        <img src="{{ asset('images/launge-arquiteto-fortaleza.jpeg') }}" alt="Edifício Horizon" class="w-full h-96 md:h-[30rem] object-cover transition duration-1000 group-hover:scale-110 filter grayscale group-hover:grayscale-0">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-dark via-transparent to-transparent opacity-80"></div>
                    <div class="absolute bottom-0 left-0 p-8 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <span class="text-brand-gold text-xs uppercase tracking-widest">Comercial / 2025</span>
                        <h3 class="text-2xl font-serif text-white mt-2">Sede Corporativa Horizon</h3>
                        <p class="text-white/70 font-light mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">Espaço corporativo que inspira inovação.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Process -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <div class="flex items-center justify-center gap-4 mb-6">
                    <div class="h-px w-8 bg-brand-gold"></div>
                    <p class="text-brand-gold uppercase tracking-[0.2em] text-xs font-semibold">Metodologia</p>
                    <div class="h-px w-8 bg-brand-gold"></div>
                </div>
                <h2 class="text-3xl md:text-5xl font-serif text-brand-dark mb-6">Como Transformamos Espaços</h2>
                <p class="text-brand-gray font-light text-lg">
                    Nosso processo de design é colaborativo, transparente e fundamentado na empatia pelas necessidades de quem habitará o espaço.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative">
                <!-- Connection Line -->
                <div class="hidden md:block absolute top-12 left-0 w-full h-px bg-brand-gold/30 -z-10"></div>
                
                <!-- Step 1 -->
                <div class="reveal delay-100 text-center">
                    <div class="w-24 h-24 bg-brand-dark text-brand-gold flex items-center justify-center mx-auto mb-6 text-2xl font-serif z-10 relative border-4 border-white shadow-xl">01</div>
                    <h3 class="text-xl font-bold font-serif text-brand-dark mb-3">Descoberta</h3>
                    <p class="text-brand-gray font-light text-sm">Compreensão profunda do terreno, do cliente e dos objetivos estruturais do projeto.</p>
                </div>
                <!-- Step 2 -->
                <div class="reveal delay-200 text-center">
                    <div class="w-24 h-24 bg-white text-brand-dark border-2 border-brand-gold flex items-center justify-center mx-auto mb-6 text-2xl font-serif z-10 relative shadow-xl">02</div>
                    <h3 class="text-xl font-bold font-serif text-brand-dark mb-3">Conceito</h3>
                    <p class="text-brand-gray font-light text-sm">Estudos volumétricos e propostas de layout, definindo a alma e identidade visual do espaço.</p>
                </div>
                <!-- Step 3 -->
                <div class="reveal delay-300 text-center">
                    <div class="w-24 h-24 bg-white text-brand-dark border-2 border-brand-gold flex items-center justify-center mx-auto mb-6 text-2xl font-serif z-10 relative shadow-xl">03</div>
                    <h3 class="text-xl font-bold font-serif text-brand-dark mb-3">Desenvolvimento</h3>
                    <p class="text-brand-gray font-light text-sm">Detalhamento técnico minucioso e escolhas precisas de materiais para execução perfeita.</p>
                </div>
                <!-- Step 4 -->
                <div class="reveal delay-100 text-center">
                    <div class="w-24 h-24 bg-white text-brand-dark border-2 border-brand-gold flex items-center justify-center mx-auto mb-6 text-2xl font-serif z-10 relative shadow-xl">04</div>
                    <h3 class="text-xl font-bold font-serif text-brand-dark mb-3">Execução</h3>
                    <p class="text-brand-gray font-light text-sm">Acompanhamento e suporte minucioso, assegurando a fidelidade de cada traço projetado.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-32 bg-brand-dark relative overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('images/garagem-arquiteto-fortaleza.jpeg') }}" alt="Background" class="w-full h-full object-cover">
        </div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <i data-lucide="compass" class="w-16 h-16 text-brand-gold mx-auto mb-8"></i>
            <h2 class="text-4xl md:text-6xl font-serif text-white mb-6">Traga sua visão à <span class="italic text-brand-gold">vida.</span></h2>
            <p class="text-xl text-white/90 font-light mb-12 max-w-2xl mx-auto">
                Vamos conversar sobre o seu espaço. Nossa equipe está pronta para realizar um diagnóstico e estruturar o projeto dos seus sonhos.
            </p>
            <a href="{{ route('contact') }}" class="inline-block bg-brand-gold hover:bg-white text-brand-dark uppercase tracking-widest text-sm font-bold px-10 py-5 transition-all shadow-lg hover:shadow-xl">
                Iniciar um Projeto
            </a>
        </div>
    </section>

</x-app-layout>
