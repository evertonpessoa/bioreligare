<x-institutional-layout>

    {{-- Mobile --}}
    <style>
        #bg-items-mobile {
            display: static;
            min-height: 350px;
        }

        #bg-dots-top {
            position: absolute;
            left: 35px;
            top: 185px;
            width: 174px;
            height: 134px;
        }

        #bg-specialization-secondary-photo {
            background-size: cover;
            height: 160px;
            width: 160px;
            clip-path: circle(50% at 50% 50%);
            position: absolute;
            right: 155px;
            top: 15px;
            z-index: 2;
        }

        #bg-mandala {
            position: absolute;
            top: 12px;
            right: 60px;
            z-index: 3;
            width: 150px;
            height: 150px;
        }

        #bg-specialization-primary-photo {
            height: 230px;
            width: 230px;
            clip-path: circle(50% at 50% 50%);
            background-size: cover;
            position: absolute;
            right: 50px;
            top: 105px;
            z-index: 4;
        }

        #container-page {
            display: flex;
            flex-direction: column;
            position: relative;
            background-color: rgba(237, 235, 187, var(--tw-bg-opacity));
            --tw-bg-opacity: 0.2;
            align-items: center;
        }

        #container-content,
        #container-procedures {
            width: 100%;
            padding: 0% 5% 0% 5%;
        }

        #container-content {
            position: relative;
            display: flex;
            flex-direction: column;
        }

        #leaves-specialization-title {
            position: absolute;
            width: 45px;
            height: 43px;
            left: -4px;
            top: -26px;
        }

        #container-specialization-info {
            width: 100%;
        }

        #specialization-type {
            font-size: 15px;
            line-height: 18px;
            color: #0C3D20;
            margin-top: 0%;
            margin-left: 0%;
        }

        #specialization-title {
            font-size: 32px;
            line-height: 2.5rem;
            font-family: 'Roboto', 'sans-serif';
            font-weight: 900;
            color: #0C3D20;
            margin-top: 2.5%;
            margin-left: 0%;
        }

        #container-specialization-description {
            color: #0C3D20;
            margin-top: 2.5%;
        }

        #specialization-description-paragraph {
            font-family: 'Roboto', 'sans-serif';
            font-weight: 300;
            font-size: 17px;
            text-align: justify;
            color: #0C3D20;
            margin-top: 0%;
            margin-left: 0%;
            margin-right: 0%;
        }

        #container-procedures {
            display: flex;
            flex-direction: column;
            margin: 25% 0% 0% 0%;
        }

        #procedure-card {
            position: relative;
            margin: 18% 0% 0% 0%;
        }

        #procedure-card:first-of-type {
            position: relative;
            margin: 0% 0% 0% 0%;
        }

        #procedure-text {
            width: 100%;
            margin: 0% 0% 0% 0%;
            padding-right: 3%;
        }

        #procedure-title {
            text-align: center;
            margin-top: 2.5%;
        }

        #procedure-content {
            text-align: justify;
            --tw-text-opacity: 1;
            color: rgba(42, 70, 51, var(--tw-text-opacity));
            font-size: 18px;
            line-height: 28px;
            margin-top: 2.5%;
        }

        #procedure-image {
            display: flex;
            justify-content: center;
        }

        #procedure-image img {
            width: 176px;
            height: 176px;
            border-radius: 50%;
        }

        #leaves-absolute {
            position: absolute;
            width: 45px;
            height: 43px;
            left: 0px;
            top: 0px;
        }

        #wrapper-search-bar {
            display: flex;
            flex-direction: row;
            margin-top: 10%;

            position: relative;
            padding: 0% 0% 0% 5%;
        }

        #search-bar-leaves {
            position: absolute;
            left: -4px;
            top: -20px;
        }

        #search-bar-leaves img {
            width: 45px;
            height: 43px;
            mix-blend-mode: multiply;
        }

        #search-bar-input {
            margin: 5% 0% 0% 0%;
            display: flex;
            flex-direction: column;
            position: relative;
            width: 100%;
        }

        #container-search-bar {
            display: flex;
            flex-direction: column;

            position: relative;
            margin: 0% 0% 0% 0%;
            padding: 0% 0% 0% 0%;
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
        }

        #professional-cards-bg {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: space-evenly;
            min-height: 950px;
            background-image: url('/img/mandalaFull.png');
            justify-content: center;
        }

    </style>

    {{-- Tablet --}}
    <style>
        @media (min-width: 768px) {


            #bg-items-mobile {
                display: static;
            }

            #bg-dots-top {
                left: 19%;
                top: 185px;
            }

            #bg-specialization-secondary-photo {
                right: 47%;
                top: 55px;
            }

            #bg-mandala {
                right: 37%;
                top: 45px;
            }

            #bg-specialization-primary-photo {
                right: 34%;
                top: 126px;
            }

            #professional-card {
                flex-basis: 40%;
            }
        }

    </style>

    {{-- Desktop --}}
    <style>
        @media (min-width: 1280px) {

            #bg-items-mobile {
                display: none;
            }

            #bg-dots-top {
                position: absolute;
                left: 62%;
                top: 71px;
                width: 348px;
                height: 266px;
            }

            #bg-specialization-secondary-photo {
                background-size: cover;
                height: 320px;
                width: 320px;
                clip-path: circle(50% at 50% 50%);
                position: absolute;
                right: 20%;
                top: 192px;
                z-index: 2;
            }

            #bg-mandala {
                position: absolute;
                top: 187px;
                right: 6%;
                z-index: 3;
                width: 327px;
                height: 327px;
            }

            #bg-specialization-primary-photo {
                height: 461px;
                width: 461px;
                clip-path: circle(50% at 50% 50%);
                background-size: cover;
                position: absolute;
                right: 8%;
                top: 369px;
                z-index: 4;
            }

            #container-content {
                min-height: 1000px;
                padding-left: 0%;
                padding-right: 0%;
                padding-top: 0%;
            }

            #container-content,
            #container-procedures {
                width: 80%;
                padding: 0% 0% 0% 0%;
            }

            #leaves-specialization-title {
                position: absolute;
                width: 90px;
                height: 88px;
                left: -7%;
                top: 45%;
            }

            #leaves-specialization-title img {
                mix-blend-mode: multiply;
            }

            #container-specialization-info {
                display: flex;
                flex-direction: column;
                position: relative;
                color: #0C3D20;
                width: 50%;
            }

            #container-positioning-leaves {
                position: relative;
            }

            #specialization-type {
                margin-top: 124px;
                margin-left: 0%;
            }

            #specialization-title {
                color: #0C3D20;
                font-size: 2.25rem;
                line-height: 2.5rem;
                margin-top: 8px;
                margin-left: 0%;
            }

            #container-specialization-description {
                margin-top: 2.5%;
                margin-left: 0%;
                margin-right: 0%;
            }

            #container-procedures {
                margin: 0% 0% 0% 0%;
            }

            #procedure-card {
                margin: 0% 0% 0% 0%;
            }

            #procedure-card:first-of-type {
                margin: 0% 0% 3% 0%;
            }

            #procedure-text {
                width: 100%;
                margin: 0% 0% 0% 0%;
                padding-right: 3%;
            }

            #procedure-title {
                text-align: start;
                margin-top: 2.5%;
            }

            #procedure-card {
                display: flex;
                flex-direction: row;
                margin: 0% 0% 3% 0%;
                align-items: center;
            }

            /* Raminho do card procedimento */
            .leavesPattern #procedure-card #leaves-absolute {
                position: absolute;
                -webkit-transform: scaleY(1);
                transform: scaleY(1);
            }

            #leaves-absolute {
                width: 90px;
                height: 88px;
                top: -10%;
                left: 12%;
            }

            #procedure-image img {
                width: 176px;
                height: 176px;
                border-radius: 50%;
            }

            #procedure-text {
                margin-left: 4%;
                padding-right: 3%;
                width: 50%;
            }

            #wrapper-search-bar {
                margin-top: 5%;
            }

            #search-bar-input {
                margin: 10% 0% 0% 0%;
            }

            #search-bar-leaves {
                left: 40px;
                top: -51px;
            }

            #search-bar-leaves img {
                width: 90.29px;
                height: 88.01px;
            }

            #container-search-bar {
                margin: 0% 0% 0% 0%;
            }

            #professional-card {
                margin: 0%;
                /* reset */
                flex-basis: 20%;
                margin-left: 2.5%;
                margin-right: 2.5%;
                margin-bottom: 5%;
            }
        }

    </style>

    <div id="container-page">

        <x-summary-section>
            <x-slot name="wallpaper"></x-slot>

            <x-slot name="subtitle">
                Medicina Integrativa
            </x-slot>

            <x-slot name="title">
                {{ $specialization->name }}
            </x-slot>

            <x-slot name="description">
                {!! $specialization->description !!}
            </x-slot>

            <x-slot name="imgTypeHero">

                <div class="absolute bg-cover bg-center h-48 w-48 lg:h-96 lg:w-96 z-10"
                    style="background-image: url({{ asset('img/dots.png') }}); mix-blend-mode: multiply;"></div>

                <div class="absolute rounded-full bg-cover bg-center h-48 w-48 lg:h-400 ml-24 lg:ml-4 lg:w-400 mt-8 lg:mt-4 z-30"
                    style="background-image: url({{ asset('storage/specializations/' . $specialization->main_banner_path) }})">
                </div>

                <div class="absolute rounded-full bg-cover bg-center h-48 w-48 lg:h-96 ml-72 lg:w-96 lg:mt-12 lg:ml-80 z-20"
                    style="background-image: url({{ asset('img/bg-mandala.svg') }})"></div>

                <div class="absolute rounded-full bg-cover bg-center h-80 w-80 lg:h-600 lg:w-600 mt-32 ml-48 lg:mt-72 lg:ml-32 z-40"
                    style="background-image: url({{ asset('storage/specializations/' . $specialization->secondary_banner_path) }})">
                </div>

            </x-slot>
        </x-summary-section>

        <div id="container-procedures" class="leavesPattern">

            @if ($procedures)

                @foreach ($procedures as $procedure)
                    <x-medicine-item src="{{ asset('storage/procedures/' . $procedure->banner_path) }}">

                        <x-slot name="title">
                            {{ $procedure->title ?? '' }}
                        </x-slot>

                        <x-slot name="content">
                            {{ $procedure->description ?? '' }}
                        </x-slot>

                    </x-medicine-item>
                @endforeach

            @endif

        </div> {{-- Closes: container-procedures --}}

    </div> {{-- Closes: container-page --}}


    <div id="container-professionals" x-data="{ professionals: {{ json_encode($professionals) }}, filtrando: '' }">

        <div class="relative m-auto flex lg:w-4/5">

            {{-- Ramo de folhas --}}
            <div class="absolute w-24 -top-12 left-4 lg:-left-16">
                <img src="{{ asset('img/ramo.png') }}">
            </div>

            {{-- Search Bar: Intro --}}
            <div class="flex flex-col w-full">


                <div class="flex flex-col m-auto lg:m-0 lg:justify-start">

                    <p id="search-bar-subheading" class="text-sm text-primary-700">
                        Clínica
                    </p>

                    <p id="search-bar-title" class="font-black text-4xl text-primary-700">
                        Nossos profissionais
                    </p>

                </div>

                {{-- Search Bar --}}
                <div class="px-4 lg:px-0">
                    <input class="rounded p-2 bg-gray-100 w-full my-4" x-model="filtrando" type="text"
                        placeholder="buscar profissional" id="search" name="search">
                </div>

            </div>

        </div>

        <div class="mt-10">
            <div id="professional-cards-bg" class="overflow-hidden w-full bg-no-repeat bg-right">

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

                            <template x-if="professional.specialization">
                                <div class="relative ml-4 text-sm text-primary-700">
                                    <span x-text="professional.specialization.name"></span>
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

                    </div> {{-- Closes: card --}}

                </template> {{-- Closes: x-for --}}
            </div> {{-- Closes: card-background --}}
        </div>
    </div> {{-- Closes: Professionals --}}

</x-institutional-layout>
