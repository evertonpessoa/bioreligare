<x-institutional-layout>

    <!-- Mobile -->
    <style>

        #hero-container {
            display: flex;
            flex-direction: column;
            justify-content: center;

            height:450px;
            --tw-bg-opacity: 0.4;
            background-color: #F4F3DA;
        }

        #hero-img {
            display: flex;
            background-position: center;
            background-repeat: no-repeat;
            background-size: 155% 100%;
            mix-blend-mode: multiply;
            height: 400px;
            background-image: url('/img/bioreligare_Banner_v02(set21).jpg');

            justify-content: center;
            align-items: center;
        }

        #hero-img p {
            font-family: 'Patrick Hand';
            font-size: 3rem;
            line-height: 1;
            text-align: center;

            width: 33%;
            height: auto;

            margin-left:35%;
            margin-top: 10%;
            padding-top: 0%;
        }

        #wellbeing-list {
            display: flex;
            flex-direction: column;
            margin-top: 2.5%;
        }

        #wellbeing-list li {
            margin-top: 2.5%;
            margin-bottom: 2.5%;
        }

        /* Artigos */
        #hero-2, #hero-3 {
            padding-right: 0%;
            padding-left: 0%;
        }

        #article-title {
            padding-bottom: 5%;
        }

        #yellow-bg, #yellow-bg-2 {
            padding-top: 0rem;
            padding-bottom: 0rem;
            width: 100%;
            margin: 0 auto;
        }

        #yellow-bg {
            padding-top: 2rem;
        }

        #tips-section {
            display: flex;
            flex-direction: column;
            margin-top: 0rem;
            margin: 0 auto;
        }

        /* Dicas de Saúde Mental */
        #tips-container {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            background-color: #EDEDED;
            max-width: 1980px;
        }

        #tips-container-title {
            text-align: center;
            align-self: center;
            margin-left: 2.5%;
            margin-right: 2.5%;
            font-size: 1.75rem;

            padding: 64px 0 24px 0;
            font-family: 'Patrick Hand';
            max-width: 500px;
        }

        #tips-container > #tip-card {
            flex-basis: 100%;
        }

        #tip-card {
            display: flex;
            flex-direction: row;
            width: 100%;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        #tips-img {
            flex-basis: 40%;
            max-width: 530px;
        }

        #tips-text {
            font-family: 'Patrick Hand';
            max-width: 440px;
            font-size: 1.75rem;
            padding-left: 5%;
            padding-right: 5%;
        }

    </style>

    <!-- Tablet -->
    <style>
        @media (min-width: 768px) {
            #hero-img {
                background-size: 100% 100%;
            }

            #hero-img p {
                font-size: 4rem;
                margin-left: 40%;
                margin-top: 0%;
                padding-top: 0%;
            }

            #wellbeing-list li {
                margin-top: 1%;
                margin-bottom: 1%;
            }

            #yellow-bg, #yellow-bg-2 {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
        }
    </style>

    <!-- Desktop -->
    <style>

        @media (min-width: 1280px) {

            #hero-container {
                height:1000px;
            }

            #hero-img {
                background-size: cover;
                height:900px;
            }

            #hero-img p {
                font-size: 8rem;

                margin-left: 720px;
                margin-top: 70px;
            }

            /* Artigos */
            #container-article-text-1 {
                padding-top: 24px;
                padding-right: 0px;
                padding-left: 0px;
                padding-bottom: 32px;
            }

            #container-article-text-2 {
                padding-top: 32px;
                padding-left: 0px;
                padding-right: 0px;
                padding-bottom: 32px;
            }

            #hero-2, #hero-3 {
                padding-right: 2rem;
                padding-left: 2rem;
            }

            #hero-2 img, #hero-3 img{
                width: 325px;
            }

            #hero-2 {
                padding-right: 0rem;
            }

            #hero-3 {
                padding-left: 0rem;
            }

            #article-title {
                padding-bottom: 0%;
                padding-right: initial;
            }

            #yellow-bg, #yellow-bg-2 {
                display: block;
                padding-top: 4rem;
                padding-bottom: 4rem;
                width: 80%;
                margin: 0 auto;
            }

            #tips-section {
                margin-top: 2.5rem;
                background-color: #EDEDED;
            }

            /* Dicas de Saúde Mental */
            #tips-container {
                flex-direction: row;
                flex-wrap: wrap;
                width: 100%;

                align-items: flex-start;
                justify-content: flex-start;
            }

            #tips-container-title {
                text-align: center;
                align-self: center;
                margin-left: 0%;
                margin-right: 0%;
                margin-top: 5%;
                font-size: 1.75rem;

                padding:0%;
                font-family: 'Patrick Hand';
                max-width: 500px;
            }

            #tips-container > #tip-card {
                flex-basis: 33%;
            }

            #tip-card {
                justify-content: center;
                align-items: center;
                flex-direction: column;
                height: 550px;
                margin-bottom: 5%;
            }

            #tips-img {
                flex-basis: 40%;
            }

            #tips-text {
                max-width: 440px;
                font-size: 1.5rem;
            }
        }

        @media (min-width: 1680px) {

            #hero-container {
                height:1000px;
            }

            #hero-img {
                background-size: cover;
                height:900px;
            }

            #hero-img p {
                font-size: 8rem;

                margin-left: 720px;
                margin-top: 70px;
            }

            #hero-2 img, #hero-3 img{
                width: 550px;
            }

            /* Artigos */
            #container-article-text-1 {
                padding-top: 8rem;
                padding-right: 22px;
                padding-left: 9rem;
                padding-bottom: 32px;
            }

            #container-article-text-2 {
                padding-top: 11rem;
                padding-left: 6rem;
                padding-right: 2rem;
                padding-bottom: 32px;
            }

            #hero-2, #hero-3 {
                padding-right: 2rem;
                padding-left: 5rem;
            }

            #article-title {
                padding-bottom: 0%;
                padding-right: 2rem;
            }

            #yellow-bg, #yellow-bg-2 {
                display: block;
                padding-top: 4rem;
                padding-bottom: 4rem;
                width: 80%;
                margin: 0 auto;
            }

            #tips-section {
                margin-top: 2.5rem;
                background-color: #EDEDED;
            }

            /* Dicas de Saúde Mental */
            #tips-container {
                flex-direction: row;
                flex-wrap: wrap;
                width: 100%;

                align-items: flex-start;
                justify-content: flex-start;
            }

            #tips-container-title {
                text-align: center;
                align-self: center;
                margin-left: 0%;
                margin-right: 0%;
                margin-top: 5%;
                font-size: 1.75rem;

                padding:0%;
                font-family: 'Patrick Hand';
                max-width: 500px;
            }

            #tips-container > #tip-card {
                flex-basis: 33%;
            }

            #tip-card {
                justify-content: center;
                align-items: center;
                flex-direction: column;
                height: 550px;
                margin-bottom: 5%;
            }

            #tips-img {
                flex-basis: 40%;
            }

            #tips-text {
                max-width: 440px;
                font-size: 1.5rem;
            }
        }

    </style>

    {{-- Hero Saude Mental - Topo --}}
    <div id="hero-container">
        <div id="hero-img">
            <p class="text-primary-700">Saúde Mental</p>
        </div>
    </div>

    {{-- Container: Intro - Por uma cultura de paz, saúde e bem-estar. --}}
    <div class="bg-secondary-100 max-w-full">
        <div class="max-w-5xl mx-auto mt-5 py-16 px-4 sm:py-12 sm:px-6 lg:px-12">
            <div class="text-center">
                <p class="mt-1 text-4xl font-extrabold text-primary-900 sm:text-5xl sm:tracking-tight lg:text-6xl" style="font-family: 'Patrick Hand';">Por uma cultura de paz, saúde e bem-estar. </p>
                <p class="text-justify mt-5 mx-auto text-xl text-gray-500">Acreditamos que o acolhimento, o respeito, a humanização no trato das enfermidades mentais, o incentivo ao autocuidado, a espiritualidade, são bases preventivas fundamentais capazes de promover a saúde mental.</p>
            </div>
            <ul id="wellbeing-list" class="flex flex-col text-justify text-xl list-none text-gray-500">
                <li>• Pare diariamente um pouco, por 1 minuto apenas, relaxe e respire. </li>
                <li>• Quantas vezes você percebe que respira? Medite sobre isso. A sua atenção sobre isso pode fazer a diferença no seu dia a dia.</li>
                <li>• Como você se autopercebe? Você se autoconhece? Em algum momento da tua vida, você já parou para refletir sobre isso? Por onde caminha seus sentimentos e suas emoções? Suas atitudes, palavras e pensamentos estão em harmonia com seus valores e crenças?</li>
                <li>• Qualidade de vida é um remédio preventivo para sua saúde mental.</li>
                <li>• Você tem boa alimentação? Pratica exercícios físicos? Cuida do corpo e da mente com hábitos saudáveis? Interage com a natureza e os elementos naturais do seu planeta? </li>
            </ul>
        </div>
    </div>

    {{-- Seção de Posts --}}
    @foreach($mentalHealthPosts as $key => $mentalHealthPost)
        <x-mental-health-post :key="$key" :mentalHealthPost="$mentalHealthPost"/>
    @endforeach

    {{-- SECTION DE DICAS DE SAÚDE MENTAL --}}
    <div id="tips-section">

        <h2 id="tips-container-title" class="text-3xl font-extrabold text-primary-700 tracking-tight">
            BIO DICAS PARA VOCÊ CUIDAR DA SUA SAÚDE MENTAL E RELIGARE SUA VIDA E BEM-ESTAR
        </h2>

        <div id="tips-container" class="mx-auto sm:pb-24">

            @foreach ($quotes as $quote)
                <div id="tip-card">
                    <div class="flex" id="tips-img">
                        <img src="{{ asset('img/mental_health/'.(string)$quote['image_path']) }}">
                    </div>
                    <div id="tips-text">
                        <p class="text-center leading-8 font-medium tracking-tight text-primary-700">{{ (string)$quote['text'] }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</x-institutional-layout>
