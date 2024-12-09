<x-institutional-layout>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        function validation(){
            if (grecaptcha.getResponse() != "") return true;

            alert('Confirme a validação "Não sou um robô"');
            return false;
        }
    </script>

    <style>

        /* Mobile */
            body {
                display: flex;
            }

            #bg-content-container {
                padding-top: 5%;
            }

            #bg-pontinhos-lado-esquerdo-inferior {
                display: none;
            }

            #bg-mandala {
                display: none;
            }

            #content-container {
                display: flex;
                flex-direction: column;
            }

            #contact-page-hero {
                padding-bottom: 5%;
                height: fit-content;
                max-height: 692px;
                max-width: 576px;
                align-items: center;
                justify-content: center;
            }

            #contact-form-container {
                padding-left: 5%;
                padding-right: 5%;
            }

        /* Tablet */
        @media (min-width: 768px) {
            #contact-page-hero {
                padding-bottom: 5%;
            }
        }

        /* Desktop */
        @media (min-width:1280px) {
            /* Content (hero + form) */
            .dev {
                border: 1px dashed red;
            }

            #bg-pontinhos-lado-esquerdo-inferior {
                display: inline;
                position: absolute;
                top: 24%;
                right: 0%;
                left: -2%;
            }

            #bg-mandala {
                display: inline;
                position: absolute;
                top: 40%;
                left: 79%;
                bottom: 53%;
                z-index: 999;
            }

            #bg-content-container {
                padding-bottom: 2%;
                padding-top: 6%;
            }

            #content-container {
                justify-content: center;
                flex-direction: row;
            }

            #contact-page-hero {
                margin-right: 10%;
            }

            /* Button Switch */
            input:checked ~ .dot {
                transform: translateX(100%);
                background-color: #0C3D20;
            }

            .dot {
                left: 5%;
                top: 5%;
            }
        }

    </style>

    {{-- Background: Pontinhos NO TOPO do lado esquerdo --}}
    <svg id="bg-pontinhos-lado-esquerdo-inferior" width="348" height="267" viewBox="0 0 404 404" aria-hidden="true">
        <defs>
        <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="#E5E7EB" />
        </pattern>
        </defs>
        <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
    </svg>

    <div id="bg-content-container" class="bg-white overflow-hidden relative">
        <div class="relative mx-auto">
            <div id="content-container">

                <div id="contact-page-hero" class="flex">
                    <img src="{{ asset('img/contact-page-hero-2.png') }}" alt="">
                </div>

                {{-- Formulário de contato --}}
                <div id="contact-form-container" class="">

                    {{-- Introdução acima do form: Entre em contato + Preencha os campos abaixo para nos contatar... --}}
                    <div class="text-center">
                        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                            {{ __('Entre em contato') }}
                        </h2>
                        <p class="mt-4 text-lg leading-6 text-gray-500">
                            {{ __('Preencha os campos abaixo para nos contatar') }}
                        </p>
                    </div>

                    <form action="{{ route('institutional.contact.sendEmail') }}" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8" onsubmit="return validation()">

                        @csrf

                        <div class="sm:col-span-2">
                            <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Nome') }}</label>
                            <div class="mt-1">
                            <input type="text" name="name" id="name" autocomplete="name" required class="py-3 px-4 block w-full shadow-sm focus:ring-primary-500 focus:border-primary-500 border-gray-300 rounded-md">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                            <div class="mt-1">
                            <input id="email" name="email" type="email" autocomplete="email" required class="py-3 px-4 block w-full shadow-sm focus:ring-primary-500 focus:border-primary-500 border-gray-300 rounded-md">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="subject" class="block text-sm font-medium text-gray-700">{{ __('Assunto') }}</label>
                            <div class="mt-1">
                            <input name="subject" type="text" required class="py-3 px-4 block w-full shadow-sm focus:ring-primary-500 focus:border-primary-500 border-gray-300 rounded-md">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="message" class="block text-sm font-medium text-gray-700">{{ __('Mensagem') }}</label>
                            <div class="mt-1">
                                <textarea id="message" name="message" rows="4" required class="py-3 px-4 block w-full shadow-sm focus:ring-primary-500 focus:border-primary-500 border border-gray-300 rounded-md"></textarea>
                            </div>
                        </div>

                        <div class="sm:col-span-2 space-y-8">

                            {{-- Switch Button's Container --}}
                            <div class="flex flex-col items-start">

                                <label for="newsletter-optin" class="flex items-center mb-4 cursor-pointer">

                                    {{-- Button Switch --}}
                                    <div class="relative">
                                        <input type="checkbox" id="newsletter-optin" name="newsletter-optin" class="sr-only" value="aceito-receber-novidades">
                                        <div class="bg-gray-200 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500"></div>
                                        <div class="dot absolute h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></div>
                                    </div>

                                    {{-- Button text --}}
                                    <div class="ml-3">
                                        <p class="text-base text-gray-500">
                                            {{ __('Deseja cadastrar-se em nossa Newsletter?') }}
                                        </p>
                                    </div>

                                </label>


                                <label for="policies-agree" class="flex items-center cursor-pointer">

                                    {{-- Button switch --}}
                                    <div class="relative">
                                        <input type="checkbox" id="policies-agree" required class="sr-only">
                                        <div class="bg-gray-200 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500"></div>
                                        <div class="dot absolute h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></div>
                                    </div>

                                    {{-- Button text --}}
                                    <div class="ml-3">
                                    <p class="text-base text-gray-500">
                                        {{ __('Selecionando isto você concorda com nossa') }}
                                        <a href="#" class="font-medium text-gray-700 underline">{{ __('Política de Privacidades') }}</a>
                                        {{ __('e') }}
                                        <a href="#" class="font-medium text-gray-700 underline">{{ __('Política de Cookies') }}</a>.
                                    </p>
                                    </div>

                                </label>

                            </div>

                            <div class="g-recaptcha" data-sitekey={{env('NOCAPTCHA_SITEKEY')}}></div>

                            <div class="sm:col-span-2">
                                <x-inputs.button type="submit" style='primary' class="w-full"> {{ __('Enviar') }} </x-inputs.button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>

</x-institutional-layout>
