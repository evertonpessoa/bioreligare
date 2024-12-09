<section>
    <div class="{{ $step === $steps[0] ? 'block' : 'hidden' }}">
        @livewire('plan-form')
    </div>
    <div class="{{ $step !== $steps[0] ? 'block' : 'hidden' }}">
        <nav aria-label="Progress">
            <h1 class="text-3xl text-gray-700 p-8 mb-8 text-center">
                {{ __('Fazendo cadastro como profissional da saúde') }}
            </h1>
            <ol class="border-r border-l border-t border-gray-300 rounded-t-md divide-y divide-gray-300 md:flex md:divide-y-0">
                <li class="relative md:flex-1 md:flex">
                    @if ($step === $steps[1])
                        <!-- Current Step -->
                        <div class="px-6 py-4 flex items-center text-sm font-medium">
                            <span class="flex-shrink-0 w-10 h-10 flex items-center justify-center border-2 border-primary-600 rounded-full" aria-current="step">
                                <span class="text-primary-600">01</span>
                            </span>
                            <span class="ml-4 text-sm font-medium text-primary-600"> {{ __('Especialidade') }}
                            </span>
                        </div>
                    @endif
                    @if ($step !== $steps[1])
                        <!-- Completed Step -->
                        <div class="group items-center w-full">
                            <span class="px-6 py-4 flex items-center text-sm font-medium">
                                <span class="flex-shrink-0 w-10 h-10 flex items-center justify-center bg-primary-300 rounded-full">
                                    <!-- Heroicon name: solid/check -->
                                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                         aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                              clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="ml-4 text-sm font-semibold text-primary-700">{{ __('Especialidade') }}</span>
                            </span>
                        </div>
                    @endif
                    <div class="hidden md:block absolute top-0 right-0 h-full w-5" aria-hidden="true">
                        <svg class="h-full w-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                            <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor" stroke-linejoin="round" />
                        </svg>
                    </div>
                </li>
                <li class="relative md:flex-1 md:flex">
                    <!-- Upcoming Step -->
                    @if ($step === $steps[1])
                        <div class="group flex items-center">
                            <span class="px-6 py-4 flex items-center text-sm font-medium">
                                <span class="flex-shrink-0 w-10 h-10 flex items-center justify-center border-2 border-gray-300 rounded-full">
                                    <span class="text-gray-500">02</span>
                                </span>
                                <span class="ml-4 text-sm font-medium text-gray-500">{{ __('Informações Pessoais') }}</span>
                            </span>
                        </div>
                    @endif
                    <!-- Current Step -->
                    @if ($step === $steps[2])
                        <div class="px-6 py-4 flex items-center text-sm font-medium">
                            <span class="flex-shrink-0 w-10 h-10 flex items-center justify-center border-2 border-primary-600 rounded-full" aria-current="step">
                                <span class="text-primary-600">02</span>
                            </span>
                            <span class="ml-4 text-sm font-medium text-primary-600"> {{ __('Informações Pessoais') }}
                            </span>
                        </div>
                    @endif
                    <!-- Completed Step -->
                    @if ($step === $steps[3])
                        <div class="group items-center w-full">
                            <span class="px-6 py-4 flex items-center text-sm font-medium">
                                <span class="flex-shrink-0 w-10 h-10 flex items-center justify-center bg-primary-300 rounded-full">
                                    <!-- Heroicon name: solid/check -->
                                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                         aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                              clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="ml-4 text-sm font-semibold text-primary-700">{{ __('Informações Pessoais') }}</span>
                            </span>
                        </div>
                    @endif
                    <div class="hidden md:block absolute top-0 right-0 h-full w-5" aria-hidden="true">
                        <svg class="h-full w-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                            <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor" stroke-linejoin="round" />
                        </svg>
                    </div>
                </li>
                <li class="relative md:flex-1 md:flex">
                    <!-- Upcoming Step -->
                    @if ($step !== $steps[3])
                        <div class="group flex items-center">
                            <span class="px-6 py-4 flex items-center text-sm font-medium">
                                <span class="flex-shrink-0 w-10 h-10 flex items-center justify-center border-2 border-gray-300 rounded-full">
                                    <span class="text-gray-500">03</span>
                                </span>
                                <span class="ml-4 text-sm font-medium text-gray-500">{{ __('Informações Profissionais') }}</span>
                            </span>
                        </div>
                    @endif
                    <!-- Current Step -->
                    @if ($step === $steps[3])
                        <div class="px-6 py-4 flex items-center text-sm font-medium">
                            <span class="flex-shrink-0 w-10 h-10 flex items-center justify-center border-2 border-primary-600 rounded-full" aria-current="step">
                                <span class="text-primary-600">03</span>
                            </span>
                            <span class="ml-4 text-sm font-medium text-primary-600"> {{ __('Informações Profissionais') }}
                            </span>
                        </div>
                    @endif
                </li>
            </ol>
        </nav>
        <form wire:submit.prevent class="p-12 border rounded-b-md border-gray-300">
            <!-- Speciality Information -->
            <section id="speciality" class="{{ $step == $steps[1] ? 'block' : 'hidden' }}">
                @livewire('speciality-form', [ 'step' => $steps[1] ])
            </section>
            <!-- Personal Information -->
            <section id="personal" class="{{ $step == $steps[2] ? 'block' : 'hidden' }}">
                @livewire('personal-form', [ 'step' => $steps[2] ])
            </section>
            <!-- Professional Information -->
            <section id="professional" class="{{ $step == $steps[3] ? 'block' : 'hidden' }}">
                @livewire('professional-form', [ 'step' => $steps[3] ])
            </section>
        </form>
    </div>
    <x-submit-modal route="/cadastrar" event="submit-success">
    </x-submit-modal>
</section>
