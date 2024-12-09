<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Patrick Hand' rel='stylesheet'>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <script>
            (function(d,t) {
              var BASE_URL="https://app.chatwoot.com";
              var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
              g.src=BASE_URL+"/packs/js/sdk.js";
              g.defer = true;
              g.async = true;
              s.parentNode.insertBefore(g,s);
              g.onload=function(){
                window.chatwootSettings = {
                type: 'expanded_bubble',
                launcherTitle: 'Fale conosco'
                },
                window.chatwootSDK.run({
                  websiteToken: 'rtTDo8jX5z3zXpsQH44Y8poL',
                  baseUrl: BASE_URL
                })
              }
            })(document,"script");
        </script>

        @livewireStyles

        <!-- Scripts -->
        {{-- <script async defer src="https://www.hipaatraining.com/badge-script" ></script> <!-- Hipaa Compliance Badge --> --}}
        <script src="{{ asset('js/app.js') }}" defer></script>
        {{$scriptHome ?? ''}}
    </head>

    <body class="font-sans antialiased flex flex-col">

        {{-- Menu --}}
        @include('layouts.institutional.navigation')
        @include('layouts.institutional.navigation-mobile')

        {{-- Conteúdo da Página --}}
        <main class="min-h-screen overflow-x-hidden">
            <div class="mx-auto">
            {{ $slot }}
            </div>
        </main>

        {{-- Footer --}}
        <div id="container-footer">
            @include('layouts.institutional.footer')
        </div>

        @livewireScripts

    </body>

</html>
