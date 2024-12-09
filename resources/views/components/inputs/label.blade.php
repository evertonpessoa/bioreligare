@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm font-medium text-gray-500']) }}>
    {{ $value ?? $slot }}
</label>
