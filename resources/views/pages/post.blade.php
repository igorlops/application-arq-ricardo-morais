<x-app-layout>
    
    <!-- Hero Section -->
    <section class="relative py-24 md:py-32 bg-brand-dark overflow-hidden">
        <div class="absolute inset-0 z-0">
            @if($post->featured_image)
                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover opacity-30 filter grayscale">
            @else
                <img src="{{ asset('images/arquitetura-fortaleza-ricardo-morais.jpeg') }}" alt="Blog" class="w-full h-full object-cover opacity-20 filter grayscale">
            @endif
            <div class="absolute inset-0 bg-gradient-to-b from-brand-dark/50 via-brand-dark/80 to-brand-dark"></div>
        </div>
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 pt-20">
            <div class="reveal">
                <span class="text-sm font-bold uppercase tracking-[0.3em] text-brand-gold block mb-6">
                    {{ $post->published_at->format('F d, Y') }}
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-serif font-bold text-white leading-tight mb-8">
                    {{ $post->title }}
                </h1>
                @if($post->excerpt)
                    <p class="text-xl md:text-2xl text-white/90 font-light font-serif max-w-3xl mx-auto">
                        {{ $post->excerpt }}
                    </p>
                @endif
            </div>
        </div>
    </section>

    <!-- Featured Image -->
    @if($post->featured_image)
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 relative z-20 reveal">
            <div class="relative">
                <div class="absolute -inset-4 border-2 border-brand-gold/30 z-0 hidden md:block"></div>
                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-auto shadow-2xl relative z-10">
            </div>
        </div>
    @endif

    <!-- Content -->
    <article class="py-24 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 reveal delay-100">
            <div class="prose prose-lg prose-headings:font-serif prose-headings:font-bold prose-headings:text-brand-dark prose-p:font-light prose-p:text-brand-gray prose-p:leading-relaxed prose-a:text-brand-gold prose-a:no-underline hover:prose-a:underline prose-img:border prose-img:border-gray-100 prose-blockquote:border-l-4 prose-blockquote:border-brand-gold prose-blockquote:bg-brand-light prose-blockquote:py-2 prose-blockquote:px-6 prose-blockquote:not-italic prose-strong:text-brand-dark">
                {!! nl2br(e($post->content)) !!}
            </div>

            <!-- Share/Tags Section -->
            <div class="mt-16 pt-10 border-t border-gray-100">
                <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                    <div class="flex items-center gap-4">
                        <span class="text-xs uppercase tracking-widest text-brand-gray font-semibold">Compartilhar:</span>
                        <div class="flex gap-3">
                            <a href="#" class="w-10 h-10 bg-brand-light flex items-center justify-center text-brand-dark hover:bg-brand-gold hover:text-brand-dark transition-colors">
                                <i data-lucide="facebook" class="w-4 h-4"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-brand-light flex items-center justify-center text-brand-dark hover:bg-brand-gold hover:text-brand-dark transition-colors">
                                <i data-lucide="twitter" class="w-4 h-4"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-brand-light flex items-center justify-center text-brand-dark hover:bg-brand-gold hover:text-brand-dark transition-colors">
                                <i data-lucide="linkedin" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </div>
                    <a href="{{ route('blog') }}" class="inline-flex items-center text-sm font-bold uppercase tracking-widest text-brand-dark hover:text-brand-gold transition border-b-2 border-brand-gold pb-1">
                        <i data-lucide="arrow-left" class="w-4 h-4 mr-2"></i>
                        Voltar para o Jornal
                    </a>
                </div>
            </div>
        </div>
    </article>

    <!-- Related Posts Section -->
    <section class="py-24 bg-brand-light border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-4 mb-6">
                    <div class="h-px w-8 bg-brand-gold"></div>
                    <p class="text-brand-gold uppercase tracking-[0.2em] text-xs font-semibold">Continue Lendo</p>
                    <div class="h-px w-8 bg-brand-gold"></div>
                </div>
                <h2 class="text-3xl font-serif text-brand-dark">Mais Artigos</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach(\App\Models\Post::where('id', '!=', $post->id)->where('is_published', true)->latest()->take(3)->get() as $relatedPost)
                    <article class="reveal bg-white group relative hover:shadow-xl transition-all duration-500 border border-gray-100 overflow-hidden">
                        <a href="{{ route('blog.post', $relatedPost->slug) }}" class="absolute inset-0 z-10"></a>
                        
                        <div class="overflow-hidden img-zoom-hover">
                            @if($relatedPost->featured_image)
                                <img src="{{ asset('storage/' . $relatedPost->featured_image) }}" alt="{{ $relatedPost->title }}" class="w-full h-48 object-cover filter grayscale group-hover:grayscale-0 transition duration-700">
                            @else
                                <div class="w-full h-48 bg-brand-light flex items-center justify-center">
                                    <span class="text-brand-gray font-serif italic text-sm">Sem Imagem</span>
                                </div>
                            @endif
                        </div>

                        <div class="p-6">
                            <div class="text-xs uppercase tracking-widest text-brand-gold mb-2 block font-semibold">
                                {{ $relatedPost->published_at->format('M d, Y') }}
                            </div>
                            <h3 class="text-lg font-serif font-bold text-brand-dark group-hover:text-brand-gold transition leading-tight">
                                {{ $relatedPost->title }}
                            </h3>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Newsletter CTA -->
    <section class="py-24 bg-brand-dark relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <img src="{{ asset('images/arquitetura-ricardo-morais.jpeg') }}" alt="Background" class="w-full h-full object-cover">
        </div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <i data-lucide="mail" class="w-12 h-12 text-brand-gold mx-auto mb-6"></i>
            <h2 class="text-3xl md:text-4xl font-serif text-white mb-4">Receba Nossas Atualizações</h2>
            <p class="text-white/80 font-light mb-8 max-w-xl mx-auto">
                Inscreva-se para receber os últimos artigos, inspirações e novidades do mundo da arquitetura.
            </p>
            <form class="max-w-md mx-auto flex flex-col sm:flex-row gap-4">
                <input type="email" placeholder="Seu e-mail" class="flex-1 bg-white/10 border border-white/20 text-white px-6 py-3 outline-none focus:border-brand-gold transition-colors placeholder-white/40">
                <button type="submit" class="bg-brand-gold hover:bg-white text-brand-dark uppercase tracking-widest text-xs font-bold px-8 py-3 transition-all">
                    Assinar
                </button>
            </form>
        </div>
    </section>

</x-app-layout>
