<footer class="bg-white" aria-labelledby="footerHeading">

    <style>
        #container-card-contact-info {
            position: absolute;
            --tw-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            top: 12.5rem;
            padding: 0.5rem;
            --tw-bg-opacity: 1;
            background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
            border-radius: 1rem;
            margin-left: auto;
        }

        #container-disclaimer-2 {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        @media (min-width: 1280px){
            #container-card-contact-info {
                position: absolute;
                --tw-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
                right: 6rem;
                top: 2.5rem;
                padding: 0.5rem;
                --tw-bg-opacity: 1;
                background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
                border-radius: 1rem;
                margin-left: auto;
            }
        }
    </style>

    <h2 id="footerHeading" class="sr-only">
        Footer
    </h2>

    {{-- Wrapper --}}
    <div class="w-full mx-auto py-12 lg:py-16">

        {{-- Wrapper --}}
        <div class="space-y-8 xl:col-span-1 md:self-center">

            {{-- Wrapper: Contato + Redes Sociais --}}
            <div class="relative w-full shadow-lg items-center bg-cover bg-no-repeat bg-center flex justify-end" style="height:800px; background-image: url({{ asset('storage/maps/'.$mapInfo[0]->map_image) }})">

                <div id="container-card-contact-info">

                    <div class="flex-wrap mt-6 mb-6 md:mt-4 space-y-3">

                        {{-- Dados da Matriz --}}
                        <div class="ml-8" style="margin-top: 1em; margin-bottom: 1em; font-size: 24px; font-weight: bold; padding-bottom: 0px; margin-bottom: 0px;">
                            <h1>Matriz</h1>
                        </div>

                        <li class="flex space-x-2">
                            <div class="flex-none h-6 w-6 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <a href="https://www.google.com.br/maps/place/{{ $mapInfo[0]->endereco_rua_matriz }}, {{ $mapInfo[0]->endereco_numero_matriz }}" class="text-base text-gray-500 hover:text-gray-900">
                                <p>{{ $mapInfo[0]->endereco_rua_matriz }} {{ $mapInfo[0]->endereco_numero_matriz }}</p>
                                <p class="text-sm">{{ $mapInfo[0]->endereco_complemento_matriz }}</p>
                                <p class="text-sm">{{ $mapInfo[0]->endereco_ponto_referencia_matriz }}</p>
                            </a>
                        </li>

                        <li id="list-email" class="flex space-x-2">
                            <svg class="flex-none h-6 w-6 text-gray-400" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <a href="mailto:{{ $mapInfo[0]->contact_email }}" class="text-base text-gray-500 hover:text-gray-900">
                                {{ $mapInfo[0]->contact_email }}
                            </a>
                        </li>

                        <li id="list-phone" class="flex space-x-2">

                            <div class="flex-none h-6 w-6 text-gray-400">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                                    clip-rule="evenodd" />
                                </svg>
                            </div>

                            <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                                {{ $mapInfo[0]->main_phone }}
                            </a>

                        </li>

                        <li id="list-whatsapp" class="flex space-x-2">

                            <div class="flex-none h-6 w-6 text-gray-400">
                                <svg fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                            </div>

                            <ul id="list-whatsapp-numbers" class="ml-14 flex space-x-3">
                                <li>
                                    <a href="https://api.whatsapp.com/send?phone={{ $mapInfo[0]->whatsapp_principal }}&text=Olá,%20por%20favor,%20poderia%20me%20ajudar?" class="text-base text-gray-500 hover:text-gray-900">
                                        {{ $mapInfo[0]->whatsapp_principal }}
                                    </a>
                                </li>
                                <li>
                                    <a href="https://api.whatsapp.com/send?phone={{ $mapInfo[0]->whatsapp_secundario }}&text=Olá,%20por%20favor,%20poderia%20me%20ajudar?" class="text-base text-gray-500 hover:text-gray-900">
                                        {{ $mapInfo[0]->whatsapp_secundario }}
                                    </a>
                                </li>
                            </ul>

                        </li>

                        {{-- Dados da Filial --}}
                        @if ($mapInfo[0]->endereco_rua_filial)

                            <div class="ml-8" style="margin-top: 1em; margin-bottom: 1em; font-size: 24px; font-weight: bold; padding-bottom: 0px; margin-bottom: 0px;">
                                <h1>Filial</h1>
                            </div>

                            <li class="flex space-x-2">
                                <div class="flex-none h-6 w-6 text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <a href="https://www.google.com.br/maps/place/{{ $mapInfo[0]->endereco_rua_filial }}, {{ $mapInfo[0]->endereco_numero_filial }}" class="text-base text-gray-500 hover:text-gray-900">
                                    <p>{{ $mapInfo[0]->endereco_rua_filial }} {{ $mapInfo[0]->endereco_numero_filial }}</p>
                                    <p class="text-sm">{{ $mapInfo[0]->endereco_complemento_filial }}</p>
                                    <p class="text-sm">{{ $mapInfo[0]->endereco_ponto_referencia_filial }}</p>
                                </a>
                            </li>

                            <li id="list-email" class="flex space-x-2">
                                <svg class="flex-none h-6 w-6 text-gray-400" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <a href="mailto:{{ $mapInfo[0]->filial_contact_email }}" class="text-base text-gray-500 hover:text-gray-900">
                                    {{ $mapInfo[0]->filial_contact_email }}
                                </a>
                            </li>

                            <li id="list-phone" class="flex space-x-2">

                                <div class="flex-none h-6 w-6 text-gray-400">
                                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                                        clip-rule="evenodd" />
                                    </svg>
                                </div>

                                <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                                    {{ $mapInfo[0]->filial_main_phone }}
                                </a>

                            </li>

                            <li id="list-whatsapp" class="flex space-x-2">

                                <div class="flex-none h-6 w-6 text-gray-400">
                                    <svg fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                                </div>

                                <ul id="list-whatsapp-numbers" class="ml-14 flex space-x-3">
                                    <li>
                                        <a href="https://api.whatsapp.com/send?phone={{ $mapInfo[0]->filial_main_whatsapp }}&text=Olá,%20por%20favor,%20poderia%20me%20ajudar?" class="text-base text-gray-500 hover:text-gray-900">
                                            {{ $mapInfo[0]->filial_main_whatsapp }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://api.whatsapp.com/send?phone={{ $mapInfo[0]->filial_secondary_whatsapp }}&text=Olá,%20por%20favor,%20poderia%20me%20ajudar?" class="text-base text-gray-500 hover:text-gray-900">
                                            {{ $mapInfo[0]->filial_secondary_whatsapp }}
                                        </a>
                                    </li>
                                </ul>

                            </li>

                        @endif

                        {{-- Container: Redes Sociais --}}
                        <div id="container-social-media" class="flex justify-center space-x-6 mt-4 mb-4 md:justify-start">
                            <a href="{{ $mapInfo[0]->facebook }}" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">Facebook</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                </svg>
                            </a>

                            <a href="{{ $mapInfo[0]->instagram }}" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">Instagram</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                </svg>
                            </a>

                            @if ($mapInfo[0]->linkedin)
                                <a href="{{ $mapInfo[0]->linkedin }}" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">LinkedIn</span>

                                    <svg class="h-10 w-10" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                    </svg>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="container-copyright" class="mt-8 xl:text-center">

            <div id="container-disclaimer" class="w-full top-0 bg-secondary-200 text-center text-sm text-primary-700">
                <p>
                    ATENÇÃO: Este site não oferece tratamento ou aconselhamento imediato para pessoas em crise suicida. Em caso de crise, ligue para <br>188 (CVV) ou acesse o site www.cvv.org.br. Em caso de emergência, procure atendimento em um hospital mais próximo.
                </p>
            </div>

            <div id="container-disclaimer-2" >
                <p class="text-base text-gray-400">
                    &copy; {{ date('Y') }} Bioreligare, {{ __('Todos os direitos resevados.') }}
                </p>

                <p class="text-sm text-gray-400">
                    <strong class="font-bold mr-2">CNPJ</strong>
                    12.468.233:0001-00
                </p>
            </div>

        </div>

    </div>

</footer>
