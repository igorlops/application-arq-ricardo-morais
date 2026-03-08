<x-admin-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4 w-full">
            <a href="{{ route('admin.posts.index') }}" class="text-gray-400 hover:text-gray-900 transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            </a>
            <span>Novo Post</span>
        </div>
    </x-slot>

    <div class="bg-white rounded-xl border border-gray-200 overflow-hidden shadow-sm max-w-4xl mx-auto">
        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data" class="p-8 space-y-6">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="md:col-span-2 space-y-6">
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Título do Post</label>
                        <input type="text" name="title" id="title" value="{{ old('title') }}" required class="mt-1 block w-full border-gray-300 focus:border-gray-900 focus:ring-gray-900 shadow-sm rounded-lg py-2 px-3 outline-none text-gray-900 bg-gray-50">
                        @error('title') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="excerpt" class="block text-sm font-medium text-gray-700">Resumo (Opcional)</label>
                        <textarea name="excerpt" id="excerpt" rows="3" class="mt-1 block w-full border-gray-300 focus:border-gray-900 focus:ring-gray-900 shadow-sm rounded-lg py-2 px-3 outline-none text-gray-900 bg-gray-50">{{ old('excerpt') }}</textarea>
                        @error('excerpt') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700">Conteúdo Completo</label>
                        <textarea name="content" id="content" rows="10" required class="mt-1 block w-full border-gray-300 focus:border-gray-900 focus:ring-gray-900 shadow-sm rounded-lg py-2 px-3 outline-none text-gray-900 bg-gray-50 font-mono text-sm">{{ old('content') }}</textarea>
                        @error('content') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-100">
                        <h4 class="text-sm font-medium text-gray-900 mb-4">Publicação</h4>
                        <div class="flex items-center">
                            <input id="status" name="status" type="checkbox" value="1" {{ old('status') ? 'checked' : '' }} class="h-4 w-4 text-gray-900 focus:ring-gray-900 border-gray-300 rounded">
                            <label for="status" class="ml-2 block text-sm text-gray-700">
                                Publicar Imediatamente
                            </label>
                        </div>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-100">
                        <h4 class="text-sm font-medium text-gray-900 mb-4">Imagem de Destaque</h4>
                        <input type="file" name="featured_image" accept="image/*" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-medium file:bg-gray-200 file:text-gray-700 hover:file:bg-gray-300 transition cursor-pointer">
                        @error('featured_image') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>

            <div class="pt-6 border-t border-gray-200 flex justify-end space-x-3">
                <a href="{{ route('admin.posts.index') }}" class="py-2 px-4 shadow-sm text-sm font-medium rounded-lg text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 transition">
                    Cancelar
                </a>
                <button type="submit" class="py-2 px-4 shadow-sm text-sm font-medium rounded-lg text-white bg-gray-900 hover:bg-gray-800 transition">
                    Salvar Post
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>
