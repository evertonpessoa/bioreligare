@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white', 'nav' => false])

@php
switch ($align) {
    case 'left':
        $alignmentClasses = 'origin-top-left left-0';
        break;
    case 'top':
        $alignmentClasses = 'origin-top';
        break;
    case 'right':
    default:
        $alignmentClasses = 'origin-top-right right-0';
        break;
}

switch ($width) {
    case '48':
        $width = 'w-48';
        break;
}

if ($nav) {
    $navDropdownHandler = 'timer: {},
        mouseOver() {
            clearTimeout(this.timer);
            this.open = true;
        },
        mouseLeave() {
            this.timer = setTimeout(() => { this.open = false }, 125);
        },
    ';
}
@endphp

<div
    class="relative"
    x-data="{
        open: false,
        {!! $nav ? $navDropdownHandler : '' !!}
    }"
    @click.away="open = false"
    @close.stop="open = false"
    {!! $nav ? 'x-on:mouseenter="mouseOver()"' : '' !!}
    {!! $nav ? 'x-on:mouseleave="mouseLeave()"' : '' !!}
>
    <div @click="open = ! open" class="{{ $nav ? 'h-full' : '' }}" >
        {{ $trigger }}
    </div>

    {{-- <div x-show="open"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="ml-5 mt-1 w-4 h-4 shadow-lg absolute bg-white transform rotate-45 ring-1 ring-black ring-opacity-5">
    </div>
    <div x-show="open"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="ml-5 mt-1 w-4 h-4 z-50 absolute bg-white transform rotate-45">
    </div> --}}
    <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="absolute z-40 mt-2 {{ $width }} shadow-lg {{ $alignmentClasses }}"
            style="display: none;"
            @click="open = false">
        <div class=" ring-1 ring-black ring-opacity-5 {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>
