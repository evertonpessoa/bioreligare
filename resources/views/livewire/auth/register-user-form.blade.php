<div class="min-h-screen bg-white">
    <!-- Register User Screen (professional and patient) -->
    <div class="p-1 md:p-12 lg:p-18 h-full">
        <!-- Select User Type -->
        <section class="max-w-7xl mx-auto py-20 px-4 sm:px-6 lg:px-8 {{ $state['userType'] ? 'hidden' : 'block' }}">
            <div class="sm:flex sm:flex-col sm:align-center py-10">
                <h1 class="text-5xl font-extrabold text-gray-600 sm:text-center">
                    {{ __('Selecione o perfil para cadastro') }}
                </h1>
                <p class="mt-5 text-xl text-gray-400 sm:text-center">
                    {{ __('Você pode se cadastrar como um paciente, professional da saúde ou pesquisador na plataforma da BioReligare.') }}
                </p>
            </div>
            <div class="mt-12 space-y-4 sm:mt-16 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-6 lg:max-w-4xl lg:mx-auto xl:max-w-none xl:mx-0 xl:grid-cols-8">
                <div class="border border-gray-200 rounded-lg shadow-sm divide-y divide-gray-200 xl:col-start-2 xl:col-span-2">
                    <div class="p-6 flex flex-col">
                        <h2 class="text-lg leading-6 font-medium text-gray-600 mb-8">{{ __('Profissionais da Saúde') }}</h2>
                        <div class="h-40 w-40 self-center">
                            <x-svgs.professional-logo />
                        </div>
                        <x-inputs.button wire:click="$set('state.userType', 'professional')" type="button" class="mt-8 w-full bg-primary-600 hover:bg-primary-700"
                                            :style="'primary'">
                            {{ __('Cadastrar como Profissional') }}
                        </x-inputs.button>
                    </div>
                    <div class="pt-6 pb-8 px-6">
                        <h3 class="text-xs font-medium text-gray-900 tracking-wide uppercase">
                            {{ __('O que está incluso') }}</h3>
                        <ul class="mt-6 space-y-4">
                            <li class="flex space-x-3">
                                <!-- Heroicon name: solid/check -->
                                <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                    <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm text-gray-500">{{ __('Tenha o seu nome e especialidade divulgados na plataforma') }}</span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Heroicon name: solid/check -->
                                <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                    <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm text-gray-500">{{ __('Agenda disponível') }}</span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Heroicon name: solid/check -->
                                <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                    <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm text-gray-500">{{ __('Atendimento online') }}</span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Heroicon name: solid/check -->
                                <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                    <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm text-gray-500">{{ __('Prontuário online') }}</span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Heroicon name: solid/check -->
                                <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                    <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm text-gray-500">{{ __('Questionários') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="border border-gray-200 rounded-lg shadow-sm divide-y divide-gray-200 xl:col-start-4 xl:col-span-2">
                    <div class="p-6 flex flex-col">
                        <h2 class="text-lg leading-6 font-medium text-gray-600 mb-8">{{ __('Pacientes') }}</h2>
                        <div class="h-40 w-40 self-center">
                            <x-svgs.pacient-logo />
                        </div>
                        <x-inputs.button wire:click="$set('state.userType', 'patient')" type="button" class="mt-8 w-full bg-primary-600 hover:bg-primary-700"
                                            :style="'primary'">
                            {{ __('Cadastrar como Paciente') }}
                        </x-inputs.button>
                    </div>
                    <div class="pt-6 pb-8 px-6">
                        <h3 class="text-xs font-medium text-gray-900 tracking-wide uppercase">
                            {{ __('O que está incluso') }}</h3>
                        <ul class="mt-6 space-y-4">
                            <li class="flex space-x-3">
                                <!-- Heroicon name: solid/check -->
                                <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                    <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm text-gray-500">{{ __('Encontre o Profissional que deseja') }}</span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Heroicon name: solid/check -->
                                <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                    <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm text-gray-500">{{ __('Agende uma data e horário disponível') }}</span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Heroicon name: solid/check -->
                                <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                    <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm text-gray-500">{{ __('Seja atendido online') }}</span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Heroicon name: solid/check -->
                                <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                    <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm text-gray-500">{{ __('Simples e fácil') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="border border-gray-200 rounded-lg shadow-sm divide-y divide-gray-200 xl:col-start-6 xl:col-span-2">
                    <div class="p-6 flex flex-col">
                        <h2 class="text-lg leading-6 font-medium text-gray-600 mb-8">{{ __('Pesquisadores') }}</h2>
                        <div class="h-40 w-40 self-center">
                            <x-svgs.researcher-logo />
                        </div>
                        <x-inputs.button :disabled="true" wire:click="$set('state.userType', 'patient')" type="button" class="mt-8 w-full bg-primary-600 hover:bg-primary-700"
                                            :style="'primary'">
                            {{ __('Cadastrar como Pesquisador') }}
                        </x-inputs.button>
                    </div>
                    <div class="pt-6 pb-8 px-6">
                        <h3 class="text-xs font-medium text-gray-900 tracking-wide uppercase">
                            {{ __('O que está incluso') }}</h3>
                        <ul class="mt-6 space-y-4">
                            <li class="flex space-x-3">
                                <!-- Heroicon name: solid/check -->
                                <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                    <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm text-gray-500">{{ __('Acesso à ampla base de dados') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>
        <!-- Professional Register -->
        @if ($state['userType'] === 'professional')
            @livewire('register-professional-user-form')
        @endif

        @if ($state['userType'] === 'patient')
            @livewire('register-patient-form')
        @endif
    </div>
    <!-- This example requires Tailwind CSS v2.0+ -->
</div>
