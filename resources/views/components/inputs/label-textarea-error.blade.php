@props(['disabled' => false, 'required' => false])

<x-inputs.label for="{{ $attributes['name'] }}">
    {{ $label }}
    @if ($required)
        <x-span-required />
    @endif
</x-label>
<textarea {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge([ 'class' => 'mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm' ]) }}>
    {{ $slot }}
</textarea>
@error($attributes['wire:model'])
    <x-errors.span>{{ $message }}</x-errors.span>
@enderror
