<x-app-layout>
    
    <article class="pt-32 pb-24 bg-white">
        <!-- Header -->
        <header class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center mb-16 border-b border-gray-100 pb-16">
            <span class="text-sm font-bold uppercase tracking-widest text-gray-400 block mb-6">
                {{ $post->published_at->format('F d, Y') }}
            </span>
            <h1 class="text-4xl md:text-5xl lg:text-7xl font-serif font-bold text-gray-900 leading-tight mb-8">
                {{ $post->title }}
            </h1>
            @if($post->excerpt)
                <p class="text-xl md:text-2xl text-gray-500 font-light font-serif">
                    {{ $post->excerpt }}
                </p>
            @endif
        </header>

        <!-- Featured Image -->
        @if($post->featured_image)
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-20">
                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-auto shadow-2xl">
            </div>
        @endif

        <!-- Content -->
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 prose prose-lg prose-headings:font-serif prose-headings:font-bold prose-p:font-light prose-p:text-gray-700 prose-p:leading-relaxed prose-a:text-gray-900 prose-img:border prose-img:border-gray-100">
            {!! nl2br(e($post->content)) !!}
        </div>

        <!-- Footer / Back -->
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 mt-24 pt-10 border-t border-gray-200 text-center">
            <a href="{{ route('blog') }}" class="inline-flex items-center text-sm font-bold uppercase tracking-widest text-gray-900 hover:text-gray-500 transition">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Voltar para o Jornal
            </a>
        </div>
    </article>

</x-app-layout>
