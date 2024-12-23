<li
    x-data="{open: false}"
    class="sm:py-8 group md:cursor-pointer"
>
    <div class="space-y-4 sm:grid sm:grid-cols-3 sm:items-start sm:gap-6 sm:space-y-0 md:py-20" @click="open = !open">
        <div class="aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
            <img class="object-cover shadow-lg rounded-lg transform transition-transform duration-400"
                 :class="{'md:scale-150 md:translate-x-72': ! open, 'md:scale-100 md:translate-x-0 ': open }"
                 src="{{ $img }}"
                 alt="">
        </div>
        <div class="sm:col-span-2">
            <div
                class="space-y-4"
                x-show="open"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95"
            >
                <div class="text-lg leading-6 font-medium space-y-1">
                    <h3>{{ $name }}</h3>
                    <p class="text-primary-600">{{ $speciality }}</p>
                </div>
                <div class="text-lg">
                    <p class="text-gray-500">{{ $description ?? '' }}
                        Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985).
                        Residência/Especialização em Mastologia (CREMERN, 1992).
                        Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992).
                        Conselho de Classe: CRM-RN 2119
                    </p>
                </div>
                <ul class="flex space-x-5">
                    <li>
                        @if (isset($linkedin))
                            <a href="{{ $linkedin }}" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">LinkedIn</span>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        @endif
                    </li>
                    <li>
                        @if (isset($email))
                            <a href="{{ $email }}" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">email</span>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        @endif
                    </li>
                    <li>
                        @if (isset($facebook))
                            <a href="{{ $facebook }}" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">facebook</span>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        @endif
                    </li>
                    <li>
                        @if (isset($instagram))
                            <a href="{{ $instagram }}" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">instagram</span>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
</li>
