<x-admin-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center w-full">
            <span>Posts do Blog</span>
            <a href="{{ route('admin.posts.create') }}" class="px-4 py-2 bg-gray-900 text-white text-sm font-medium rounded-lg hover:bg-gray-800 transition">
                Novo Post
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
                    <th class="px-6 py-4">ID</th>
                    <th class="px-6 py-4">Título</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4">Publicado em</th>
                    <th class="px-6 py-4 text-right">Ações</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($posts as $post)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 font-medium text-gray-900">{{ $post->id }}</td>
                        <td class="px-6 py-4">
                            <span class="block text-gray-900 font-medium">{{ $post->title }}</span>
                            <span class="block text-xs text-gray-500 mt-0.5">/blog/{{ $post->slug }}</span>
                        </td>
                        <td class="px-6 py-4">
                            @if($post->status)
                                <span class="px-2.5 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium">Publicado</span>
                            @else
                                <span class="px-2.5 py-1 bg-gray-100 text-gray-700 rounded-full text-xs font-medium">Rascunho</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $post->published_at ? $post->published_at->format('d/m/Y H:i') : '-' }}
                        </td>
                        <td class="px-6 py-4 text-right space-x-2 whitespace-nowrap">
                            <a href="{{ route('admin.posts.edit', $post->id) }}" class="text-blue-600 hover:text-blue-900 font-medium inline-block">Editar</a>
                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Tem certeza que deseja apagar este post?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 font-medium">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                            Nenhum post encontrado.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        @if($posts->hasPages())
            <div class="px-6 py-4 border-t border-gray-200">
                {{ $posts->links() }}
            </div>
        @endif
    </div>
</x-admin-layout>
