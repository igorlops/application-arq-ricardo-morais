<x-admin-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4 w-full">
            <a href="{{ route('admin.contacts.index') }}" class="text-gray-400 hover:text-gray-900 transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            </a>
            <span>Mensagem de {{ $contact->name }}</span>
        </div>
    </x-slot>

    <div class="bg-white rounded-xl border border-gray-200 overflow-hidden shadow-sm max-w-3xl mx-auto p-8">
        
        <div class="grid grid-cols-2 gap-6 border-b border-gray-200 pb-6 mb-6">
            <div>
                <span class="block text-xs font-medium uppercase tracking-wider text-gray-500 mb-1">Remetente</span>
                <span class="block text-gray-900 font-medium">{{ $contact->name }}</span>
            </div>
            <div>
                <span class="block text-xs font-medium uppercase tracking-wider text-gray-500 mb-1">Email</span>
                <a href="mailto:{{ $contact->email }}" class="block text-blue-600 hover:text-blue-800">{{ $contact->email }}</a>
            </div>
            <div>
                <span class="block text-xs font-medium uppercase tracking-wider text-gray-500 mb-1">Telefone</span>
                <span class="block text-gray-900">{{ $contact->phone ?? '-' }}</span>
            </div>
            <div>
                <span class="block text-xs font-medium uppercase tracking-wider text-gray-500 mb-1">Data de Envio</span>
                <span class="block text-gray-900">{{ $contact->created_at->format('d/m/Y às H:i') }}</span>
            </div>
        </div>

        <div>
            <span class="block text-xs font-medium uppercase tracking-wider text-gray-500 mb-3">Mensagem</span>
            <div class="bg-gray-50 p-6 rounded-lg text-gray-800 whitespace-pre-wrap leading-relaxed border border-gray-100">
                {{ $contact->message }}
            </div>
        </div>

        <div class="mt-8 pt-6 border-t border-gray-200 flex justify-between">
            <a href="{{ route('admin.contacts.index') }}" class="py-2 px-4 shadow-sm text-sm font-medium rounded-lg text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 transition">
                Voltar à Lista
            </a>
            
            <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Excluir esta mensagem permanentemente?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="py-2 px-4 shadow-sm text-sm font-medium rounded-lg text-white bg-red-600 hover:bg-red-700 transition">
                    Excluir Mensagem
                </button>
            </form>
        </div>
    </div>
</x-admin-layout>
