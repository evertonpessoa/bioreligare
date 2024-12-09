@props(['active'])

@php
$classes = ($active ?? false)
            ? 'border-primary-800 text-primary-900 inline-flex items-end px-1 pt-1 border-b-2 text-lg font-bold'
            : 'border-transparent text-primary-900 hover:border-gray-300 hover:text-gray-700 inline-flex items-end px-1 pt-1 border-b-2 text-lg font-medium';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
