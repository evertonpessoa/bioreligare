@props(['disabled' => false, 'required' => false ])

<x-inputs.label for="{{ $attributes['name'] }}">
    {{ $label }}
    @if ($required)
        <x-span-required />
    @endif
</x-label>
<div class="mt-1">
    <x-inputs.input
        :disabled="$disabled"
        wire:model.debouce.400ms="{{ $attributes['wire:model'] }}"
        wire:change="{{ $attributes['wire:change'] }}"
        name="{{ $attributes['name'] }}"
        type="{{ $attributes['type'] }}"
        autocomplete="{{ $attributes['autocomplete'] }}"
        placeholder="{{ $attributes['placeholder'] }}"
    />
</div>
@error($attributes['wire:model'])
    <x-errors.span>{{ $message }}</x-errors.span>
@enderror
