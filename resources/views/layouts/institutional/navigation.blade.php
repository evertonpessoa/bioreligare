<style>
    #container-menu-background {
        display: none;
        flex-direction: row;
        justify-content: center;
        background-color: transparent;
        z-index: 1;
    }

    #container-menu {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        width: 100%;
        margin: 0% 5% 0% 5%;
        background-color: transparent;
    }

    #container-menu-links {
        display: flex;
        gap: 3%;
        flex-basis: 100%;
    }

    @media(min-width: 768px) {

    }

    @media(min-width: 1280px) {
        #container-menu {
            width: 100%;
            margin: 1% 0% 0% 0%;
        }

        #bioreligare-logo {
            display: flex;
            margin-left: 5.75%;
        }

        #container-menu-links {
            display: flex;
            flex-basis: 75%;
        }

        #container-menu-background {
            display: flex;
        }

        #nossas-especialidades {
            display: flex;
        }

        #container-equipes-profissionais {
            display: flex;
            flex-direction: row;
            gap: 5.75%;
            flex-basis: 35%;
            justify-content:center;
        }
    }

    @media(min-width: 1440px) {
        #container-menu {
            width: 100%;
            margin: 1% 0% 0% 0%;
        }

        #bioreligare-logo {
            display: flex;
            margin-left: 5.75%;
        }

        #container-menu-links {
            display: flex;
            flex-basis: 75%;
        }

        #container-menu-background {
            display: flex;
        }

        #nossas-especialidades {
            display: flex;
        }

        #container-equipes-profissionais {
            display: flex;
            flex-direction: row;
            gap: 5.75%;
            flex-basis: 35%;
            justify-content:center;
        }
    }

    @media(min-width: 1680px) {
        #container-menu {
            width: 80%;
            margin: 1% 0% 0% 0%;
        }

        #bioreligare-logo {
            display: flex;
            margin-left: 5.75%;
        }

        #container-menu-links {
            display: flex;
            flex-basis: 75%;
        }

        #container-menu-background {
            display: flex;
        }

        #nossas-especialidades {
            display: flex;
        }

        #container-equipes-profissionais {
            display: flex;
            flex-direction: row;
            gap: 5.75%;
            flex-basis: 35%;
            justify-content:center;
        }
    }

    @media(min-width: 1920px) {
        #container-menu {
            width: 80%;
            margin: 1% 0% 0% 0%;
        }

        #bioreligare-logo {
            display: flex;
            margin-left: 5.75%;
        }

        #container-menu-links {
            display: flex;
            flex-basis: 75%;
        }

        #container-menu-background {
            display: flex;
        }

        #nossas-especialidades {
            display: flex;
        }

        #container-equipes-profissionais {
            display: flex;
            flex-direction: row;
            gap: 5.75%;
            flex-basis: 35%;
            justify-content:center;
        }
    }

</style>

<div id="container-menu-background" class="border-b-2 border-secondary-600">
    <div id="container-menu" class="relative h-full w-full">

        <div id="bioreligare-logo" class="ml-0 overflow-hidden bg-transparent flex-shrink-0 flex items-left">
            <a href="{{ route('institutional.index') }}">
                <img class="h-28 w-auto" src="{{ asset('img/LOGO-BIORELIGARE-150px-reg.png') }}" alt="Bioreligare">
            </a>
        </div>

        <div id="container-menu-links">

            <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
            <x-nav-link href="{{ route('institutional.index') }}" :active="request()->routeIs('institutional.index')">
                Home
            </x-nav-link>

            {{-- Container: Nossas Especialidades + Saúde Preventiva/Integrativa + Especialidades --}}
            <x-dropdown nav="true" align="left" width="48" style="width:195px;">

                {{-- Nossas Especialidades --}}
                <div id="nossas-especialidades">
                    <x-slot name="trigger">
                        <x-nav-link class="cursor-pointer block h-full">
                            {{ __('Nossas especialidades') }}
                        </x-nav-link>
                    </x-slot>
                </div>

                {{-- Container: Preventiva + Integrativa --}}
                <x-slot name="content">

                    {{-- Saúde Preventiva --}}
                    <x-double-navlink>

                        <x-slot name="title">
                            {{ __('Saúde Preventiva') }}
                        </x-slot>

                        <x-slot name="content">
                            @foreach ($preventiva as $specialization)
                                <x-dropdown-link href="{{ route('institutional.specializations.show', ['slug' => $specialization->slug]) }}">{{ $specialization->name }}</x-dropdown-link>
                            @endforeach
                        </x-slot>

                    </x-double-navlink>

                    {{-- Saúde Integrativa --}}
                    <x-double-navlink>

                        <x-slot name="title">
                            {{ __('Saúde Integrativa')}}
                        </x-slot>

                        <x-slot name="content">
                                @foreach ($integrativa as $specialization)
                                    <x-dropdown-link href="{{ route('institutional.specializations.show', ['slug' => $specialization->slug]) }}">{{ $specialization->name }}</x-dropdown-link>
                                @endforeach
                        </x-slot>

                    </x-double-navlink>

                </x-slot>

            </x-dropdown>

            @foreach ($equipes as $equipe)
                <x-nav-link class="cursor-pointer block h-full" href="{{ route('institutional.professional-type.show', ['slug' => $equipe->slug]) }}">
                    {{ $equipe->title }}
                </x-nav-link>
            @endforeach

            <x-nav-link class="cursor-pointer block h-full" href="{{ route('institutional.health-insurances.show') }}">
                {{ __('Plano de saúde') }}
            </x-nav-link>

            <x-nav-link class="cursor-pointer block h-full" href="{{ route('institutional.contact.show') }}">
                {{ __('Contato') }}
            </x-nav-link>

        </div>

    </div>
</div>
