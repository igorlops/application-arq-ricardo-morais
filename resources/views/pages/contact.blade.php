<x-app-layout>

    <div class="bg-gray-50 min-h-screen py-24 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-20">
                <h1 class="text-5xl md:text-6xl font-serif font-bold text-gray-900 mb-6">Contato</h1>
                <p class="text-lg text-gray-500 font-light">Estamos à disposição para entender o contexto do seu projeto e traçar um caminho onde arquitetura e excelência se encontram.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 bg-white shadow-2xl border border-gray-100 p-8 md:p-16 relative z-10">
                
                <!-- Contact Info -->
                <div class="space-y-12">
                    <div>
                        <h3 class="text-xs uppercase tracking-widest font-bold text-gray-400 mb-4 block">Visite nosso estúdio</h3>
                        <p class="text-xl font-serif text-gray-900">
                            Av. Paulista, 1000 - Cj. 1201<br/>
                            Bela Vista, São Paulo - SP<br/>
                            01310-100
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xs uppercase tracking-widest font-bold text-gray-400 mb-4 block">Fale Conosco</h3>
                        <p class="text-xl font-serif text-gray-900">
                            <a href="mailto:contato@ricardomorais.arq.br" class="hover:text-gray-500 transition">contato@ricardomorais.arq.br</a><br/>
                            <a href="tel:+5511999999999" class="hover:text-gray-500 transition">+55 (11) 99999-9999</a>
                        </p>
                    </div>

                    <div class="pt-8 border-t border-gray-200">
                        <p class="text-sm text-gray-500 font-light">
                            Nosso horário de atendimento é de <strong>Segunda a Sexta, das 09h às 18h</strong>. Atendimentos presenciais ocorrem mediante agendamento prévio.
                        </p>
                    </div>
                </div>

                <!-- Form -->
                <div>
                    @if(session('success'))
                        <div class="mb-8 p-6 bg-green-50 text-green-900 rounded-lg border border-green-200">
                            <p class="font-bold flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Mensagem Enviada
                            </p>
                            <p class="mt-2 text-sm">{{ session('success') }}</p>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-8">
                        @csrf
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div>
                                <label for="name" class="block text-xs uppercase tracking-widest font-medium text-gray-700 mb-2">Nome Completo</label>
                                <input type="text" name="name" id="name" required class="block w-full border-0 border-b border-gray-300 bg-transparent focus:ring-0 focus:border-gray-900 pb-2 text-lg text-gray-900 outline-none" placeholder="João Silva">
                            </div>

                            <div>
                                <label for="phone" class="block text-xs uppercase tracking-widest font-medium text-gray-700 mb-2">Telefone</label>
                                <input type="text" name="phone" id="phone" class="block w-full border-0 border-b border-gray-300 bg-transparent focus:ring-0 focus:border-gray-900 pb-2 text-lg text-gray-900 outline-none" placeholder="(11) 90000-0000">
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-xs uppercase tracking-widest font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" name="email" id="email" required class="block w-full border-0 border-b border-gray-300 bg-transparent focus:ring-0 focus:border-gray-900 pb-2 text-lg text-gray-900 outline-none" placeholder="joao@exemplo.com">
                        </div>

                        <div>
                            <label for="message" class="block text-xs uppercase tracking-widest font-medium text-gray-700 mb-2">Mensagem</label>
                            <textarea name="message" id="message" rows="5" required class="block w-full border-0 border-b border-gray-300 bg-transparent focus:ring-0 focus:border-gray-900 pb-2 text-lg text-gray-900 outline-none" placeholder="Detalhe um pouco sobre suas necessidades..."></textarea>
                        </div>

                        <div class="pt-4">
                            <button type="submit" class="w-full bg-gray-900 text-white font-bold tracking-widest uppercase text-sm py-5 hover:bg-gray-800 transition duration-300">
                                Enviar Mensagem
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    <!-- FAQ Section -->
    <section class="py-24 bg-white border-t border-gray-100">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-xs uppercase tracking-widest text-gray-500 font-bold mb-2 block">Dúvidas Comuns</span>
                <h2 class="text-3xl font-serif font-bold text-gray-900">Perguntas Frequentes</h2>
            </div>
            
            <div class="space-y-6">
                <!-- FAQ Item 1 -->
                <div class="border border-gray-100 p-8 shadow-sm hover:shadow-md transition">
                    <h3 class="text-lg font-serif font-bold text-gray-900 mb-4">Qual é a abrangência espacial dos projetos do estúdio?</h3>
                    <p class="text-gray-600 font-light text-sm leading-relaxed">
                        Atuamos em todo o território nacional e também realizamos projetos internacionais. Dependendo da localização, a execução comercial e residencial pode ser acompanhada de forma híbrida (presencial e remota) com parceiros locais de confiança.
                    </p>
                </div>
                <!-- FAQ Item 2 -->
                <div class="border border-gray-100 p-8 shadow-sm hover:shadow-md transition">
                    <h3 class="text-lg font-serif font-bold text-gray-900 mb-4">Como funciona a etapa inicial de briefing?</h3>
                    <p class="text-gray-600 font-light text-sm leading-relaxed">
                        A etapa de briefing é uma conversa profunda para entendermos suas necessidades, estilo de vida, orçamento e expectativas. Essa troca de informações é a base sólida sobre a qual o conceito arquitetônico será concebido.
                    </p>
                </div>
                <!-- FAQ Item 3 -->
                <div class="border border-gray-100 p-8 shadow-sm hover:shadow-md transition">
                    <h3 class="text-lg font-serif font-bold text-gray-900 mb-4">O estúdio também faz a execução propriamente dita da obra?</h3>
                    <p class="text-gray-600 font-light text-sm leading-relaxed">
                        Não somos a construtora civil, mas oferecemos o serviço de "Acompanhamento de Obra" e "Gestão de Fornecedores". Isso significa que representamos o cliente, assegurando que o projeto seja provido de qualidade e acompanhado de perto.
                    </p>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
