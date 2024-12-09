<div class="relative" style="height:800px;">
    <div class="relative h-full bg-right bg-no-repeat" style="background-image: url('/img/banner-med-principal.png')">
            <div class="relative top-3 w-full  right-0 mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-28 ">
                    <div class="flex justify-between w-full">
                        <div class="overflow-hidden bg-transparent flex-shrink-0 flex items-left" style="margin-left:0px;">
                            <a href="{{ route('institutional.index') }}">
                                <img class="h-28 w-auto" src="{{ asset('img/LOGO-BIORELIGARE-150px-reg.png') }}" alt="Bioreligare">
                            </a>
                        </div>
                        <div class="mr-28 hidden md:ml-6 md:flex md:space-x-8">

                            <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                            <x-nav-link href="{{ route('institutional.index') }}" :active="request()->routeIs('institutional.index')">
                                Home
                            </x-nav-link>
                            <x-dropdown nav="true" align="left" width="48">
                                <x-slot name="trigger">
                                    <x-nav-link class="cursor-pointer block h-full">
                                        {{ __('Nossas especialidades') }}
                                    </x-nav-link>
                                </x-slot>
                                <x-slot name="content">
                                    <x-double-navlink>
                                        <x-slot name="title">
                                            {{ __('Saúde Preventiva') }}
                                        </x-slot>
                                        <x-slot name="content">
                                            <x-dropdown-link href="{{ route('institutional.preventive.neuropsychology') }}">{{ __('Neuropsicologia') }}</x-dropdown-link>
                                            <x-dropdown-link href="{{ route('institutional.preventive.psychology') }}">{{ __('Psicologia') }}</x-dropdown-link>
                                            <x-dropdown-link href="{{ route('institutional.preventive.psychiatry') }}">{{ __('Psiquiatria') }}</x-dropdown-link>
                                            <x-dropdown-link href="{{ route('institutional.preventive.mastology') }}">{{ __('Mastologia') }}</x-dropdown-link>
                                            <x-dropdown-link href="{{ route('institutional.preventive.nutrition') }}">{{ __('Nutrição') }}</x-dropdown-link>
                                            <x-dropdown-link href="{{ route('institutional.preventive.speechTherapy') }}">{{ __('Fonoaudiologia') }}</x-dropdown-link>
                                            <x-dropdown-link href="{{ route('institutional.preventive.pediatrics') }}">{{ __('Pediatria') }}</x-dropdown-link>
                                        </x-slot>
                                    </x-double-navlink>
                                    <x-double-navlink>
                                        <x-slot name="title">
                                        {{ __('Saúde Integrativa')}}
                                        </x-slot>
                                        <x-slot name="content">
                                        <x-dropdown-link href="{{ route('institutional.integrative.acupunture') }}">{{ __('Acupuntura') }}</x-dropdown-link>
                                            <x-dropdown-link href="{{ route('institutional.integrative.floralTherapy') }}">{{ __('Floralterapia') }}</x-dropdown-link>
                                            <x-dropdown-link href="{{ route('institutional.integrative.colorTherapy') }}">{{ __('Cromoterapia') }}</x-dropdown-link>
                                            <x-dropdown-link href="{{ route('institutional.integrative.aromaTherapy') }}">{{ __('Aromaterapia') }}</x-dropdown-link>
                                        </x-slot>
                                    </x-double-navlink>
                                    <x-dropdown-link class="cursor-pointer block h-full">
                                        {{ __('Clínica Social') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                            <x-nav-link href="{{ route('institutional.clinic.medical-team') }}" :active="request()->routeIs('institutional.clinic.medical-team')">
                                {{ __('Equipe Médica') }}
                            </x-nav-link>
                            <x-nav-link href="{{ route('institutional.clinic.therapeutic-team') }}" :active="request()->routeIs('institutional.therapeutic-team')">
                                {{ __('Equipe Terapêutica') }}
                            </x-nav-link>

                            <x-nav-link href="{{ route('institutional.health-insurances.show') }}">
                                {{ __('Plano de saúde') }}
                            </x-nav-link>

                            <x-nav-link href="{{ route('institutional.contact.show') }}">
                                {{ __('Contato') }}
                            </x-nav-link>
                        </div>

                    </div>
                </div>
            </div>
            <div class="mt-36 ml-8 text-primary-700 text-4xl">
                            Acolhimento,<br>
                            Respeito, <br>
                            Humanização e <br>
                            Espiritualidade
            </div>
            <div class="mt-10 ml-8 italic top-1/2 text-primary-700 text-3xl">
                   Por uma cultura de paz, <br>saúde e bem estar.
            </div>
        </div>

    </div>

</div>
