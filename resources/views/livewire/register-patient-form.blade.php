<div>
<section>
    <div class = "block">
        <nav aria-label="Progress">
            <h1 class="text-3xl text-gray-700 p-8 mb-8 text-center">
                    {{ __('Fazendo cadastro como paciente') }}
            </h1>
            <ol class="border-r border-l border-t border-gray-300 rounded-t-md divide-y divide-gray-300 md:flex md:divide-y-0">
                <li class="relative md:flex-1 md:flex">
                    <div class="hidden md:block absolute top-0 right-0 h-full w-5" aria-hidden="true">
                        <svg class="h-full w-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                            <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor" stroke-linejoin="round" />
                        </svg>
                    </div>
                </li>
                    <li class="relative md:flex-1 md:flex">
                    </li>
            </ol>
        </nav>
        <form wire:submit.prevent class="p-12 border rounded-b-md border-gray-300">
            <div>
                <div class="grid grid-cols-6 gap-6 xl:w-9/12 2xl:w-1/2">
                    <div class="col-span-full grid grid-cols-6 gap-6">
                        <div class="col-span-3">
                            <x-inputs.label-input-error wire:model="state.email" name="email" :required="true" type="text" autocomplete="email">
                                <x-slot name="label">
                                    {{ __('E-mail') }}
                                </x-slot>
                            </x-inputs.label-input-error>
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-3">
                        <x-inputs.label-input-error wire:model="state.password" name="password" :required="true" type="password" autocomplete="password">
                            <x-slot name="label">
                                {{ __('Senha') }}
                            </x-slot>
                        </x-inputs.label-input-error>
                    </div>

                    <div class="col-span-3 sm:col-span-3">
                        <x-inputs.label-input-error wire:model="state.confirmPassword" name="confirmPassword" :required="true" type="password" autocomplete="confirm-password">
                            <x-slot name="label">
                                {{ __('Confirmar Senha') }}
                            </x-slot>
                        </x-inputs.label-input-error>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-inputs.label-input-error wire:model="state.profession" name="profession" :required="true" type="text" autocomplete="profession">
                            <x-slot name="label">
                                {{ __('Profissão') }}
                            </x-slot>
                        </x-inputs.label-input-error>
                    </div>
                    <div class="col-span-full grid grid-cols-6 gap-6">
                        <div class="col-span-3">
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
                        </div>
                    </div>
                   
                </div>
            </div>
            @livewire('personal-form', [ 'step' => $steps[0] ])
    
        </form>
    </div>   

    <x-submit-modal route="/cadastrar" event="submit-success">
    </x-submit-modal>
</section>
</div>
