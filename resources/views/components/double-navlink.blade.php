<div class="relative" x-data="{
    open: false,

    timer: {},

    mouseOver() {
        clearTimeout(this.timer);
        this.open = true;
    },

    mouseLeave() {
        this.timer = setTimeout(() => { this.open = false }, 125);
        },
    }"

    x-on:mouseenter="mouseOver()" x-on:mouseleave="mouseLeave()"
>

        <x-dropdown-link href="#">
            {{$title}}
        </x-dropdown-link>

        <div id="container-menu-links-specializations" class="bg-white ring-1 ring-gray-200 shadow-sm w-40 rounded-sm absolute -right-28 -mr-1 top-0 text-center break-words"
            x-show="open">
            {{$content}}
        </div>

</div>
