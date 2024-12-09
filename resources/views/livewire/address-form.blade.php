<div class="col-span-full grid grid-cols-6 gap-6">
    <div class="col-span-4">
        <label for="cep" class="block text-sm font-medium text-gray-500">{{ __('CEP') }}
            <x-span-required />
        </label>
        <div class="flex items-center">
            <x-inputs.input type="text" name="cep" autocomplete="postal-code" maxlength="9" placeholder="00000-000" wire:model.debounce.300ms="state.cep"
                            wire:change.debounce.400ms="cepAutocomplete" :disabled="$allowSameAddress" />
            <span wire:loading wire:target="cepAutocomplete">
                <svg class="animate-spin -ml-6 mr-3 h-5 w-5 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                          d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </span>
        </div>
        @error('state.cep')
            <x-errors.span>{{ $message }}</x-errors.span>
        @enderror
    </div>
    <div class="col-span-4 sm:col-span-5">
        <x-inputs.label-input-error wire:model="state.streetAddress" name="street_address" :required="true" type="text" autocomplete="street-address" :disabled="$allowSameAddress">
            <x-slot name="label">
                {{ __('Endereço (Rua/Avenida/Praça)') }}
            </x-slot>
        </x-inputs.label-input-error>
    </div>
    <div class="col-span-2 sm:col-span-1">
        <x-inputs.label-input-error wire:model="state.streetNumber" name="streetNumber" :required="true" type="text" autocomplete="street-number" :disabled="$allowSameAddress">
            <x-slot name="label">
                {{ __('Número') }}
            </x-slot>
        </x-inputs.label-input-error>
    </div>
    <div class="col-span-6 sm:col-span-3">
        <x-inputs.label-input-error wire:model="state.streetComplement" name="street_complement" type="text" autocomplete="street-complement" :disabled="$allowSameAddress">
            <x-slot name="label">
                {{ __('Complemento') }}
            </x-slot>
        </x-inputs.label-input-error>
    </div>
    <div class="col-span-6 sm:col-span-3">
        <x-inputs.label-input-error wire:model="state.neighborhood" name="neighborhood" type="text" autocomplete="neighborhood" :disabled="$allowSameAddress">
            <x-slot name="label">
                {{ __('Bairro') }}
            </x-slot>
        </x-inputs.label-input-error>
    </div>
    <div class="col-span-6 sm:col-span-3">
        <x-inputs.label-input-error wire:model="state.city" name="city" type="text" autocomplete="city" :disabled="$allowSameAddress" :required="true">
            <x-slot name="label">
                {{ __('Cidade') }}
            </x-slot>
        </x-inputs.label-input-error>
    </div>
    <div class="col-span-6 sm:col-span-3">
        <x-inputs.label-select-error :required="true" wire:model="state.state" name="state" autocomplete="state" :disabled="$allowSameAddress">
            <x-slot name="label">
                {{ __('Estado') }}
            </x-slot>
            <x-slot name="append">
                <option></option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </x-slot>
        </x-inputs.label-select-error>
    </div>
</div>
