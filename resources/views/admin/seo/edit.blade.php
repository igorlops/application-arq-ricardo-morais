<x-admin-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4 w-full">
            <a href="{{ route('admin.seo.index') }}" class="text-gray-400 hover:text-gray-900 transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            </a>
            <span>Editar SEO: {{ $seo->page_name }}</span>
        </div>
    </x-slot>

    <div class="bg-white rounded-xl border border-gray-200 overflow-hidden shadow-sm max-w-3xl mx-auto">
        <form action="{{ route('admin.seo.update', $seo->id) }}" method="POST" class="p-8 space-y-6">
            @csrf
            @method('PUT')
            
            <div>
                <label for="page_name" class="block text-sm font-medium text-gray-700">Nome da Página / Rota</label>
                <input type="text" name="page_name" id="page_name" value="{{ old('page_name', $seo->page_name) }}" required class="mt-1 block w-full border-gray-300 focus:border-gray-900 focus:ring-gray-900 shadow-sm rounded-lg py-2 px-3 outline-none text-gray-900 bg-gray-50">
                @error('page_name') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="meta_title" class="block text-sm font-medium text-gray-700">Meta Title</label>
                <input type="text" name="meta_title" id="meta_title" value="{{ old('meta_title', $seo->meta_title) }}" class="mt-1 block w-full border-gray-300 focus:border-gray-900 focus:ring-gray-900 shadow-sm rounded-lg py-2 px-3 outline-none text-gray-900 bg-gray-50">
                @error('meta_title') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="meta_description" class="block text-sm font-medium text-gray-700">Meta Description</label>
                <textarea name="meta_description" id="meta_description" rows="3" class="mt-1 block w-full border-gray-300 focus:border-gray-900 focus:ring-gray-900 shadow-sm rounded-lg py-2 px-3 outline-none text-gray-900 bg-gray-50">{{ old('meta_description', $seo->meta_description) }}</textarea>
                @error('meta_description') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="meta_keywords" class="block text-sm font-medium text-gray-700">Meta Keywords</label>
                <input type="text" name="meta_keywords" id="meta_keywords" value="{{ old('meta_keywords', $seo->meta_keywords) }}" class="mt-1 block w-full border-gray-300 focus:border-gray-900 focus:ring-gray-900 shadow-sm rounded-lg py-2 px-3 outline-none text-gray-900 bg-gray-50">
                @error('meta_keywords') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
            </div>

            <div class="flex items-center">
                <input id="status" name="status" type="checkbox" value="1" {{ old('status', $seo->status) ? 'checked' : '' }} class="h-4 w-4 text-gray-900 focus:ring-gray-900 border-gray-300 rounded">
                <label for="status" class="ml-2 block text-sm text-gray-700">Ativo</label>
            </div>

            <div class="pt-6 border-t border-gray-200 flex justify-end space-x-3">
                <a href="{{ route('admin.seo.index') }}" class="py-2 px-4 shadow-sm text-sm font-medium rounded-lg text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 transition">Cancelar</a>
                <button type="submit" class="py-2 px-4 shadow-sm text-sm font-medium rounded-lg text-white bg-gray-900 hover:bg-gray-800 transition">Atualizar SEO</button>
            </div>
        </form>
    </div>
</x-admin-layout>
