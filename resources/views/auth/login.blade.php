<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-50">
        <div class="w-full sm:max-w-md mt-6 px-10 py-12 bg-white shadow-xl overflow-hidden sm:rounded-2xl border border-gray-100">
            
            <div class="mb-8 text-center">
                <h2 class="text-2xl font-serif font-bold text-gray-900">Acesso Restrito</h2>
                <p class="text-sm text-gray-500 mt-2">Painel Administrativo Ricardo Morais</p>
            </div>

            <!-- Session Status -->
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Email Address -->
                <div>
                    <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                    <input id="email" class="block mt-1 w-full border-gray-300 focus:border-gray-900 focus:ring-gray-900 rounded-lg shadow-sm py-2 px-3 bg-gray-50 text-gray-900 outline-none" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
                    @error('email')
                        <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block font-medium text-sm text-gray-700">Senha</label>
                    <input id="password" class="block mt-1 w-full border-gray-300 focus:border-gray-900 focus:ring-gray-900 rounded-lg shadow-sm py-2 px-3 bg-gray-50 text-gray-900 outline-none" type="password" name="password" required autocomplete="current-password" />
                    @error('password')
                        <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-gray-900 shadow-sm focus:ring-gray-900" name="remember">
                        <span class="ml-2 text-sm text-gray-600">Lembrar-me</span>
                    </label>
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-gray-900 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 transition-colors">
                        Entrar
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
