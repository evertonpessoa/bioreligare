@props(['disabled' => false, 'style' => ''])

@php
$classes = 'py-2 px-3 rounded-md shadow-sm text-sm leading-4 font-medium transition-colors ease-in-out duration-200' . ' ';
if ($disabled) {
    $classes .= 'cursor-not-allowed opacity-75 ';
}
switch ($style) {
    case 'primary':
        $classes .= 'bg-primary-400 font-medium text-white hover:bg-primary-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500';
        break;

    default:
        $classes .= 'bg-white text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 border-gray-300';
        break;
}
@endphp

<button {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
