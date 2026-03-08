<x-admin-layout>
    <x-slot name="header">
        Dashboard
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <!-- Metric Card 1 -->
        <div class="bg-white rounded-xl border border-gray-200 p-6 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500">Total de Visitantes</p>
                    <p class="text-3xl font-semibold text-gray-900 mt-2">{{ $metrics['visitors'] }}</p>
                </div>
                <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                </div>
            </div>
        </div>

        <!-- Metric Card 2 -->
        <div class="bg-white rounded-xl border border-gray-200 p-6 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500">Posts Publicados</p>
                    <p class="text-3xl font-semibold text-gray-900 mt-2">{{ $metrics['published_posts'] }}</p>
                </div>
                <div class="w-12 h-12 bg-green-50 text-green-600 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5L18.5 8H20"></path></svg>
                </div>
            </div>
        </div>

        <!-- Metric Card 3 -->
        <div class="bg-white rounded-xl border border-gray-200 p-6 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500">Total de Posts</p>
                    <p class="text-3xl font-semibold text-gray-900 mt-2">{{ $metrics['total_posts'] }}</p>
                </div>
                <div class="w-12 h-12 bg-gray-50 text-gray-600 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </div>
            </div>
        </div>

        <!-- Metric Card 4 -->
        <div class="bg-white rounded-xl border border-gray-200 p-6 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500">Mensagens não lidas</p>
                    <p class="text-3xl font-semibold text-gray-900 mt-2">{{ $metrics['unread_contacts'] }}</p>
                </div>
                <div class="w-12 h-12 bg-purple-50 text-purple-600 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="mt-8 bg-white rounded-xl border border-gray-200 overflow-hidden shadow-sm">
        <div class="px-6 py-5 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Atividade Recente</h3>
        </div>
        <div class="p-6 text-center text-gray-500 py-12">
            Nenhuma atividade para exibir.
        </div>
    </div>
</x-admin-layout>
