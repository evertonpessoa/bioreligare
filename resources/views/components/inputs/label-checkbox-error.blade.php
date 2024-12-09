@props(['disabled' => false, 'required' => false, 'options' => $options ])

<legend class="text-base font-medium text-gray-500">
    {{ $label }}
    @if ($required)
        <x-span-required />
    @endif
</legend>
<div class="col-span-3 mt-4 space-y-4">
    @foreach ($options as $option)
        <div class="h-5 flex items-center">
            <input
                value="{{ $option->id }}"
                name="{{ $option->name }}"
                wire:model.debouce.400ms="{{ $attributes['wire:model'] }}"
                wire:change="{{ $attributes['wire:change'] }}"
                type="checkbox"
                class="focus:ring-primary-500 h-4 w-4 text-primary-600 border-gray-300 rounded"
            >
            <div class="ml-3 text-sm">
                <label for="{{ $option->name }}" class="font-medium text-gray-700">{{ __($option->name) }}</label>
            </div>
        </div>
    @endforeach
</div>
@error($attributes['wire:model'])
    <x-errors.span>{{ $message }}</x-errors.span>
@enderror
