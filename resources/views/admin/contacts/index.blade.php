<x-admin-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center w-full">
            <span>Mensagens de Contato</span>
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
                    <th class="px-6 py-4">Data</th>
                    <th class="px-6 py-4">Nome / Email</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4 text-right">Ações</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($contacts as $contact)
                    <tr class="hover:bg-gray-50 transition {{ is_null($contact->read_at) ? 'bg-blue-50/50' : '' }}">
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 font-medium">
                            {{ $contact->created_at->format('d/m/Y H:i') }}
                        </td>
                        <td class="px-6 py-4">
                            <span class="block text-gray-900 font-medium">{{ $contact->name }}</span>
                            <span class="block text-xs text-gray-500 mt-0.5">{{ $contact->email }}</span>
                        </td>
                        <td class="px-6 py-4">
                            @if(is_null($contact->read_at))
                                <span class="px-2.5 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-medium">Não Lida</span>
                            @else
                                <span class="px-2.5 py-1 bg-gray-100 text-gray-700 rounded-full text-xs font-medium">Lida</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-right space-x-2 whitespace-nowrap">
                            <a href="{{ route('admin.contacts.show', $contact->id) }}" class="text-blue-600 hover:text-blue-900 font-medium inline-block">Ler Mensagem</a>
                            <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Excluir esta mensagem permanentemente?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 font-medium">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-8 text-center text-gray-500">
                            Nenhuma mensagem recebida ainda.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        @if($contacts->hasPages())
            <div class="px-6 py-4 border-t border-gray-200">
                {{ $contacts->links() }}
            </div>
        @endif
    </div>
</x-admin-layout>
