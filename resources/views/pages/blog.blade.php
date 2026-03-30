<x-app-layout>
    
    <!-- Hero Section -->
    <section class="relative py-32 md:py-40 bg-brand-dark overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/arquitetura-fortaleza-ricardo-morais.jpeg') }}" alt="Blog" class="w-full h-full object-cover opacity-20 filter grayscale">
            <div class="absolute inset-0 bg-gradient-to-b from-brand-dark/50 via-brand-dark/80 to-brand-dark"></div>
        </div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 pt-10">
            <div class="flex items-center justify-center gap-4 mb-6 reveal">
                <div class="h-px w-12 bg-brand-gold"></div>
                <p class="text-brand-gold uppercase tracking-[0.3em] text-xs font-semibold">Reflexões & Inspirações</p>
                <div class="h-px w-12 bg-brand-gold"></div>
            </div>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-serif font-bold text-white mb-6 reveal delay-100">Jornal</h1>
            <p class="text-lg md:text-xl text-white/90 font-light leading-relaxed max-w-2xl mx-auto reveal delay-200">
                Reflexões sobre design, sustentabilidade, inspirações e acompanhamento de nossas obras mais recentes.
            </p>
        </div>
    </section>

    <!-- Blog Grid -->
    <section class="py-24 bg-brand-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
                <!-- Main Content (Posts) -->
                <div class="lg:col-span-3">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        @forelse($posts as $post)
                            <article class="reveal bg-white group relative hover:shadow-2xl transition-all duration-500 border border-gray-100 flex flex-col h-full overflow-hidden">
                                <a href="{{ route('blog.post', $post->slug) }}" class="absolute inset-0 z-10"></a>
                                
                                <div class="mb-0 overflow-hidden img-zoom-hover">
                                    @if($post->featured_image)
                                        <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-56 object-cover filter grayscale group-hover:grayscale-0 transition duration-700">
                                    @else
                                        <div class="w-full h-56 bg-brand-light flex items-center justify-center">
                                            <span class="text-brand-gray font-serif font-light italic">Sem Imagem</span>
                                        </div>
                                    @endif
                                </div>

                                <div class="p-8 flex flex-col flex-grow">
                                    <div class="text-xs uppercase tracking-widest text-brand-gold mb-3 block font-semibold">
                                        {{ $post->published_at->format('M d, Y') }}
                                    </div>
                                    
                                    <h2 class="text-2xl font-serif font-bold text-brand-dark group-hover:text-brand-gold transition mb-4">
                                        {{ $post->title }}
                                    </h2>
                                    
                                    <p class="text-brand-gray font-light text-sm line-clamp-3 mb-6 flex-grow leading-relaxed">
                                        {{ $post->excerpt ?? Str::limit(strip_tags($post->content), 120) }}
                                    </p>
                                    
                                    <div class="mt-auto flex items-center text-xs font-bold uppercase tracking-widest text-brand-dark group-hover:text-brand-gold transition">
                                        Ler Artigo
                                        <i data-lucide="arrow-right" class="w-4 h-4 ml-2 transform group-hover:translate-x-2 transition-transform"></i>
                                    </div>
                                </div>
                            </article>
                        @empty
                            <div class="col-span-full py-24 text-center">
                                <i data-lucide="file-text" class="w-16 h-16 text-brand-gold mx-auto mb-6"></i>
                                <p class="text-2xl font-serif text-brand-gray">Nenhum artigo publicado ainda.</p>
                            </div>
                        @endforelse
                    </div>

                    <!-- Pagination -->
                    @if($posts->hasPages())
                        <div class="mt-20 flex justify-center border-t border-gray-200 pt-10">
                            {{ $posts->links() }}
                        </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <aside class="lg:col-span-1">
                    <div class="sticky top-32 space-y-12">
                        <!-- About the Journal -->
                        <div class="reveal bg-white p-8 border border-gray-100 shadow-sm">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="h-px w-6 bg-brand-gold"></div>
                                <h3 class="text-sm font-bold uppercase tracking-widest text-brand-dark">Sobre o Jornal</h3>
                            </div>
                            <p class="text-brand-gray font-light text-sm leading-relaxed">
                                Um espaço dedicado a ensaios, referências estéticas e reflexões sobre como a arquitetura molda nossa vida cotidiana, curado pela nossa equipe.
                            </p>
                        </div>
                        
                        <!-- Categorias Placeholder -->
                        <div class="reveal delay-100 bg-white p-8 border border-gray-100 shadow-sm">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="h-px w-6 bg-brand-gold"></div>
                                <h3 class="text-sm font-bold uppercase tracking-widest text-brand-dark">Tópicos</h3>
                            </div>
                            <ul class="space-y-4">
                                <li><a href="#" class="text-brand-gray hover:text-brand-gold text-sm font-light transition flex items-center gap-2"><i data-lucide="chevron-right" class="w-3 h-3"></i> Design Minimalista</a></li>
                                <li><a href="#" class="text-brand-gray hover:text-brand-gold text-sm font-light transition flex items-center gap-2"><i data-lucide="chevron-right" class="w-3 h-3"></i> Sustentabilidade em Foco</a></li>
                                <li><a href="#" class="text-brand-gray hover:text-brand-gold text-sm font-light transition flex items-center gap-2"><i data-lucide="chevron-right" class="w-3 h-3"></i> Acompanhamento de Obras</a></li>
                                <li><a href="#" class="text-brand-gray hover:text-brand-gold text-sm font-light transition flex items-center gap-2"><i data-lucide="chevron-right" class="w-3 h-3"></i> Entrevistas e Análises</a></li>
                                <li><a href="#" class="text-brand-gray hover:text-brand-gold text-sm font-light transition flex items-center gap-2"><i data-lucide="chevron-right" class="w-3 h-3"></i> Inspirações</a></li>
                            </ul>
                        </div>

                        <!-- Posts Recentes -->
                        <div class="reveal delay-200 bg-white p-8 border border-gray-100 shadow-sm">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="h-px w-6 bg-brand-gold"></div>
                                <h3 class="text-sm font-bold uppercase tracking-widest text-brand-dark">Artigos Recentes</h3>
                            </div>
                            <div class="space-y-6">
                                @foreach($posts->take(3) as $recentPost)
                                    <div class="group relative">
                                        <a href="{{ route('blog.post', $recentPost->slug) }}" class="absolute inset-0 z-10"></a>
                                        <div class="text-xs uppercase tracking-widest text-brand-gold mb-1 font-semibold">{{ $recentPost->published_at->format('M d, Y') }}</div>
                                        <div class="block text-brand-dark font-serif font-bold text-sm group-hover:text-brand-gold transition leading-tight">{{ $recentPost->title }}</div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        
                        <!-- Newsletter -->
                        <div class="reveal delay-300 bg-brand-gold p-8">
                            <div class="flex items-center gap-3 mb-4">
                                <i data-lucide="mail" class="w-5 h-5 text-brand-dark"></i>
                                <h3 class="text-sm font-bold uppercase tracking-widest text-brand-dark">Newsletter</h3>
                            </div>
                            <p class="text-brand-dark/70 font-light text-xs mb-4">Receba ensaios exclusivos diretamente na sua caixa de entrada.</p>
                            <form action="#" method="POST" class="space-y-3">
                                @csrf
                                <input type="email" placeholder="Seu e-mail" class="w-full border-0 border-b border-brand-dark/30 bg-transparent text-sm focus:ring-0 focus:border-brand-dark py-2 text-brand-dark placeholder-brand-dark/50 outline-none" required>
                                <button type="submit" class="w-full bg-brand-dark hover:bg-white text-brand-gold hover:text-brand-dark text-xs uppercase tracking-widest font-bold py-3 transition shadow-sm">Assinar</button>
                            </form>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

</x-app-layout>
