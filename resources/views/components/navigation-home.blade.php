<div class="relative h-full bg-right bg-no-repeat" style="background-image: url({{ asset('storage/banners/'.$banner1['0']->image_path) }}); height:800px;">

    <div id="container-menu-items" class="flex justify-between h-28 relative top-5 w-full right-0 mx-auto px-4 sm:px-6 lg:px-8">

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
                            @foreach ($preventiva as $specialization)
                                <x-dropdown-link href="{{ route('institutional.specializations.show', ['slug' => $specialization->slug]) }}">{{ $specialization->name }}</x-dropdown-link>
                            @endforeach
                        </x-slot>

                    </x-double-navlink>
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
                <x-nav-link href="{{ route('institutional.professional-type.show', ['slug' => $equipe->slug]) }}">
                    {{ $equipe->title }}
                </x-nav-link>
            @endforeach

            <x-nav-link href="{{ route('institutional.health-insurances.show') }}">
                {{ __('Plano de saúde') }}
            </x-nav-link>

            <x-nav-link href="{{ route('institutional.contact.show') }}">
                {{ __('Contato') }}
            </x-nav-link>

        </div>

    </div>

</div>
