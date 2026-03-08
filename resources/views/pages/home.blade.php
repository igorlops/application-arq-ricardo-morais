<x-app-layout>
    
    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center overflow-hidden bg-gray-900">
        <div class="absolute inset-0 z-0">
            <!-- Using a sophisticated placeholder hero image from unsplash -->
            <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80" alt="Arquitetura Moderna" class="w-full h-full object-cover opacity-50 filter grayscale transition duration-1000 hover:grayscale-0">
        </div>
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto mt-16">
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white font-bold tracking-tight mb-6 animate-fade-in-up">
                Projetando o Futuro <br/><span class="font-normal italic">com Essência</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-300 font-light mb-10 max-w-2xl mx-auto">
                Arquitetura atemporal que eleva a experiência humana através do design meticuloso e inovação sustentável.
            </p>
            <a href="{{ route('services') }}" class="inline-block border text-sm tracking-widest uppercase font-medium border-white text-white hover:bg-white hover:text-gray-900 transition-colors duration-300 py-4 px-10">
                Conheça nossos Serviços
            </a>
        </div>
    </section>

    <!-- Brief About Snippet -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-6">Filosofia de Design</h2>
                    <div class="w-12 h-0.5 bg-gray-900 mb-6"></div>
                    <p class="text-gray-600 font-light leading-relaxed mb-6 text-lg">
                        Cada projeto é uma narrativa única. Acreditamos que a arquitetura não é apenas sobre construir espaços, mas sobre materializar sonhos e propósitos em formas tangíveis.
                    </p>
                    <p class="text-gray-600 font-light leading-relaxed mb-8">
                        Liderado por Ricardo Morais, nosso estúdio foca em soluções minimalistas, elegância duradoura e integração harmoniosa com o ambiente.
                    </p>
                    <a href="{{ route('about') }}" class="text-sm font-semibold text-gray-900 uppercase tracking-widest hover:text-gray-600 transition flex items-center">
                        Ler Mais Sobre Nós
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Interior Design" class="w-full h-auto shadow-2xl">
                    <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-gray-100 -z-10"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Services -->
    <section class="py-24 bg-gray-50 border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="text-xs uppercase tracking-widest text-gray-500 font-bold mb-2 block">Especialidades</span>
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-16">Áreas de Atuação</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
                <!-- Service 1 -->
                <div class="bg-white p-10 border border-gray-100 shadow-sm hover:shadow-xl transition-shadow duration-300">
                    <div class="w-12 h-12 bg-gray-900 text-white flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </div>
                    <h3 class="text-xl font-serif font-bold text-gray-900 mb-3">Projetos Residenciais</h3>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Desenvolvemos residências de alto padrão que refletem o estilo de vida contemporâneo com máximo conforto.</p>
                </div>
                
                <!-- Service 2 -->
                <div class="bg-white p-10 border border-gray-100 shadow-sm hover:shadow-xl transition-shadow duration-300">
                    <div class="w-12 h-12 bg-gray-900 text-white flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="text-xl font-serif font-bold text-gray-900 mb-3">Projetos Comerciais</h3>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Espaços corporativos e comerciais otimizados para fluxo e imagem de marca, unindo estética e funcionalidade.</p>
                </div>

                <!-- Service 3 -->
                <div class="bg-white p-10 border border-gray-100 shadow-sm hover:shadow-xl transition-shadow duration-300">
                    <div class="w-12 h-12 bg-gray-900 text-white flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path></svg>
                    </div>
                    <h3 class="text-xl font-serif font-bold text-gray-900 mb-3">Design de Interiores</h3>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Curadoria de mobiliário, iluminação e texturas para criar ambientes memoráveis e sofisticados.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest from Blog -->
    @if($latestPosts->count() > 0)
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12 border-b border-gray-200 pb-4">
                <div>
                    <span class="text-xs uppercase tracking-widest text-gray-500 font-bold block mb-1">Jornal</span>
                    <h2 class="text-3xl font-serif font-bold text-gray-900">Últimos Artigos</h2>
                </div>
                <a href="{{ route('blog') }}" class="text-sm font-semibold text-gray-900 uppercase tracking-widest hover:text-gray-600 transition">Ver Todos</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($latestPosts as $post)
                    <article class="group">
                        <div class="max-w-full overflow-hidden mb-4">
                            @if($post->featured_image)
                                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-64 object-cover filter grayscale group-hover:grayscale-0 transition duration-700 transform group-hover:scale-105">
                            @else
                                <div class="w-full h-64 bg-gray-100 flex items-center justify-center">
                                    <span class="text-gray-400 font-serif">Sem imagem</span>
                                </div>
                            @endif
                        </div>
                        <span class="text-xs text-gray-500 uppercase tracking-widest">{{ $post->published_at->format('M d, Y') }}</span>
                        <h3 class="mt-2 text-xl font-serif font-bold text-gray-900 group-hover:text-blue-600 transition">
                            <a href="{{ route('blog.post', $post->slug) }}">{{ $post->title }}</a>
                        </h3>
                        <p class="mt-3 text-gray-600 text-sm font-light line-clamp-2">
                            {{ $post->excerpt ?? Str::limit(strip_tags($post->content), 100) }}
                        </p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Portfolio Highlights -->
    <section class="py-24 bg-gray-900 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div class="max-w-2xl">
                    <span class="text-xs uppercase tracking-widest text-gray-400 font-bold mb-2 block">Nosso Trabalho</span>
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-white mb-6">Projetos em Destaque</h2>
                    <p class="text-gray-400 font-light leading-relaxed">
                        Explorando fronteiras entre estética e funcionalidade. Cada projeto é uma prova do nosso compromisso com a excelência criativa e inovação estrutural.
                    </p>
                </div>
                <a href="#" class="text-sm font-semibold text-white uppercase tracking-widest hover:text-gray-300 transition flex items-center whitespace-nowrap">
                    Ver Portfólio Completo
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Project 1 -->
                <div class="group cursor-pointer">
                    <div class="overflow-hidden relative mb-6">
                        <img src="https://images.unsplash.com/photo-1628012198051-50e8d02fa7fb?auto=format&fit=crop&w=800&q=80" alt="Residência Aurora" class="w-full h-96 md:h-[30rem] object-cover transition duration-1000 group-hover:scale-105 filter grayscale group-hover:grayscale-0">
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                    <span class="text-xs uppercase tracking-widest text-gray-400">Residencial / 2024</span>
                    <h3 class="text-2xl font-serif text-white mt-2 group-hover:text-gray-300 transition">Residência Aurora</h3>
                </div>
                
                <!-- Project 2 -->
                <div class="group cursor-pointer md:mt-24">
                    <div class="overflow-hidden relative mb-6">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=800&q=80" alt="Edifício Horizon" class="w-full h-96 md:h-[30rem] object-cover transition duration-1000 group-hover:scale-105 filter grayscale group-hover:grayscale-0">
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                    <span class="text-xs uppercase tracking-widest text-gray-400">Comercial / 2025</span>
                    <h3 class="text-2xl font-serif text-white mt-2 group-hover:text-gray-300 transition">Sede Corporativa Horizon</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Process -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <span class="text-xs uppercase tracking-widest text-gray-500 font-bold mb-2 block">Metodologia</span>
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-6">Como Transformamos Espaços</h2>
                <p class="text-gray-600 font-light text-lg">
                    Nosso processo de design é colaborativo, transparente e fundamentado na empatia pelas necessidades de quem habitará o espaço.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative">
                <!-- Connection Line -->
                <div class="hidden md:block absolute top-1/2 left-0 w-full h-px bg-gray-200 -z-10 transform -translate-y-1/2"></div>
                
                <!-- Step 1 -->
                <div class="bg-white p-6 md:p-8 text-center border md:border-none border-gray-100">
                    <div class="w-16 h-16 bg-gray-900 text-white rounded-full flex items-center justify-center mx-auto mb-6 text-xl font-serif z-10 relative">01</div>
                    <h3 class="text-xl font-bold font-serif text-gray-900 mb-3">Descoberta</h3>
                    <p class="text-gray-500 font-light text-sm">Compreensão profunda do terreno, do cliente e dos objetivos estruturais do projeto.</p>
                </div>
                <!-- Step 2 -->
                <div class="bg-white p-6 md:p-8 text-center border md:border-none border-gray-100">
                    <div class="w-16 h-16 bg-gray-100 text-gray-900 rounded-full flex items-center justify-center mx-auto mb-6 text-xl font-serif z-10 relative border border-gray-200">02</div>
                    <h3 class="text-xl font-bold font-serif text-gray-900 mb-3">Conceito</h3>
                    <p class="text-gray-500 font-light text-sm">Estudos volumétricos e propostas de layout, definindo a alma e identidade visual do espaço.</p>
                </div>
                <!-- Step 3 -->
                <div class="bg-white p-6 md:p-8 text-center border md:border-none border-gray-100">
                    <div class="w-16 h-16 bg-gray-100 text-gray-900 rounded-full flex items-center justify-center mx-auto mb-6 text-xl font-serif z-10 relative border border-gray-200">03</div>
                    <h3 class="text-xl font-bold font-serif text-gray-900 mb-3">Desenvolvimento</h3>
                    <p class="text-gray-500 font-light text-sm">Detalhamento técnico minucioso e escolhas precisas de materiais para execução perfeita.</p>
                </div>
                <!-- Step 4 -->
                <div class="bg-white p-6 md:p-8 text-center border md:border-none border-gray-100">
                    <div class="w-16 h-16 bg-gray-100 text-gray-900 rounded-full flex items-center justify-center mx-auto mb-6 text-xl font-serif z-10 relative border border-gray-200">04</div>
                    <h3 class="text-xl font-bold font-serif text-gray-900 mb-3">Execução</h3>
                    <p class="text-gray-500 font-light text-sm">Acompanhamento e suporte minucioso, assegurando a fidelidade de cada traço projetado.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-xs uppercase tracking-widest text-gray-500 font-bold block mb-2">Depoimentos</span>
                <h2 class="text-3xl font-serif font-bold text-gray-900">O que dizem os clientes</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Item 1 -->
                <div class="bg-white p-10 shadow-sm border border-gray-100">
                    <div class="flex items-center mb-6 text-gray-300">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 32 32"><path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"></path></svg>
                    </div>
                    <p class="text-gray-600 font-light italic mb-8">"O projeto da nossa casa superou qualquer expectativa que tínhamos. A atenção aos detalhes do Ricardo e sua equipe trouxeram uma sofisticação sem igual ao nosso lar. Cada ambiente conta uma história."</p>
                    <div class="flex items-center">
                        <div>
                            <h4 class="text-gray-900 font-bold text-sm">Mariana Costa</h4>
                            <span class="text-gray-500 text-xs">Proprietária, Residência Aurora</span>
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="bg-white p-10 shadow-sm border border-gray-100">
                    <div class="flex items-center mb-6 text-gray-300">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 32 32"><path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"></path></svg>
                    </div>
                    <p class="text-gray-600 font-light italic mb-8">"A reformulação do nosso escritório transformou completamente a dinâmica de trabalho. O espaço agora é inspirador, fluido e muito mais produtivo, traduzindo exatamente a imagem de nossa marca."</p>
                    <div class="flex items-center">
                        <div>
                            <h4 class="text-gray-900 font-bold text-sm">Carlos Drummond</h4>
                            <span class="text-gray-500 text-xs">CEO, TechNova</span>
                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="bg-white p-10 shadow-sm border border-gray-100">
                    <div class="flex items-center mb-6 text-gray-300">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 32 32"><path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"></path></svg>
                    </div>
                    <p class="text-gray-600 font-light italic mb-8">"Procurávamos um estúdio que entendesse o conceito do minimalismo autêntico. O resultado foi uma obra de arte habitável, onde fomos respeitados em cada desejo. Recomendo de olhos fechados."</p>
                    <div class="flex items-center">
                        <div>
                            <h4 class="text-gray-900 font-bold text-sm">Fernanda Silva</h4>
                            <span class="text-gray-500 text-xs">Proprietária, Apartamento Jardins</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
