<section id="plan-form"
         x-data="{ plans: {{ json_encode($subscriptionPlans) }}, selected: 'annualy', annualy: 'annualy', threeMonths: 'threemo', sixMonths: 'sixmo' }"
         class="max-w-7xl mx-auto py-20 px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:flex-col sm:align-center py-10">
        <div class="sm:flex sm:flex-col sm:align-center">
            <h1 class="text-5xl font-extrabold text-gray-600 sm:text-center">
                {{ __('Planos Bio Religare') }}
            </h1>
            <p class="mt-5 text-xl text-gray-400 sm:text-center">
                {{ __('Selecione o período do plano:') }}
            </p>
            <div class="relative self-center mt-6 bg-gray-100 rounded-lg p-0.5 flex sm:mt-8">
                <button type="button"
                        @click="selected = annualy"
                        x-bind:class="selected === annualy ? 'bg-white border-gray-200' : 'border border-transparent'"
                        class="relative w-1/2 rounded-md shadow-sm py-2 text-sm font-medium text-gray-700 whitespace-nowrap focus:outline-none focus:ring-2 focus:ring-primary-500 focus:z-10 sm:w-auto sm:px-8"
                    >
                        {{ __('Anual') }}
                </button>
                <button type="button"
                        @click="selected = sixMonths"
                        x-bind:class="selected === sixMonths ? 'bg-white border-gray-200' : 'border border-transparent'"
                        class="ml-0.5 relative w-1/2 rounded-md py-2 text-sm font-medium text-gray-700 whitespace-nowrap focus:outline-none focus:ring-2 focus:ring-primary-500 focus:z-10 sm:w-auto sm:px-8"
                    >
                        {{ __('Semestral') }}
                </button>
                <button type="button"
                        @click="selected = threeMonths"
                        x-bind:class="selected === threeMonths ? 'bg-white border-gray-200' : 'border border-transparent'"
                        class="ml-0.5 relative w-1/2 rounded-md py-2 text-sm font-medium text-gray-700 whitespace-nowrap focus:outline-none focus:ring-2 focus:ring-primary-500 focus:z-10 sm:w-auto sm:px-8"
                    >
                        {{ __('Trimestral') }}
                </button>
            </div>
        </div>
        <div
             class="mt-12 space-y-4 sm:mt-16 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-6 lg:max-w-4xl lg:mx-auto xl:max-w-none xl:mx-0 xl:grid-cols-3">
            <div class="border border-gray-200 rounded-lg shadow-sm divide-y divide-gray-200">
                <div class="p-6">
                    <h2 class="text-lg leading-6 font-medium text-gray-600">{{ __('Plano Básico') }}</h2>
                    <p class="mt-8">
                        <span class="text-4xl font-extrabold text-gray-600" x-text="plans.basic[selected].price"></span>
                        <span class="text-base font-medium text-gray-500" x-show="selected === annualy">{{ __('Ao ano') }}</span>
                        <span class="text-base font-medium text-gray-500" x-show="selected === sixMonths">{{ __('A cada 6 meses') }}</span>
                        <span class="text-base font-medium text-gray-500" x-show="selected === threeMonths">{{ __('A cada 3 meses') }}</span>
                    </p>
                    <x-inputs.button x-on:click="$wire.setSubscriptionPlan(plans.basic[selected].id)" type="button" class="mt-8 w-full bg-primary-600 hover:bg-primary-700"
                                     :style="'primary'">
                        {{ __('Selecionar') }}
                    </x-inputs.button>
                </div>
                <div class="pt-6 pb-8 px-6">
                    <h3 class="text-xs font-medium text-gray-600 tracking-wide uppercase">{{ __('Acesse o sistema com: ') }}</h3>
                    <ul class="mt-6 space-y-4">
                        <li class="flex space-x-3">
                            <!-- Heroicon name: solid/check -->
                            <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                      clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-gray-500">{{ __('Resumo da Expertise') }}</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Heroicon name: solid/check -->
                            <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                      clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-gray-500">{{ __('Foto') }}</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Heroicon name: solid/check -->
                            <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                      clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-gray-500">{{ __('Agenda Eletrônica') }}</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Heroicon name: solid/check -->
                            <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                      clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-gray-500">{{ __('Estatística dos Atendimentos') }}</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Heroicon name: solid/check -->
                            <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                      clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-gray-500">{{ __('Video Chamada') }}</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Heroicon name: solid/check -->
                            <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                      clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-gray-500">{{ __('Prontuário Eletrônico') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border border-gray-200 rounded-lg shadow-sm divide-y divide-gray-200">
                <div class="p-6">
                    <h2 class="text-lg leading-6 font-medium text-gray-600">{{ __('Plano Intermediário') }}</h2>
                    <p class="mt-8">
                        <span class="text-4xl font-extrabold text-gray-600" x-text="plans.intermediate[selected].price"></span>
                        <span class="text-base font-medium text-gray-500" x-show="selected === annualy">{{ __('Ao ano') }}</span>
                        <span class="text-base font-medium text-gray-500" x-show="selected === sixMonths">{{ __('A cada 6 meses') }}</span>
                        <span class="text-base font-medium text-gray-500" x-show="selected === threeMonths">{{ __('A cada 3 meses') }}</span>
                    </p>
                    <x-inputs.button x-on:click="$wire.setSubscriptionPlan(plans.intermediate[selected].id)" type="button" class="mt-8 w-full bg-primary-600 hover:bg-primary-700"
                                     :style="'primary'">
                        {{ __('Selecionar') }}
                    </x-inputs.button>
                </div>
                <div class="pt-6 pb-8 px-6">
                    <h3 class="text-xs font-medium text-gray-600 tracking-wide uppercase">{{ __('Acesse o sistema com: ') }}</h3>
                    <ul class="mt-6 space-y-4">
                        <li class="flex space-x-3">
                            <!-- Heroicon name: solid/check -->
                            <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                      clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-gray-500">{{ __('Plano Básico') }} + </span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Heroicon name: solid/check -->
                            <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                      clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-gray-500">{{ __('Feedback dos Pacientes') }}</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Heroicon name: solid/check -->
                            <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                      clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-gray-500">{{ __('Expertise Completa') }}</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Heroicon name: solid/check -->
                            <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                      clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-gray-500">{{ __('Telefone') }}</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Heroicon name: solid/check -->
                            <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                      clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-gray-500">{{ __('Link WhatsApp') }}</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Heroicon name: solid/check -->
                            <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                      clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-gray-500">{{ __('Endereço') }}</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Heroicon name: solid/check -->
                            <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                      clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-gray-500">{{ __('Google Maps') }}</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Heroicon name: solid/check -->
                            <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                      clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-gray-500">{{ __('Vídeo de Apresentação (1 min)') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border border-gray-200 rounded-lg shadow-sm divide-y divide-gray-200">
                <div class="p-6">
                    <h2 class="text-lg leading-6 font-medium text-gray-600">{{ __('Plano Avançado') }}</h2>
                    <p class="mt-8">
                        <span class="text-4xl font-extrabold text-gray-600" x-text="plans.advanced[selected].price"></span>
                        <span class="text-base font-medium text-gray-500" x-show="selected === annualy">{{ __('Ao ano') }}</span>
                        <span class="text-base font-medium text-gray-500" x-show="selected === sixMonths">{{ __('A cada 6 meses') }}</span>
                        <span class="text-base font-medium text-gray-500" x-show="selected === threeMonths">{{ __('A cada 3 meses') }}</span>
                    </p>
                    <x-inputs.button x-on:click="$wire.setSubscriptionPlan(plans.advanced[selected].id)" type="button" class="mt-8 w-full bg-primary-600 hover:bg-primary-700"
                                     :style="'primary'">
                        {{ __('Selecionar') }}
                    </x-inputs.button>
                </div>
                <div class="pt-6 pb-8 px-6">
                    <h3 class="text-xs font-medium text-gray-600 tracking-wide uppercase">{{ __('Acesse o sistema com: ') }}</h3>
                    <ul class="mt-6 space-y-4">
                        <li class="flex space-x-3">
                            <!-- Heroicon name: solid/check -->
                            <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                      clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-gray-500">{{ __('Plano Intermediário') }} + </span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Heroicon name: solid/check -->
                            <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                      clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-gray-500">{{ __('Chat interativo') }}</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Heroicon name: solid/check -->
                            <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                      clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-gray-500">{{ __('Upload de Documentos') }}</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Heroicon name: solid/check -->
                            <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                      clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-gray-500">{{ __('Publicação de Artigos') }}</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Heroicon name: solid/check -->
                            <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                      clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-gray-500">{{ __('Vídeo de Apresentação (3 min)') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
