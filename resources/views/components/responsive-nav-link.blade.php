@props(['active', 'dd'])

@php
$classes = ($active ?? false)
            ? 'border-primary-400 text-gray-800 block pl-3 pr-4 py-2 border-l-4 text-base font-medium sm:pl-5 sm:pr-6'
            : 'border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium sm:pl-5 sm:pr-6';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
