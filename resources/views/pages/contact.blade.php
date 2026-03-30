<x-app-layout>

    <!-- Hero Section -->
    <section class="relative py-32 md:py-40 bg-brand-dark overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/reforma-fortaleza-arquiteto.jpeg') }}" alt="Contato" class="w-full h-full object-cover opacity-20 filter grayscale">
            <div class="absolute inset-0 bg-gradient-to-b from-brand-dark/50 via-brand-dark/80 to-brand-dark"></div>
        </div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="flex items-center justify-center gap-4 mb-6 reveal">
                <div class="h-px w-12 bg-brand-gold"></div>
                <p class="text-brand-gold uppercase tracking-[0.3em] text-xs font-semibold">Entre em Contato</p>
                <div class="h-px w-12 bg-brand-gold"></div>
            </div>
            <h1 class="text-5xl md:text-6xl font-serif font-bold text-white mb-6 reveal delay-100">Contato</h1>
            <p class="text-lg md:text-xl text-white/90 font-light leading-relaxed max-w-2xl mx-auto reveal delay-200">
                Estamos à disposição para entender o contexto do seu projeto e traçar um caminho onde arquitetura e excelência se encontram.
            </p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-24 bg-brand-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 bg-white shadow-2xl relative z-10 overflow-hidden">
                
                <!-- Contact Info -->
                <div class="bg-brand-dark p-12 md:p-16 text-white">
                    <div class="reveal">
                        <div class="flex items-center gap-4 mb-8">
                            <div class="h-px w-8 bg-brand-gold"></div>
                            <p class="text-brand-gold uppercase tracking-[0.2em] text-xs font-semibold">Informações</p>
                        </div>
                        
                        <h2 class="text-3xl font-serif mb-12">Visite nosso estúdio</h2>
                        
                        <div class="space-y-10">
                            <div class="flex items-start gap-6">
                                <div class="w-12 h-12 bg-brand-gold/10 flex items-center justify-center shrink-0">
                                    <i data-lucide="map-pin" class="w-5 h-5 text-brand-gold"></i>
                                </div>
                                <div>
                                    <h3 class="text-xs uppercase tracking-widest text-brand-gold mb-2">Endereço</h3>
                                    <p class="text-lg font-serif text-white leading-relaxed">
                                        Av. Paulista, 1000 - Cj. 1201<br/>
                                        Bela Vista, São Paulo - SP<br/>
                                        01310-100
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-6">
                                <div class="w-12 h-12 bg-brand-gold/10 flex items-center justify-center shrink-0">
                                    <i data-lucide="mail" class="w-5 h-5 text-brand-gold"></i>
                                </div>
                                <div>
                                    <h3 class="text-xs uppercase tracking-widest text-brand-gold mb-2">Email</h3>
                                    <a href="mailto:contato@ricardomorais.arq.br" class="text-lg font-serif text-white hover:text-brand-gold transition">contato@ricardomorais.arq.br</a>
                                </div>
                            </div>

                            <div class="flex items-start gap-6">
                                <div class="w-12 h-12 bg-brand-gold/10 flex items-center justify-center shrink-0">
                                    <i data-lucide="phone" class="w-5 h-5 text-brand-gold"></i>
                                </div>
                                <div>
                                    <h3 class="text-xs uppercase tracking-widest text-brand-gold mb-2">Telefone</h3>
                                    <a href="tel:+5511999999999" class="text-lg font-serif text-white hover:text-brand-gold transition">+55 (11) 99999-9999</a>
                                </div>
                            </div>
                        </div>

                        <div class="mt-16 pt-10 border-t border-white/10">
                            <h3 class="text-xs uppercase tracking-widest text-brand-gold mb-4">Horário de Atendimento</h3>
                            <p class="text-white/90 font-light leading-relaxed">
                                <strong class="text-white">Segunda a Sexta, das 09h às 18h</strong><br/>
                                Atendimentos presenciais ocorrem mediante agendamento prévio.
                            </p>
                        </div>

                        <!-- Social Links -->
                        <div class="mt-12 flex gap-4">
                            <a href="#" class="w-12 h-12 border border-white/20 flex items-center justify-center text-white hover:bg-brand-gold hover:border-brand-gold hover:text-brand-dark transition-all">
                                <i data-lucide="instagram" class="w-5 h-5"></i>
                            </a>
                            <a href="#" class="w-12 h-12 border border-white/20 flex items-center justify-center text-white hover:bg-brand-gold hover:border-brand-gold hover:text-brand-dark transition-all">
                                <i data-lucide="linkedin" class="w-5 h-5"></i>
                            </a>
                            <a href="#" class="w-12 h-12 border border-white/20 flex items-center justify-center text-white hover:bg-brand-gold hover:border-brand-gold hover:text-brand-dark transition-all">
                                <i data-lucide="facebook" class="w-5 h-5"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Form -->
                <div class="p-12 md:p-16">
                    <div class="reveal delay-100">
                        <div class="flex items-center gap-4 mb-8">
                            <div class="h-px w-8 bg-brand-gold"></div>
                            <p class="text-brand-gold uppercase tracking-[0.2em] text-xs font-semibold">Envie uma Mensagem</p>
                        </div>

                        @if(session('success'))
                            <div class="mb-8 p-6 bg-green-50 text-green-900 border-l-4 border-green-500">
                                <div class="flex items-center gap-3 mb-2">
                                    <i data-lucide="check-circle" class="w-5 h-5"></i>
                                    <p class="font-bold">Mensagem Enviada</p>
                                </div>
                                <p class="text-sm">{{ session('success') }}</p>
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-8">
                            @csrf
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div>
                                    <label for="name" class="block text-xs uppercase tracking-widest font-semibold text-brand-gray mb-3">Nome Completo</label>
                                    <input type="text" name="name" id="name" required class="block w-full border-0 border-b-2 border-gray-200 bg-transparent focus:ring-0 focus:border-brand-gold pb-3 text-lg text-brand-dark outline-none transition-colors" placeholder="João Silva">
                                </div>

                                <div>
                                    <label for="phone" class="block text-xs uppercase tracking-widest font-semibold text-brand-gray mb-3">Telefone</label>
                                    <input type="text" name="phone" id="phone" class="block w-full border-0 border-b-2 border-gray-200 bg-transparent focus:ring-0 focus:border-brand-gold pb-3 text-lg text-brand-dark outline-none transition-colors" placeholder="(11) 90000-0000">
                                </div>
                            </div>

                            <div>
                                <label for="email" class="block text-xs uppercase tracking-widest font-semibold text-brand-gray mb-3">Email</label>
                                <input type="email" name="email" id="email" required class="block w-full border-0 border-b-2 border-gray-200 bg-transparent focus:ring-0 focus:border-brand-gold pb-3 text-lg text-brand-dark outline-none transition-colors" placeholder="joao@exemplo.com">
                            </div>

                            <div>
                                <label for="message" class="block text-xs uppercase tracking-widest font-semibold text-brand-gray mb-3">Mensagem</label>
                                <textarea name="message" id="message" rows="5" required class="block w-full border-0 border-b-2 border-gray-200 bg-transparent focus:ring-0 focus:border-brand-gold pb-3 text-lg text-brand-dark outline-none transition-colors resize-none" placeholder="Detalhe um pouco sobre suas necessidades..."></textarea>
                            </div>

                            <div class="pt-4">
                                <button type="submit" class="w-full bg-brand-gold hover:bg-brand-dark text-brand-dark hover:text-white font-bold tracking-widest uppercase text-sm py-5 transition-all duration-300 flex items-center justify-center gap-2">
                                    Enviar Mensagem
                                    <i data-lucide="send" class="w-4 h-4"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-24 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-4 mb-6">
                    <div class="h-px w-8 bg-brand-gold"></div>
                    <p class="text-brand-gold uppercase tracking-[0.2em] text-xs font-semibold">Dúvidas Comuns</p>
                    <div class="h-px w-8 bg-brand-gold"></div>
                </div>
                <h2 class="text-3xl md:text-4xl font-serif text-brand-dark">Perguntas Frequentes</h2>
            </div>
            
            <div class="space-y-6">
                <!-- FAQ Item 1 -->
                <div class="reveal bg-brand-light p-8 border border-gray-100 hover:shadow-lg transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-brand-gold flex items-center justify-center shrink-0">
                            <i data-lucide="help-circle" class="w-5 h-5 text-brand-dark"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-serif font-bold text-brand-dark mb-3">Qual é a abrangência espacial dos projetos do estúdio?</h3>
                            <p class="text-brand-gray font-light text-sm leading-relaxed">
                                Atuamos em todo o território nacional e também realizamos projetos internacionais. Dependendo da localização, a execução comercial e residencial pode ser acompanhada de forma híbrida (presencial e remota) com parceiros locais de confiança.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- FAQ Item 2 -->
                <div class="reveal delay-100 bg-brand-light p-8 border border-gray-100 hover:shadow-lg transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-brand-gold flex items-center justify-center shrink-0">
                            <i data-lucide="help-circle" class="w-5 h-5 text-brand-dark"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-serif font-bold text-brand-dark mb-3">Como funciona a etapa inicial de briefing?</h3>
                            <p class="text-brand-gray font-light text-sm leading-relaxed">
                                A etapa de briefing é uma conversa profunda para entendermos suas necessidades, estilo de vida, orçamento e expectativas. Essa troca de informações é a base sólida sobre a qual o conceito arquitetônico será concebido.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- FAQ Item 3 -->
                <div class="reveal delay-200 bg-brand-light p-8 border border-gray-100 hover:shadow-lg transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-brand-gold flex items-center justify-center shrink-0">
                            <i data-lucide="help-circle" class="w-5 h-5 text-brand-dark"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-serif font-bold text-brand-dark mb-3">O estúdio também faz a execução propriamente dita da obra?</h3>
                            <p class="text-brand-gray font-light text-sm leading-relaxed">
                                Não somos a construtora civil, mas oferecemos o serviço de "Acompanhamento de Obra" e "Gestão de Fornecedores". Isso significa que representamos o cliente, assegurando que o projeto seja provido de qualidade e acompanhado de perto.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-32 bg-brand-dark relative overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('images/arquitetura-ricardo-morais.jpeg') }}" alt="Background" class="w-full h-full object-cover">
        </div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <i data-lucide="compass" class="w-16 h-16 text-brand-gold mx-auto mb-8"></i>
            <h2 class="text-4xl md:text-5xl font-serif text-white mb-6">Pronto para transformar seu <span class="italic text-brand-gold">espaço?</span></h2>
            <p class="text-xl text-white/90 font-light mb-12 max-w-2xl mx-auto">
                Agende uma reunião e descubra como podemos ajudar a realizar o projeto dos seus sonhos.
            </p>
            <a href="https://wa.me/5511999999999" target="_blank" class="inline-flex items-center gap-2 bg-brand-gold hover:bg-white text-brand-dark uppercase tracking-widest text-sm font-bold px-10 py-5 transition-all shadow-lg hover:shadow-xl">
                <i data-lucide="message-circle" class="w-5 h-5"></i>
                Falar pelo WhatsApp
            </a>
        </div>
    </section>

</x-app-layout>
