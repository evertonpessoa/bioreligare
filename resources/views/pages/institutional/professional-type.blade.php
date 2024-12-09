<x-institutional-layout>

    <style>
        #container-page {
            display: flex;
            flex-direction: column;
            position: relative;
            background-color: rgba(237, 235, 187, var(--tw-bg-opacity));
            --tw-bg-opacity: 0.2;
            align-items: center;
        }

        #bg-professional-type-content {
            padding-top: 10%;
            padding-bottom: 10%;
            min-height: unset;
        }

        #professional-type-leaves {
            position: absolute;
            color: #0C3D20;
            width: 45px;
            height: 43px;
            left: -22px;
            top: -22px;
        }

        #professional-type-leaves img {
            mix-blend-mode: multiply;
        }

        #wrapper-professional-type-info-mobile {
            display: flex;
            flex-direction: column-reverse;
        }

        #container-title-description-banner {
            width: 100%;
            padding: 0% 5% 0% 5%;
        }

        #professional-type-hero {
            display: flex;
            flex-direction: row;
            position: static;
            margin: 0% 0% 5% 0%
        }

        #container-professional-filter {
            display: flex;
            flex-direction: column;
            width: 100%;
            margin-top: 0%;
        }

        #professional-search {
            display: flex;
            flex-direction: column;
            height: 50%;
            margin: 0% 5% 5% 5%;
        }

        #professional-search input {
            width: 100%;
            margin: 0 auto;
        }

        #container-specialization-icons-filter {
            display: flex;
            flex-direction: row;
            height: 15rem;
            overflow-x: scroll;
            width: 100%;
        }

        #professional-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            flex-basis: 90%;
            margin-left: 5%;
            margin-right: 5%;
            margin-bottom: 5%;
            min-height: 422px;
            z-index: 1;
        }

        #professional-cards-bg {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: space-evenly;
            min-height: 950px;
            background-size: auto 100%;
        }

        #bg-mandala-professional-type {
            position: absolute;
            top: 167px;
            right: 0px;
        }

        @media (min-width: 768px) {

            #professional-type-leaves {
                position: absolute;
                color: #0C3D20;
                width: 45px;
                height: 43px;
                left: -27px;
                top: -22px;
            }

            #professional-card {
                flex-basis: 40%;
            }

            #professional-cards-bg {
                justify-content: center;
            }
        }

        @media (min-width: 1280px) {

            #bg-professional-type-content {
                padding-top: 96px;
                padding-bottom: 96px;
                min-height: 800px;
            }

            #professional-type-leaves {
                top: -44px;
                left: -45px;
                width: 90.29px;
                height: 88.01px;
            }

            #container-title-description-banner {
                width: 80%;
                margin: 0 auto;
                padding: 0% 0% 0% 0%;
            }

            #professional-type-subheading {}

            #professional-type-title {
                margin-top: 8px;
            }

            #professional-type-description {
                margin-top: 40px;
            }

            #professional-type-hero {
                display: flex;
                flex-direction: row;
                position: absolute;
                top: -93px;
                right: -224px;
            }

            #container-specialization-icons-filter {
                overflow-x: auto;
            }

            #container-professional-filter {
                flex-direction: row;
                margin-top: 40px;
                justify-content: center;
                width: 80%;
                margin: 0 auto;
            }

            #professional-search {
                display: flex;
                flex-direction: column;
                height: 50%;
                margin-top: 48px;
                margin-bottom: auto;
            }

            #professional-search input {
                width: 445px;
            }

            #professional-card {
                margin: 0%;
                /* reset */
                flex-basis: 20%;
                margin-left: 2.5%;
                margin-right: 2.5%;
                margin-bottom: 5%;
                z-index: 1;
            }

            #bg-mandala-professional-type {
                position: absolute;
                top: 0px;
                right: 0px;
            }

        }

    </style>

    <x-summary-section>
        <x-slot name="wallpaper">
            <div class="absolute h-800 w-full bg-cover lg:bg-contain bg-center lg:bg-right bg-no-repeat opacity-20 lg:opacity-100"
                style="background-image: url({{ asset('storage/professional_types/' . $professionalType->banner_path) }}); mix-blend-mode: multiply;">
            </div>
        </x-slot>

        <x-slot name="subtitle">
            Clínica
        </x-slot>

        <x-slot name="title">
            {{ $professionalType->title ?? '' }}
        </x-slot>

        <x-slot name="description">
            {!! $professionalType->description ?? '' !!}
        </x-slot>

        <x-slot name="imgTypeHero"></x-slot>
    </x-summary-section>

    {{-- Filtro de profissionais por nome + especialidade --}}
    <div x-data="{
        professionals: {{ json_encode($professionals) }},
        filtrando: '',
        filtro: '',
        filtros: {{ json_encode($filtros) }}
    }">

        <div class="relative mt-10 w-full flex flex-col">

            <div id="professional-search" class="py-4">
                <input class="rounded p-2 bg-gray-100" x-model="filtrando" type="text" placeholder="buscar profissional"
                    id="search" name="search">
            </div>

            <div class="flex justify-center flex-wrap content-start space-y-8 w-full">

                {{-- Icones dos filtros por especialidade --}}

                <template x-for="(btn, index) in filtros" :key="index">
                    <div id="filter-icon-card"
                        class="relative shadow-2xl rounded-2xl text-center text-primary-600 h-40 w-40 bg-secondary-50 ml-10"
                        style="width: 167px;height: 167px;">
                        <a href="">
                            <div x-bind:class="filtro == btn.text ? 'bg-secondary-300 shadow-2xl rounded-2xl' : ''">

                                <div class="m-6 w-auto h-auto" x-on:click.prevent="
                                    if(filtro == '' || filtro != btn.name) {
                                        professionals = {{ json_encode($professionals) }};

                                        professionals = professionals.filter((professional) => {
                                            return professional.specializations[0].name == btn.name
                                        });

                                        filtro = btn.name;
                                        return;
                                    }
                                    professionals = {{ json_encode($professionals) }};
                                    filtro = '';">
                                    <img class="m-auto"
                                        :src="`{{ asset('storage/specializations/') }}/${btn.icon_path}`"
                                        :style="`min-height:90px; min-width:90px; height:90px;`">
                                    <div class="font-black text-sm mt-2">
                                        <span x-text="btn.name"></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </template>
            </div>

        </div>

        <div id="container-professional-cards" class="mt-10 overflow-hidden relative">

            <div id="professional-cards-bg" class="overflow-hidden w-full bg-no-repeat bg-right-bottom">

                {{-- Nome --}}
                <template x-for="(professional, index) in professionals.filter((professional) =>
                    professional.name.toLowerCase().indexOf(filtrando.toLowerCase()) >= 0)" :key="index">
                    <div id="professional-card" class="flex flex-col mb-4 mx-2 shadow-2xl bg-white">

                        {{-- Foto --}}
                        <template x-if="professional.photo_path">
                            <div x-on:click.prevent="professional.show=!professional.show"
                                class="mt-4 w-2/5 lg:w-2/3 bg-cover bg-center"
                                :style="`background-image: url('{{ asset('storage/professional_profiles/') }}/${professional.photo_path}'); height:267px;`">
                            </div>
                        </template>

                        {{-- Redes Sociais --}}
                        <div class="relative flex flex-row justify-center mt-4 md:justify-between">

                            <template x-if="professional.facebook">
                                <div class="w-1/3 flex justify-center items-center align-center bg-gray-100"
                                    style="width: 97px; height: 52px;">
                                    <a :href="professional.facebook"
                                        class="text-gray-400 hover:text-gray-500 bg-gray-100 w-1/3">
                                        <span class="sr-only">Facebook</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8"
                                            fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                        </svg>
                                    </a>
                                </div>
                            </template>

                            <template x-if="professional.instagram">
                                <div class="w-1/3 flex justify-center items-center bg-gray-200"
                                    style="width: 97px; height: 52px;">
                                    <a :href="professional.instagram"
                                        class="text-gray-400 hover:text-gray-500 w-1/3 bg-gray-200">
                                        <span class="sr-only">Instagram</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                        </svg>
                                    </a>
                                </div>
                            </template>


                            <template x-if="professional.linkedin">
                                <div class="w-1/3 flex justify-center items-center bg-gray-100"
                                    style="width: 97px; height: 52px;">
                                    <a :href="professional.linkedin" class="text-gray-400 hover:text-gray-500 ">
                                        <span class="sr-only">LinkedIn</span>
                                        <svg class="h-8 w-8" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                            <path
                                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                        </svg>
                                    </a>
                                </div>
                            </template>
                        </div>

                        {{-- Descrição do Profissional --}}
                        <div id="professional-info" class="pb-4 pt-2">

                            <template x-if="professional.name">
                                <div class="relative ml-4 text-2xl text-primary-700">
                                    <span id="professional.name" x-text="professional.name"></span>
                                </div>
                            </template>

                            <template x-if="professional.specializations[0]">
                                <div class="relative ml-4 text-sm text-primary-700">
                                    <span x-text="professional.specializations[0].name"></span>
                                </div>
                            </template>

                            <template x-if="professional.resumee_body">
                                <div x-show="professional.show" class="relative text-sm text-primary-7000">
                                    <div class="relative ml-4 text-sm text-primary-700">
                                        <span x-text="professional.resumee_body"></span>
                                    </div>
                                </div>
                            </template>

                        </div>
                    </div>
                </template>
            </div>

            <div id="bg-mandala-professional-type">
                <img class="h-full w-auto" src="{{ asset('/img/mandalaFull.png') }}">
            </div>

        </div>

    </div> <!-- closes x-data div -->
</x-institutional-layout>
