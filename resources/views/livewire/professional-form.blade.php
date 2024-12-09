<div x-data="{ speciality: @entangle('speciality') }">
    <div class="grid grid-cols-6 gap-6 xl:w-9/12 2xl:w-1/2">
        <div class="col-span-2 flex items-center mt-1 sm:mt-5">
            <div class="h-5 flex items-center">
                <input wire:click="$emit('allowSameAddress', '{{ $step }}')" id="allowSame" name="allowSame" type="checkbox"
                       class="focus:ring-primary-500 h-4 w-4 text-primary-600 border-gray-300 rounded">
            </div>
            <div class="ml-3 text-sm">
                <label for="allowSame" class="font-medium text-gray-700">{{ __('Usar o mesmo endereço pessoal') }}</label>
            </div>
        </div>

        @livewire('address-form', ['step' => $step])

        <div class="col-span-6 sm:col-span-3">
            <x-inputs.label-input-error wire:model="state.commercialPhone" name="commercialPhone" :required="true" type="text" autocomplete="tel-national" placeholder="(00) 00000-0000">
                <x-slot name="label">
                    {{ __('Telefone Comercial') }}
                </x-slot>
            </x-inputs.label-input-error>
        </div>
        <div class="col-span-6">
            <p class="block text-sm font-medium text-gray-500 mb-2">{{ __('Diploma') }}
                ({{ __('formatos .jpg .png .bmp') }})
                <x-span-required />
            </p>
            <label class="text-gray-400 hover:text-primary-600 inline-flex space-x-3 items-center relative cursor-pointer">
                @if ($degree)
                    <img class="w-12 h-12 rounded-md border-gray-200 border" src="{{ $degree->temporaryUrl() }}" alt="">
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-none w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                @endif
                <span class="text-lg">
                    {{ __('Imagem do seu diploma') }}
                </span>
                <input wire:model="degree" type="file" class="hidden">
            </label>
            @error('degree')
                <x-errors.span>{{ $message }}</x-errors.span>
            @enderror
        </div>
        <div class="col-span-6 lg:col-span-3">
            <p class="block text-sm font-medium text-gray-500 mb-2">
                {{ __('Carteira do conselho de saúde') }} ({{ __('formatos .jpg .png .bmp') }})
                <x-span-required />
            </p>
            <label class="text-gray-400 hover:text-primary-600 inline-flex space-x-3 items-center relative cursor-pointer">
                @if ($healthCounsil)
                    <img class="w-12 h-12 rounded-md border-gray-200 border" src="{{ $healthCounsil->temporaryUrl() }}" alt="">
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-none w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                @endif
                <span class="text-lg">
                    {{ __('Imagem da sua carteira de conselho') }}
                </span>
                <input wire:model="healthCounsil" type="file" class="hidden">
            </label>
            @error('healthCounsil')
                <x-errors.span>{{ $message }}</x-errors.span>
            @enderror
        </div>
        <div class="col-span-6 lg:col-span-3">
            <p class="block text-sm font-medium text-gray-500 mb-2">
                {{ __('Certidão de regularidade ética profissional') }}
                ({{ __('formatos .jpg .png .bmp') }})</p>
            <label class="text-gray-400 hover:text-primary-600 inline-flex space-x-3 items-center relative cursor-pointer">
                @if ($ethicalRegulatory)
                    <img class="w-12 h-12 rounded-md border-gray-200 border" src="{{ $ethicalRegulatory->temporaryUrl() }}" alt="">
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-none w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                @endif
                <span class="text-lg">
                    {{ __('Imagem da sua certidão de regularidade ética') }}
                </span>
                <input wire:model="ethicalRegulatory" type="file" class="hidden">
            </label>
            @error('ethicalRegulatory')
                <x-errors.span>{{ $message }}</x-errors.span>
            @enderror
        </div>
        <div class="col-span-6 sm:col-span-3">
            <x-inputs.label-input-error :required="true" wire:model="state.startedWorkingAt" name="startedWorkingAt">
                <x-slot name="label">
                    {{ __('Ano em que começou a exercer a profissão') }}
                </x-slot>
            </x-inputs.label-input-error>
        </div>
        <div class="col-span-6 sm:col-span-3">
            <x-inputs.label-input-error wire:model="state.professionalDocument" name="professionalDocument" :required="true" type="text">
                <x-slot name="label">
                @if ($specialities['psychology'] === $speciality)
                    {{ __('CRP') }}
                @endif
                @if ($specialities['medicine'] === $speciality)
                    {{ __('CRM') }}
                @endif
                </x-slot>
            </x-inputs.label-input-error>
        </div>
        <div class="col-span-6">
            <x-inputs.label-textarea-error wire:model="state.curriculum" name="curriculum" :required="true" rows="4">
                <x-slot name="label">
                    {{ __('Escreva sobre seu início currículo') }}
                </x-slot>
            </x-inputs.label-textarea-error>
        </div>

        <div class="col-span-6 sm:col-span-3" x-show="speciality === '{{ $specialities['psychology'] }}'">
            <x-inputs.selectmultiple wire:model="state.psychologicalAreas" name="psychologicalAreas" :options="$psychologicalAreas" :required="true">
                <x-slot name="label">
                    {{ __('Áreas de Psicologia') }}
                </x-slot>
            </x-inputs.selectmultiple>
        </div>

        <div class="col-span-6 sm:col-span-3" x-show="speciality === '{{ $specialities['psychology'] }}'">
            <x-inputs.selectmultiple wire:model="state.psychologicalApproaches" name="psychologicalApproaches" :options="$psychologicalApproaches" :required="true">
                <x-slot name="label">
                    {{ __('Abordagens Psicoterapêuticas') }}
                </x-slot>
            </x-inputs.selectmultiple>
        </div>

        <div class="col-span-6 sm:col-span-3" x-show="speciality === '{{ $specialities['medicine'] }}'">
            <x-inputs.selectmultiple wire:model="state.medicalPrimarySpeciality" name="medicalPrimarySpeciality" :options="$medicalPrimarySpeciality" :required="true">
                <x-slot name="label">
                    {{ __('Especialidade Principal') }}
                </x-slot>
            </x-inputs.selectmultiple>
        </div>

        <div class="col-span-6 sm:col-span-3" x-show="speciality === '{{ $specialities['medicine'] }}'">
            <x-inputs.selectmultiple wire:model="state.medicalSecondarySpeciality" name="medicalSecondarySpeciality" :options="$medSecSpecialities">
                <x-slot name="label">
                    {{ __('Especialidade Secundária') }}
                </x-slot>
            </x-inputs.selectmultiple>
        </div>

        <div class="col-span-6 sm:col-span-3">
            <x-inputs.selectmultiple wire:model="state.languages" name="languages" :options="$languages" :required="true">
                <x-slot name="label">
                    {{ __('Idiomas') }}
                </x-slot>
            </x-inputs.selectmultiple>
        </div>

        <div class="col-span-6 sm:col-span-3">
            <x-inputs.selectmultiple wire:model="state.medicalPlans" name="medicalPlans" :options="$medicalPlans" :required="true">
                <x-slot name="label">
                    {{ __('Atendimento Planos de Saúde') }}
                </x-slot>
            </x-inputs.selectmultiple>
        </div>

        <div class="col-span-6 sm:col-span-3">
            <x-inputs.label-input-error wire:model="state.videoUrl" name="video" :required="true" type="text">
                <x-slot name="label">
                    {{ __('(Youtube, Vimeo, etc)') }}
                </x-slot>
            </x-inputs.label-input-error>
        </div>

        <fieldset class="col-span-6">
            <x-inputs.label-checkbox-error wire:model="state.patientGroups" name="patientGroup" :required="true" :options="$patientGroups">
                <x-slot name="label">
                    {{ __('Público-Alvo') }}
                </x-slot>
            </x-inputs.label-checkbox-error>
        </fieldset>
    </div>
    <div class="col-span-6 mt-5 text-center">
        <x-inputs.button wire:click="$emit('back')" type="button"> {{ __('Anterior') }} </x-inputs>
        <x-inputs.button wire:click="validatesChild" type="button" :style="'primary'" class="text-lg py-4 px-5">
            {{ __('Finalizar') }}
        </x-button>
    </div>
</div>
