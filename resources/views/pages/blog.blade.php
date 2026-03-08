<x-app-layout>
    
    <!-- Header -->
    <section class="py-20 md:py-32 bg-white border-b border-gray-100">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center pt-10">
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-serif font-bold text-gray-900 mb-6">Jornal</h1>
            <p class="text-lg md:text-xl text-gray-500 font-light leading-relaxed">
                Reflexões sobre design, sustentabilidade, inspirações e acompanhamento de nossas obras mais recentes.
            </p>
        </div>
    </section>

    <!-- Blog Grid -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
                <!-- Main Content (Posts) -->
                <div class="lg:col-span-3">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        @forelse($posts as $post)
                            <article class="group relative bg-white p-6 shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-100 flex flex-col h-full">
                                <a href="{{ route('blog.post', $post->slug) }}" class="absolute inset-0 z-10"></a>
                                
                                <div class="mb-6 overflow-hidden">
                                    @if($post->featured_image)
                                        <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-56 object-cover filter grayscale group-hover:grayscale-0 transition duration-700 transform group-hover:scale-110">
                                    @else
                                        <div class="w-full h-56 bg-gray-100 flex items-center justify-center">
                                            <span class="text-gray-400 font-serif font-light italic">Sem Imagem</span>
                                        </div>
                                    @endif
                                </div>

                                <div class="text-xs uppercase tracking-widest text-gray-400 mb-3 block">
                                    {{ $post->published_at->format('M d, Y') }}
                                </div>
                                
                                <h2 class="text-2xl font-serif font-bold text-gray-900 group-hover:text-gray-600 transition mb-4">
                                    {{ $post->title }}
                                </h2>
                                
                                <p class="text-gray-600 font-light text-sm line-clamp-3 mb-6 flex-grow">
                                    {{ $post->excerpt ?? Str::limit(strip_tags($post->content), 120) }}
                                </p>
                                
                                <div class="mt-auto flex items-center text-xs font-bold uppercase tracking-widest text-gray-900 group-hover:text-blue-600 transition">
                                    Ler Artigo
                                    <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </div>
                            </article>
                        @empty
                            <div class="col-span-full py-24 text-center">
                                <p class="text-2xl font-serif text-gray-400">Nenhum artigo publicado ainda.</p>
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
                <aside class="lg:col-span-1 border-t lg:border-t-0 lg:border-l border-gray-200 pt-12 lg:pt-0 lg:pl-12">
                    <div class="sticky top-24 space-y-12">
                        <!-- About the Journal -->
                        <div>
                            <h3 class="text-sm font-bold uppercase tracking-widest text-gray-900 mb-6">Sobre o Jornal</h3>
                            <p class="text-gray-500 font-light text-sm leading-relaxed">
                                Um espaço dedicado a ensaios, referências estéticas e reflexões sobre como a arquitetura molda nossa vida cotidiana, curado pela nossa equipe.
                            </p>
                        </div>
                        
                        <!-- Categorias Placeholder -->
                        <div>
                            <h3 class="text-sm font-bold uppercase tracking-widest text-gray-900 mb-6">Tópicos</h3>
                            <ul class="space-y-4">
                                <li><a href="#" class="text-gray-500 hover:text-gray-900 text-sm font-light transition">Design Minimalista</a></li>
                                <li><a href="#" class="text-gray-500 hover:text-gray-900 text-sm font-light transition">Sustentabilidade em Foco</a></li>
                                <li><a href="#" class="text-gray-500 hover:text-gray-900 text-sm font-light transition">Acompanhamento de Obras</a></li>
                                <li><a href="#" class="text-gray-500 hover:text-gray-900 text-sm font-light transition">Entrevistas e Análises</a></li>
                                <li><a href="#" class="text-gray-500 hover:text-gray-900 text-sm font-light transition">Inspirações</a></li>
                            </ul>
                        </div>

                        <!-- Posts Recentes -->
                        <div>
                            <h3 class="text-sm font-bold uppercase tracking-widest text-gray-900 mb-6">Artigos Recentes</h3>
                            <div class="space-y-6">
                                @foreach($posts->take(3) as $recentPost)
                                    <div class="group relative">
                                        <a href="{{ route('blog.post', $recentPost->slug) }}" class="absolute inset-0 z-10"></a>
                                        <div class="text-xs uppercase tracking-widest text-gray-400 mb-1">{{ $recentPost->published_at->format('M d, Y') }}</div>
                                        <div class="block text-gray-900 font-serif font-bold text-sm group-hover:text-gray-600 transition">{{ $recentPost->title }}</div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        
                        <!-- Newsletter -->
                        <div class="bg-gray-50 p-6 border border-gray-100">
                            <h3 class="text-sm font-bold uppercase tracking-widest text-gray-900 mb-3">Newsletter</h3>
                            <p class="text-gray-500 font-light text-xs mb-4">Receba ensaios exclusivos diretamente na sua caixa de entrada.</p>
                            <form action="#" method="POST" class="space-y-3">
                                @csrf
                                <input type="email" placeholder="Seu e-mail" class="w-full border-gray-300 bg-white text-sm focus:ring-0 focus:border-gray-900 p-3" required>
                                <button type="submit" class="w-full bg-gray-900 text-white text-xs uppercase tracking-widest font-bold py-3 hover:bg-gray-800 transition shadow-sm">Assinar</button>
                            </form>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

</x-app-layout>
