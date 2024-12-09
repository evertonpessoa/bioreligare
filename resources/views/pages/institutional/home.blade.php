<x-institutional-layout>

    <style>

        #bg-banner-1 {
            position: absolute;
            right: 0%;
            top: 13%;
            mix-blend-mode: multiply;
            opacity: 0.5;
        }

        #bg-banner-1 img {
            height: 100%;
        }

        #container-home {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #container-home-content {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        #container-mission-values {
            display: flex;
            flex-direction: column;
            z-index: 0;
            margin: 75% 5% 5% 5%;
        }

        #bioreligare-values {
            display: none;
            --tw-text-opacity: 1;
            color: rgba(58,83,66,var(--tw-text-opacity));
            font-size: 24px;
            line-height: 34px;
        }

        #bioreligare-values-mobile {
            display: flex;
            --tw-text-opacity: 1;
            color: rgba(58,83,66,var(--tw-text-opacity));
            font-size: 24px;
            line-height: 34px;
            text-align: center;
        }

        #nova-home-intro {
            display: flex;
            margin: 2.5% 0% 0% 0%;
            width: 100%;
            text-align: center;
            justify-content: initial;
        }

        #container-saude-mental {
            display: flex;
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            mix-blend-mode: multiply;
            height:350px;
            width:auto;
            margin: 0% 0% 30% 0%;
            justify-content: initial;
        }

        #container-saude-mental-info {
            display: flex;
            flex-direction: column;
            margin: 0% 0% 0% 0%;
            align-items:center;
        }

        #saude-mental-descricao {
            font-family: 'Patrick Hand';
            --tw-text-opacity: 1;
            color: rgba(58, 83, 66, var(--tw-text-opacity));
            font-size: 32px;
            line-height: 1;
            text-align: justify;

            margin: 70% 0% 0% 0%;
            width: 70%;
        }

        #saude-mental-cta {
            display: flex;
            justify-content: center;

            margin: 5% 0% 0% 0%;
            padding: 13px 0px 13px 0px;
            width: 70%;

            font-size: 16px;
            font-weight: 500;
            text-align: center;
            color: white;

            border: 1px;
            border-color: transparent;
            border-radius: 0.375rem;
            border-radius: 0.375rem;

            background-color: #0C3D20;
        }

        #saude-mental-cta:hover {
            background-color: #3A5342;
        }

        @media (min-width: 768px) {
            #bioreligare-values {
                display: none;
            }

            #bioreligare-values-mobile {
                display: flex;
                font-size: 48px;
                line-height: 58px;
            }

            #nova-home-intro {
                display: flex;
                text-align: center;
                justify-content: center;
            }

            #container-saude-mental {
                justify-content: center;
            }

            #saude-mental-descricao {
                width: 100%;
            }

            #saude-mental-cta {
                width: 100%;

            }
        }


        @media(min-width: 1280px) {

            #bg-banner-1 {
                right: 0%;
                top: 0%;
                mix-blend-mode: multiply;
                opacity: 1;
            }

            #bg-banner-1 img {
                height: 750px;
            }

            #container-home {
            }

            #container-home-content {
                display: flex;
                width: 80%;
            }

            #container-mission-values {
                margin: 10% 0% 5% 5%;
                --tw-text-opacity: 1;
                color: rgba(58, 83, 66, var(--tw-text-opacity));
                font-size: 2.25rem;
                line-height: 2.5rem;
                height:550px;

                align-items: initial;
            }

            #bioreligare-values {
                display: block;
                font-size: 2.25rem;
                line-height: 2.5rem;
            }

            #bioreligare-values-mobile {
                display: none;
            }

            #nova-home-intro {
                display: block;
                margin: 3% 0% 0% 0%;
                width: 24rem;
                text-align: initial;
                justify-content: initial;
            }

            #container-saude-mental {
                height:700px;
                margin: 0% 0% 5% 0%;
                justify-content: initial;
            }

            #container-saude-mental-info {
                margin: 0% 0% 0% 47%;
                align-items:initial;
            }

            #saude-mental-descricao {
                font-size: 3rem;
                line-height: 1;
                margin: 34% 0% 0% 10%;
                height: auto;
                width: 55%;
            }

            #saude-mental-cta {
                margin: 3% 0% 0% 10%;
                width: 120px;
            }

            #container-especialidades {
                display: flex;
                justify-content: center;
            }



        }

    </style>

    <div id="bg-banner-1">
        <img src="{{ asset('storage/banners/'.$banner1['0']->image_path) }}">
    </div>

    <div id="container-home">

        <div id="container-home-content">

            <div id="container-mission-values">

                <p id="bioreligare-values-mobile">
                    Acolhimento, Respeito, Humanização e Espiritualidade
                </p>

                <p id="bioreligare-values">
                    {!! $banner1[0]->title !!}
                </p>

                <p id="nova-home-intro" class="italic top-1/2 text-primary-700 text-3xl">
                    {!! $banner1[0]->description !!}
                </p>

            </div>

            <div id="container-saude-mental" style="background-image: url({{ asset('storage/banners/'.$banner2[1]->image_path) }})">
                <div id="container-saude-mental-info">

                    <div id="saude-mental-descricao">
                        {!! $banner2[1]->description !!}
                    </div>

                    <div id="saude-mental-cta">
                        <a href="{{ $banner2[1]->link }}">
                            Saiba mais
                        </a>
                    </div>

                </div>
            </div>

            <div id="container-especialidades">
                <img src="{{ asset('storage/banners/'.$banner3[2]->image_path) }}" alt="">
            </div>

        </div>

    </div>

</x-institutional-layout>
