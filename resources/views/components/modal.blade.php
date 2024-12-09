<div x-data="{ open: false }">
                                <a @click="open=!open" href="#" class="underline text-sm text-gray-600 hover:text-gray-900">{{ $modalTitle }}</a>
                                <div x-show="open" class="fixed z-10 inset-0 overflow-y-auto">
                                    <div x-show="open" class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                        <div
                                            x-transition:enter="transition ease-out duration-300"
                                            x-transition:enter-start="opacity-0"
                                            x-transition:enter-end="opacity-100"
                                            x-transition:leave="ease-in duration-200"
                                            x-transition:leave-start="opacity-100"
                                            x-transition:leave-end="opacity-0"
                                            x-show="open" class="fixed inset-0 transition-opacity" aria-hidden="true"
                                        >
                                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                        </div>
                                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                                        <div
                                            x-transition:enter="ease-out duration-300"
                                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave="ease-in duration-200"
                                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            x-show="open"
                                            x-on:click.away="open = false"
                                            class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full sm:p-6"
                                            role="dialog" aria-modal="true" aria-labelledby="modal-headline"
                                        >
                                            <div>
                                                <div class="mt-3 text-center sm:mt-5">
                                                    <h3 class="text-2xl leading-10 font-medium text-gray-900" id="modal-headline">
                                                        {{ $modalTitle }}
                                                    </h3>
                                                    <div class="mt-2">
                                                        {{$modalContent}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-5 sm:mt-6">
                                                <button type="button" @click="open = false"
                                                        class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-400 text-base font-medium text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                                                    {{ __('Fechar') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    </div>