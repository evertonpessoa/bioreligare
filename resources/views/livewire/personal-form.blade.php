<div>
    <div class="grid grid-cols-6 gap-6 xl:w-9/12 2xl:w-1/2">
        <div class="col-span-6 sm:col-span-3">
            <x-inputs.label-input-error wire:model="state.firstName" name="first_name" :required="true" type="text" autocomplete="given-name">
                <x-slot name="label">
                    {{ __('Nome') }}
                </x-slot>
            </x-inputs.label-input-error>
        </div>

        <div class="col-span-6 sm:col-span-3">
            <x-inputs.label-input-error wire:model="state.lastName" name="last_name" :required="true" type="text" autocomplete="family-name">
                <x-slot name="label">
                    {{ __('Sobrenome') }}
                </x-slot>
            </x-inputs.label-input-error>
        </div>

        <div class="col-span-6 sm:col-span-3">
            <x-inputs.label-input-error wire:model="state.cpf" name="cpf" :required="true" type="text" autocomplete="document">
                <x-slot name="label">
                    {{ __('CPF') }}
                </x-slot>
            </x-inputs.label-input-error>
        </div>

        <div class="col-span-6 sm:col-span-3">
            <x-inputs.label-input-error wire:model="state.birthday" name="birthday" :required="true" type="text" autocomplete="document">
                <x-slot name="label">
                    {{ __('Data de Nascimento') }}
                </x-slot>
            </x-inputs.label-input-error>
        </div>

        <div class="col-span-6 sm:col-span-3">
            <x-inputs.label-input-error wire:model="state.rg" name="rg" :required="true" type="text" autocomplete="rg">
                <x-slot name="label">
                    {{ __('RG') }}
                </x-slot>
            </x-inputs.label-input-error>
        </div>

        <div class="col-span-6 sm:col-span-3">
            <x-inputs.label-select-error :required="true" wire:model="state.gender" name="gender" autocomplete="gender">
                <x-slot name="label">
                    {{ __('Gênero') }}
                </x-slot>
                <x-slot name="append">
                    <option></option>
                    @foreach ($genders as $gender)
                        <option value="{{ $gender }}">{{ __($gender) }}</option>
                    @endforeach
                </x-slot>
            </x-inputs.label-select-error>
        </div>

        <div class="col-span-6 sm:col-span-3">
            <x-inputs.label-input-error wire:model="state.phone" name="phone" :required="true" type="text" autocomplete="tel-national" placeholder="(00) 00000-0000">
                <x-slot name="label">
                    {{ __('Telefone') }}
                </x-slot>
            </x-inputs.label-input-error>
        </div>

        @livewire('address-form', [ 'step' => $step ])

        <div class="col-span-6">
            <label class="block text-sm font-medium text-gray-500 mb-2">
                {{ __('Foto') }}
                <x-span-required />
            </label>
            <div class="mt-1 flex items-center space-x-5">
                <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                    @if ($photo)
                        <img class="w-full h-full rounded-full" src="{{ $photo->temporaryUrl() }}" alt="">
                    @else
                        <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                  d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    @endif
                </span>
                <label class="text-gray-400 hover:text-primary-600 flex space-x-3 items-center relative cursor-pointer">
                    <span class="text-lg">
                        {{ __('Adicionar foto') }}
                    </span>
                    <input wire:model="photo" type="file" class="hidden">
                </label>
                @error('photo')
                    <x-errors.span>{{ $message }}</x-errors.span>
                @enderror
            </div>
        </div>
    </div>
    <div class="flex col-span-6 p-4 justify-center gap-x-3 mt-8">
        <x-inputs.button wire:click="$emit('back')" type="button"> {{ __('Anterior') }} </x-inputs>
        <x-inputs.button wire:click="validatesChild" :style="'primary'" type="button"> {{ __('Próximo') }} </x-inputs>
    </div>
</div>
