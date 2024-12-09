@props([ 'required' => false, 'options' => $options ])
<style>
    .top-100 {top: 100%}
    .bottom-100 {bottom: 100%}
    .max-h-select {
        max-height: 300px;
    }
</style>

<div
    x-data="{
        open: false,
        selected: [],
        selectedName: [],
        select(optionId, optionName) {
            if (this.selected.includes(optionId)) {
                return
            }
            this.selectedName.push(optionName)
            this.selected.push(optionId)
            @this.set('{{ $attributes['wire:model'] }}', this.selected)
        },
        removeItem(option, index) {
            this.selected.splice(index, 1)
            this.selectedName.splice(index, 1)
            @this.set('{{ $attributes['wire:model'] }}', this.selected)
        }
    }"
>
    <select class="hidden" id="{{ $attributes['name'] }}" wire:model="{{ $attributes['wire:model'] }}" wire:change="{{ $attributes['wire-change'] }}" multiple="multiple">
    </select>
    <x-inputs.label for="{{ $attributes['name'] }}">
        {{ $label }}
        @if ($required)
            <x-span-required />
        @endif
    </x-label>
    <div class="flex flex-col items-center mx-auto">
        <div class="w-full">
            <div class="flex flex-col items-center relative">
                <div class="w-full">
                    <div class="my-2 p-1 flex border border-gray-300 bg-white rounded">
                        <div class="flex flex-auto flex-wrap">
                            <template x-for="(selectItem, index) in selectedName" :key="selectItem">
                                <div class="flex justify-center items-center m-1 font-medium py-1 px-2 rounded-full text-primary-700 bg-gray-50 border border-primary-300 ">
                                    <div class="text-xs font-normal leading-none max-w-full flex-initial" x-text="selectItem"></div>
                                    <div class="flex flex-auto flex-row-reverse">
                                        <div @click="removeItem(selectItem, index)">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x cursor-pointer text-red-300 hover:text-red-400 rounded-full w-4 h-4 ml-2">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                        <div @click="open = !open" class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center border-gray-300">
                            <button class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none" type="button">
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div x-show="open" x-on:click.away="open = false"
                     x-transition:enter="transition ease-out origin-top-left duration-200"
                     x-transition:enter-start="opacity-0 transform scale-90"
                     x-transition:enter-end="opacity-100 transform scale-100"
                     x-transition:leave="transition origin-top-left ease-in duration-100"
                     x-transition:leave-start="opacity-100 transform scale-100"
                     x-transition:leave-end="opacity-0 transform scale-90"
                     class="absolute shadow top-100 bg-white z-40 w-full lef-0 rounded max-h-select overflow-y-auto svelte-5uyqqj"
                >
                    <div class="flex flex-col w-full">
                        @if ($options)
                            @foreach ($options as $option)
                                <div x-on:click="select({{ $option->id }}, '{{ __($option->name) }}')" class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-primary-50">
                                    <div class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative hover:border-primary-100">
                                        <div class="w-full items-center flex">
                                            <div class="mx-2 leading-6 text-gray-600">{{ __($option->name) }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @error($attributes['wire:model'])
        <x-errors.span>{{ $message }}</x-errors.span>
    @enderror
</div>
