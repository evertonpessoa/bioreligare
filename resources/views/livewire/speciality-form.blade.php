<div>
    <div>
        <span class="text-gray-400 text-xl mb-4">{{ __('Profissionais da Saúde') }}
            <x-span-required />
        </span>
        <ul class="grid grid-cols-2 xl:grid-cols-9 p-8 md:p-12 gap-12">
            @foreach ($specialities as $speciality)
                <li class="col-span-1 relative">
                    <button wire:click="specialitySet('{{ $speciality }}')"
                            class="{{ $state['speciality'] === $speciality ? 'text-primary-1000' : 'text-gray-400 hover:text-primary-1000' }} flex flex-col w-full justify-center items-center space-y-5"
                            type="button">
                        <div class="w-12 h-12">
                            <x-svgs.psychology-icon />
                        </div>
                        <span class="text-center">{{ __($speciality) }}</span>
                    </button>
                    @if ($state['speciality'] === $speciality)
                        <span wire:click="clearAttribute('speciality')" class="absolute top-0 right-0 w-4 h-4 text-red-400 hover:text-red-600 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </span>
                    @endif
                </li>
            @endforeach
        </ul>
        @error('state.speciality')
            <div class="mb-4">
                <x-errors.span>{{ $message }}</x-errors.span>
            </div>
        @enderror
    </div>
    <div class="flex flex-col mb-12">
        <label class="text-gray-400 text-xl mb-8">
            {{ __('O plano selecionado foi') }}
            <x-span-required />
        </label>
        @if ($subscriptionPlan)
            <x-inputs.select disabled class="max-w-md" id="location" name="location">
                    <option>{{ __($subscriptionPlan) }}</option>
            </x-select>
        @endif
    </div>
    <x-text-modal wire:click="$toggle('state.acceptScientificCollaboration')">
        <x-slot name="checkboxLabel">
            {{ __('Clique aqui para aceitar a colaborar com pesquisa científica (seus dados não serão revelados).') }}
        </x-slot>
        <x-slot name="modalTitle">
            {{ __('Termo de pesquisa cientifica') }}
        </x-slot>
        <x-slot name="modalContent">
            <p class="text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id urna nec lorem euismod pellentesque ut at lorem. Donec et
                    maximus sem. In vestibulum nisl quis urna molestie laoreet vitae imperdiet quam. Donec pellentesque diam magna, nec laoreet
                    nunc molestie a. Nulla quis dignissim dolor. In ultrices quam eget dolor maximus, sed gravida est interdum. Donec nec ex
                    eget diam egestas tempus. In ac quam vel metus feugiat ultricies. Nam varius aliquam eros nec accumsan. Pellentesque
                    consequat sollicitudin eros. Nullam sed enim nec ipsum ultrices venenatis. Proin molestie sapien ornare diam aliquam, id
                    porttitor ligula sodales.
                </p>
                <p class="text-gray-500">
                    Aenean est augue, auctor et elementum quis, tincidunt vitae libero. Phasellus sem mauris, feugiat a lectus non, gravida
                    dignissim enim. Mauris non viverra purus. Fusce interdum a quam eu finibus. Mauris pharetra leo eu risus ullamcorper
                    pretium. Nunc urna nisl, condimentum a massa faucibus, pulvinar congue mauris. Nullam vestibulum erat eget ante sagittis
                    tempus. Maecenas tristique erat non eros lacinia tincidunt id ac turpis. Fusce non suscipit nisl. Ut at nulla mauris. Sed at
                    faucibus libero. Maecenas vulputate turpis eu sapien molestie, sit amet fermentum sapien vulputate. Vivamus enim lacus,
                    facilisis ac volutpat non, vestibulum a elit. Nullam eleifend purus ex, non pellentesque nisl aliquam ut.
                </p>
                <p class="text-gray-500">
                    Vestibulum ut ex sapien. Aliquam erat volutpat. Vestibulum varius sodales eleifend. Cras placerat turpis a sodales semper.
                    Pellentesque velit mi, consectetur interdum ultrices at, lobortis ut tellus. Nam gravida, risus ac sagittis sagittis, libero
                    magna iaculis lorem, id porttitor nulla velit tincidunt mauris. Nam vestibulum nisi ac pretium placerat. Nam pulvinar diam
                    ut consectetur dictum. Nulla nec lacus ac nulla molestie gravida. Aenean et commodo libero, sed tempor nisi. Sed ultricies
                    ex at ultrices molestie. Sed sed fermentum lectus, a maximus orci. Vestibulum mattis viverra dui, nec fringilla turpis
                    molestie sed. Sed rutrum placerat est, at mattis ante.
                    </p>
                <p class="text-gray-500">
                    Maecenas blandit sagittis felis ut dictum. Vestibulum sed neque in erat egestas dictum. Nullam condimentum eros lorem, quis
                    malesuada risus aliquet vitae. Sed commodo tempus placerat. Nam consectetur sagittis ex ac tempus. Fusce vestibulum, odio id
                    efficitur gravida, nisi odio consectetur nisl, in malesuada tortor quam sed quam. Nunc fringilla metus augue, vel mollis
                    magna ullamcorper non. Sed finibus semper enim non cursus. Aliquam non tellus placerat, elementum lacus bibendum,
                    condimentum nulla. Suspendisse mi eros, malesuada nec enim quis, imperdiet ultrices nisi. Suspendisse leo nisl, ornare ac
                    porttitor sed, elementum eget purus. Sed vitae rutrum dui. Aenean ut nisl ut neque posuere cursus. Donec congue nunc augue,
                    a pulvinar elit malesuada nec. Praesent vitae nisl velit.
                </p>
                <p class="text-gray-500">
                    Etiam mattis nibh eu lacus vestibulum rhoncus. Curabitur egestas nibh risus, a suscipit lectus egestas in. Suspendisse
                    gravida blandit purus, et tincidunt orci dignissim id. Curabitur ullamcorper aliquet laoreet. Sed ac dapibus lectus. Integer
                    malesuada ante metus, non malesuada erat euismod at. Phasellus vulputate mauris at eros sollicitudin, quis iaculis felis
                    vehicula. Mauris eu magna sit amet risus condimentum venenatis. Aliquam turpis dolor, fermentum ac ipsum in, commodo laoreet
                    quam. Cras nec lacinia nulla. Vestibulum posuere dictum ipsum, a sollicitudin nibh vulputate in. Ut sagittis tellus in odio
                    imperdiet, a ullamcorper libero auctor. Integer mollis pretium libero, et aliquam nulla pharetra a.
                </p>
        </x-slot>
    </x-text-modal>
    <div class="grid grid-cols-5 gap-4 xl:gap-8">
        <span class="text-gray-400 text-xl col-span-full">{{ __('Informações para Acesso') }}</span>
        <div class="col-span-full xl:col-span-1">
            <x-inputs.label-input-error wire:model="state.email" name="email" :required="true" type="text" autocomplete="email">
                <x-slot name="label">
                    {{ __('Endereço de E-mail') }}
                </x-slot>
            </x-inputs.label-input-error>
        </div>
        <div class="col-span-full xl:col-span-1">
            <x-inputs.label-input-error wire:model="state.password" name="password" :required="true" type="password" autocomplete="new-password">
                <x-slot name="label">
                    {{ __('Senha') }}
                </x-slot>
            </x-inputs.label-input-error>
        </div>
        <div class="col-span-full xl:col-span-1">
            <x-inputs.label-input-error wire:model="state.confirmPassword" name="confirm_password" :required="true" type="password" autocomplete="new-password">
                <x-slot name="label">
                    {{ __('Confirmar Senha') }}
                </x-slot>
            </x-inputs.label-input-error>
        </div>
    </div>
    <div class="flex col-span-6 p-4 justify-center gap-x-3 mt-8">
        <x-inputs.button wire:click="$emit('back')" type="button"> {{ __('Anterior') }} </x-inputs>
        <x-inputs.button wire:click="next" :style="'primary'" type="button"> {{ __('Próximo') }} </x-inputs>
    </div>
</div>
