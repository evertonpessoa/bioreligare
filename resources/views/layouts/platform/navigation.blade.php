<nav x-data="{ open: false }" class="bg-white shadow" x-cloak>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex justify-between w-full">
                <div class="-ml-2 mr-2 flex items-center md:hidden">
                    <!-- Mobile menu button -->
                    <button @click="open = !open" @click.away="open = false"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                            aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Icon when menu is closed. -->
                        <!--
                Heroicon name: outline/menu

                Menu open: "hidden", Menu closed: "block"
              -->
                        <svg :class="{ 'block': !open, 'hidden': open }" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!-- Icon when menu is open. -->
                        <!--
                Heroicon name: outline/x

                Menu open: "block", Menu closed: "hidden"
              -->
                        <svg :class="{ 'block': open, 'hidden': !open }" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('platform.index') }}">
                        <img class="h-16 w-auto" src="{{ asset('img/LOGO-BIORELIGARE-150px-reg.png') }}" alt="Bioreligare">
                    </a>
                </div>
                <div class="hidden md:ml-6 md:flex md:space-x-8">
                    <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                    <x-nav-link href="#">
                        {{ __('Nossas Especialidades') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('platform.to-professionals') }}" :active="request()->routeIs('to-professionals')">
                        {{ __('Para Profissionais') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('platform.to-patients') }}" :active="request()->routeIs('to-patients')">
                        {{ __('Para Pacientes') }}
                    </x-nav-link>
                    <x-nav-link href="#">
                        {{ __('Sobre a BioReligare') }}
                    </x-nav-link>
                    <x-nav-link href="#">
                        {{ __('Contato') }}
                    </x-nav-link>
                    <x-nav-link :href="route('platform.register')" :active="request()->routeIs('register')">
                        {{ __('Cadastrar') }}
                    </x-nav-link>
                    <a href="{{ route('platform.login') }}"
                       class="relative h-3/4 inline-flex self-center items-center px-4 py-1 border border-transparent text-sm font-bold rounded-md text-white bg-primary-500 shadow-sm hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Entrar') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--
      Mobile menu, toggle classes based on menu state.

      Menu open: "block", Menu closed: "hidden"
    -->
    <div x-show="open" x-transition:enter="transition transform ease-out origin-top duration-400" x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100" x-transition:leave="transition origin-top ease-in duration-400" x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0" class="md:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700" -->
            <x-responsive-nav-link href="#">
                {{ __('Nossas Especialidades') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('platform.to-professionals') }}">
                {{ __('Para Profissionais') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('platform.to-patients') }}">
                {{ __('Para Pacientes') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="#">
                {{ __('Sobre a BioReligare') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="#">
                {{ __('Contato') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('platform.register')" :active="request()->routeIs('register')">
                {{ __('Cadastrar') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="#">
                {{ __('Entrar') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
