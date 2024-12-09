<x-platform-layout>
    <div class="relative w-full h-96 lg:h-228">
        <div class="absolute w-full h-96 lg:h-228 bg-black">
            <div class="h-full px-4 py-16 lg:px-20 lg:py-40 absolute z-10">
                <h2 class="text-2xl lg:text-5xl text-white lg:mb-4">{{ __('Seja um especialista na BioReligare!') }}</h2>
                <p class="lg:text-2xl text-primary-300 mb-10 lg:mb-32">{{ __('Realize atendimentos online de forma fácil') }}</p>
                <x-inputs.button style='primary' class="lg:text-3xl lg:px-7 lg:py-3 border-0">
                    {{ __('Quero fazer meu cadastro') }}</x-button>
            </div>
            <img src="https://d2gr5kl7dt2z3t.cloudfront.net/blog/wp-content/uploads/2015/12/04053809/shutterstock_199106600-750x500.jpg"
                 class="w-full h-full object-cover opacity-20" />
        </div>
    </div>
    <div class="border-t bg-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 lg:py-24">
            <div class="space-y-8 sm:space-y-12">
                <div class="space-y-5 sm:mx-auto sm:max-w-xl sm:space-y-4 lg:max-w-5xl">
                    <h2 class="text-3xl text-left font-extrabold tracking-tight sm:text-4xl">{{ __('Por que a BioReligare?') }}</h2>
                    <p class="text-xl text-gray-500">Risus velit condimentum vitae tincidunt tincidunt. Mauris ridiculus fusce amet urna nunc. Ut nisl ornare
                        diam in.</p>
                </div>
                <ul class="mx-auto grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-4 md:gap-x-6 lg:max-w-5xl lg:gap-x-12 lg:gap-y-16 xl:grid-cols-4 text-center">
                    <li>
                        <div class="flex flex-col items-center space-y-4">
                            <div class="p-4 text-white bg-primary-600 rounded-full shadow-md ring-1 ring-black ring-opacity-10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-lg font-medium">{{ __('Atendimento Online') }}</h2>
                                <p class="text-gray-500">{{ __('Faça seu atendimento online de forma fácil') }}</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex flex-col items-center space-y-4">
                            <div class="p-4 text-white bg-primary-600 rounded-full shadow-md ring-1 ring-black ring-opacity-10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-lg font-medium">{{ __('Agenda Online') }}</h2>
                                <p class="text-gray-500">{{ __('Gerencie sua agenda de atendimentos online') }}</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex flex-col items-center space-y-4">
                            <div class="p-4 text-white bg-primary-600 rounded-full shadow-md ring-1 ring-black ring-opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-lg font-medium">{{ __('Visibilidade') }}</h2>
                                <p class="text-gray-500">{{ __('Seja visto pelas pessoas que visitam a pltafroma todos os dias') }}</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex flex-col items-center space-y-4">
                            <div class="p-4 text-white bg-primary-600 rounded-full shadow-md ring-1 ring-black ring-opacity-10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-lg font-medium">{{ __('Segurança') }}</h2>
                                <p class="text-gray-500">{{ __('Plataforma segura para o siglilo das suas informações e de seus pacientes') }}</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex flex-col items-center space-y-4">
                            <div class="p-4 text-white bg-primary-600 rounded-full shadow-md ring-1 ring-black ring-opacity-10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-lg font-medium">{{ __('Custo benefício') }}</h2>
                                <p class="text-gray-500">{{ __('A BioReligare tem um custo acessível para todos') }}</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex flex-col items-center space-y-4">
                            <div class="p-4 text-white bg-primary-600 rounded-full shadow-md ring-1 ring-black ring-opacity-10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-lg font-medium">{{ __('Facilidade') }}</h2>
                                <p class="text-gray-500">{{ __('Faça seu atendimento online de forma fácil') }}</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex flex-col items-center space-y-4">
                            <div class="p-4 text-white bg-primary-600 rounded-full shadow-md ring-1 ring-black ring-opacity-10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-lg font-medium">{{ __('Prontuário') }}</h2>
                                <p class="text-gray-500">{{ __('Tenha prontuários com todo o histórico de seus atendimentos') }}</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex flex-col items-center space-y-4">
                            <div class="p-4 text-white bg-primary-600 rounded-full shadow-md ring-1 ring-black ring-opacity-10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-lg font-medium">{{ __('Questionários') }}</h2>
                                <p class="text-gray-500">
                                    {{ __('Aplique os principais instrumentos de avaliação e análise em suas consultas e participe de pesquisas científicas') }}
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="space-y-5 sm:mx-auto sm:max-w-xl sm:space-y-4 lg:max-w-5xl">
                <div class="mb-10">
                    <h2 class="mb-4 text-3xl text-left font-extrabold tracking-tight sm:text-4xl">
                        {{ __('Como faço parte?') }}
                    </h2>
                    <p class="text-xl text-gray-500">Risus velit condimentum vitae tincidunt tincidunt. Mauris ridiculus fusce amet urna nunc. Ut nisl ornare
                        diam in.</p>
                </div>
                <dl class="space-y-10 sm:space-y-0 sm:grid sm:grid-cols-1 sm:grid-rows-4 sm:grid-flow-col sm:gap-x-6 sm:gap-y-4 lg:gap-x-8">
                    <div class="flex">
                        <div href="#" aria-current="step">
                            <span class="p-6 flex items-center text-sm font-medium">
                                <span class="flex-shrink-0">
                                    <span class="w-10 h-10 flex items-center justify-center border-2 border-primary-900 rounded-full">
                                        <span class="text-primary-800-dark">01</span>
                                    </span>
                                </span>
                            </span>
                        </div>
                        <div class="ml-3 flex flex-col justify-center">
                            <p class="text-lg leading-6 font-medium text-gray-600">
                                {{ __('Faça seu cadastro preenchendo com as informações requisitadas') }}
                            </p>
                        </div>
                    </div>
                    <div class="flex">
                        <!-- Heroicon name: outline/check -->
                        <div href="#" aria-current="step">
                            <span class="p-6 flex items-center text-sm font-medium">
                                <span class="flex-shrink-0">
                                    <span class="w-10 h-10 flex items-center justify-center border-2 border-primary-900 rounded-full">
                                        <span class="text-primary-800-dark">02</span>
                                    </span>
                                </span>
                            </span>
                        </div>
                        <div class="ml-3 flex flex-col justify-center">
                            <p class="text-lg leading-6 font-medium text-gray-600">
                                {{ __('Equipe da BioReligare aprova suas informações') }}
                            </p>
                        </div>
                    </div>

                    <div class="flex">
                        <!-- Heroicon name: outline/check -->
                        <div href="#" aria-current="step">
                            <span class="p-6 flex items-center text-sm font-medium">
                                <span class="flex-shrink-0">
                                    <span class="w-10 h-10 flex items-center justify-center border-2 border-primary-900 rounded-full">
                                        <span class="text-primary-800-dark">03</span>
                                    </span>
                                </span>
                            </span>
                        </div>
                        <div class="ml-3 flex flex-col justify-center">
                            <p class="text-lg leading-6 font-medium text-gray-600">
                                {{ __('Escolha um plano e faça o pagamento da plataforma') }}
                            </p>
                        </div>
                    </div>

                    <div class="flex">
                        <!-- Heroicon name: outline/check -->
                        <div href="#" aria-current="step">
                            <span class="p-6 flex items-center text-sm font-medium">
                                <span class="flex-shrink-0">
                                    <span class="w-10 h-10 flex items-center justify-center border-2 border-primary-900 rounded-full">
                                        <span class="text-primary-800-dark">04</span>
                                    </span>
                                </span>
                            </span>
                        </div>
                        <div class="ml-3 flex flex-col justify-center">
                            <p class="text-lg leading-6 font-medium text-gray-600">
                                {{ __('Pronto! Você pode usufrui dos benefícios da BioReligare') }}
                            </p>
                        </div>
                    </div>
                </dl>
            </div>
            <div class="space-y-5 sm:mx-auto sm:max-w-xl sm:space-y-4 lg:max-w-5xl mt-10">
                <div class="mb-10">
                    <h2 class="mb-4 text-3xl text-left font-extrabold tracking-tight sm:text-4xl">
                        {{ __('Conheça nossos planos') }}
                    </h2>
                    <p class="text-xl text-gray-500">Risus velit condimentum vitae tincidunt tincidunt. Mauris ridiculus fusce amet urna nunc. Ut nisl ornare
                        diam in.</p>
                </div>
                <div class="grid md:grid-cols-3 md:gap-x-4">
                    <div class="relative ring-1 ring-black ring-opacity-10 rounded-md p-2 flex flex-col justify-between">
                        <div class="absolute ml-10 -top-3 left-0 text-sm bg-white text-gray-600 px-2">{{ __('Plano Básico') }}</div>
                        <div class="p-4">
                            <p class="text-lg">{{ __('Acesse o sistema com:') }}</p>
                            <ul>
                                <li class="ml-4 text-gray-500">{{ __('- Resumo da Expertise') }}</li>
                                <li class="ml-4 text-gray-500">{{ __('- Foto') }}</li>
                                <li class="ml-4 text-gray-500">{{ __('- Agenda Eletrônica') }}</li>
                                <li class="ml-4 text-gray-500">{{ __('- Estatística dos Atendimentos') }}</li>
                                <li class="ml-4 text-gray-500">{{ __('- Video Chamada') }}</li>
                                <li class="ml-4 text-gray-500">{{ __('- Prontuário Eletrônico') }}</li>
                            </ul>
                        </div>
                        <a href="{{ route('platform.register') }}">
                            <x-inputs.button :style="'primary'" class="mt-16 text-center w-full">
                                {{ __('Ver mais') }}
                            </x-inputs.button>
                        </a>
                    </div>
                    <div class="relative ring-1 ring-black ring-opacity-10 rounded-md p-2 flex flex-col justify-between">
                        <div class="absolute ml-10 -top-3 left-0 text-sm bg-white text-gray-600 px-2">{{ __('Plano Intermediário') }}</div>
                        <div class="p-4">
                            <p class="text-lg">{{ __('Acesse o sistema com:') }}</p>
                            <ul>
                                <li class="ml-4 text-gray-500">{{ __('- Plano Básico') }} + </li>
                                <li class="ml-4 text-gray-500">{{ __('- Feedback dos Pacientes') }}</li>
                                <li class="ml-4 text-gray-500">{{ __('- Expertise Completa') }}</li>
                                <li class="ml-4 text-gray-500">{{ __('- Telefone') }}</li>
                                <li class="ml-4 text-gray-500">{{ __('- Link WhatsApp') }}</li>
                                <li class="ml-4 text-gray-500">{{ __('- Endereço') }}</li>
                                <li class="ml-4 text-gray-500">{{ __('- Google Maps') }}</li>
                                <li class="ml-4 text-gray-500">{{ __('- Vídeo de Apresentação (1 min)') }}</li>

                            </ul>
                        </div>
                        <a href="{{ route('platform.register') }}">
                            <x-inputs.button :style="'primary'" class="mt-16 text-center w-full">
                                {{ __('Ver mais') }}
                            </x-inputs.button>
                        </a>
                    </div>
                    <div class="relative ring-1 ring-black ring-opacity-10 rounded-md p-2 flex flex-col justify-between">
                        <div class="absolute ml-10 -top-3 left-0 text-sm bg-white text-gray-600 px-2">{{ __('Plano Avançado') }}</div>
                        <div class="p-4">
                            <p class="text-lg">{{ __('Acesse o sistema com:') }}</p>
                            <ul>
                                <li class="ml-4 text-gray-500">{{ __('- Plano Intermediário') }} + </li>
                                <li class="ml-4 text-gray-500">{{ __('- Chat interativo') }}</li>
                                <li class="ml-4 text-gray-500">{{ __('- Upload de Documentos') }}</li>
                                <li class="ml-4 text-gray-500">{{ __('- Publicação de Artigos') }}</li>
                                <li class="ml-4 text-gray-500">{{ __('- Vídeo de Apresentação (3 min)') }}</li>
                            </ul>
                        </div>
                        <a href="{{ route('platform.register') }}">
                            <x-inputs.button :style="'primary'" class="mt-16 text-center w-full">
                                {{ __('Ver mais') }}
                            </x-inputs.button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</x-platform-layout>
