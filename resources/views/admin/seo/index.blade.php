<x-admin-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center w-full">
            <span>SEO Meta Tags</span>
            <a href="{{ route('admin.seo.create') }}" class="px-4 py-2 bg-gray-900 text-white text-sm font-medium rounded-lg hover:bg-gray-800 transition">
                Nova Tag
            </a>
        </div>
    </x-slot>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-50 text-green-700 rounded-lg border border-green-200">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-xl border border-gray-200 overflow-hidden shadow-sm">
        <table class="w-full text-left text-sm text-gray-600">
            <thead class="bg-gray-50 text-gray-700 border-b border-gray-200 uppercase text-xs font-semibold">
                <tr>
                    <th class="px-6 py-4">Página (Rota)</th>
                    <th class="px-6 py-4">Meta Title</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4 text-right">Ações</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($seoMetas as $seo)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 font-medium text-gray-900">{{ $seo->page_name }}</td>
                        <td class="px-6 py-4">{{ $seo->meta_title ?? '-' }}</td>
                        <td class="px-6 py-4">
                            @if($seo->status)
                                <span class="px-2.5 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium">Ativo</span>
                            @else
                                <span class="px-2.5 py-1 bg-gray-100 text-gray-700 rounded-full text-xs font-medium">Inativo</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-right space-x-2 whitespace-nowrap">
                            <a href="{{ route('admin.seo.edit', $seo->id) }}" class="text-blue-600 hover:text-blue-900 font-medium inline-block">Editar</a>
                            <form action="{{ route('admin.seo.destroy', $seo->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Excluir esta meta tag?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 font-medium">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-8 text-center text-gray-500">
                            Nenhuma meta tag cadastrada.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        @if($seoMetas->hasPages())
            <div class="px-6 py-4 border-t border-gray-200">
                {{ $seoMetas->links() }}
            </div>
        @endif
    </div>
</x-admin-layout>
