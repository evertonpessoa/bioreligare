<style>

    #container-menu-2 {
        display: flex;
        z-index: 9999;
        background-color: white;
        margin-top: 5%;
    }

    #nav-menu {
        z-index: 9999;
    }

    #nav-menu:after {
        content: '';
        clear: both;
        display: table;
    }

    #logo-2 {
        float: left;
        color: black;
        font-size: 27px;
        font-weight: 600;
        line-height: 70px;
        padding-left: 30px;
        width: 100%;
    }

    #logo-2 img {
        height: 70px;
        margin-bottom: 5%;
    }

    #container-menu-link {
        float: left;
        background: white;
        border: 0.5px solid gray;
        margin: 0px;
        display: block;
        width: 100%;
    }

    #menu-link {
        --tw-text-opacity: 1;
        color: rgba(39,67,38,var(--tw-text-opacity));
        text-decoration: none;
        line-height: 70px;
        font-size: 18px;
        padding: 8px 15px;
    }

    #nav-menu ul li a:hover {
        box-shadow: none;
    }

    #nav-menu ul ul li a:hover {
        box-shadow: none;
    }

    #nav-menu ul ul li {
        border-bottom: 0px;
    }

    #nav-menu ul ul ul li {
        position: static;
    }

    #nav-menu ul ul a {
        padding-left: 40px;
    }

    #nav-menu ul ul ul a {
        padding-left: 80px;
    }

    #nav-menu ul ul ul {
        border-top: none;
    }

    #nav-menu ul li:hover > ul {
        top: 70px;
        opacity: 1;
        visibility: visible;
    }

    #nav-menu ul ul li {
        position: relative;
        margin: 0px;
        float: none;
        border-bottom: 1px solid rgba(0,0,0,0.3);

        display: block;
        width: 100%;
    }

    #nav-menu ul ul li a {
        line-height: 50px;
    }

    #nav-menu ul ul ul li {
        position: relative;
        top: 0px;
        left: 0px;
    }

    .show {
        display: block;
        --tw-text-opacity: 1;
        color: rgba(39,67,38,var(--tw-text-opacity));
        font-size: 18px;
        padding: 0 20px;
        padding-left: 15px;
        cursor: pointer;
        line-height: 70px;
    }

    .icon {
        width: 48px;
        height: 48px;
        display: block;
        position: absolute;
        right: 40px;
        line-height: 70px;
        font-size: 25px;
        cursor: pointer;
        background-image: url('/img/hamburger-menu.svg');
        margin-top: 3%;
    }

    .show + a, ul {
        display: none;
    }

    [id^=btn]:checked + ul {
        display: block;
    }

    #nav-menu input {
        display: none;
    }

    #list-menu-links {
        margin-right: 0px;
        float:left;
        list-style: none;
        position: relative;
    }

    #open-third-level {
        padding-left: 10%;
    }

    #menu-layer-collapsed {
        transition: top .3s;
        position: static;
        top: 70px;
        border-top: none;
        float: none;
        display: none;
        opacity: 1;
        visibility: visible;
    }

    #submenu-link {
        --tw-text-opacity: 1;
        color: rgba(39,67,38,var(--tw-text-opacity));
        font-size: 18px;
        padding: 0 20px;
        cursor: pointer;
    }

    /* A propriedades checked simula o evento de onClick do javascript. No mobile não existe o evento :hover, então por isso usei checked. */
    [id^=btn-1]:checked + #menu-layer-collapsed, [id^=btn-2]:checked + #menu-layer-collapsed, [id^=btn-3]:checked + #menu-layer-collapsed {
        display: block;
    }

    @media (min-width: 1280px) {
        #container-menu-2 {
            display: none;
        }
    }

</style>

<div id="container-menu-2">
    <nav id="nav-menu">
        <div id="logo-2">
            <img src="{{ asset('img/LOGO-BIORELIGARE-150px-reg.png') }}" alt="">
        </div>

        <label for="btn" class="icon"></label>
        <input type="checkbox" id="btn">

        <ul id="list-menu-links">
            <li id="container-menu-link">
                <a href="{{ route('institutional.index') }}" :active="request()->routeIs('institutional.index')" id="menu-link">
                    Home
                </a>
            </li>

            {{-- Container: Nossas especialidades + preventiva/integrativa + especialidades --}}
            <li id="container-menu-link">

                <label for="btn-1" class="show">Nossas especialidades</label>
                <input type="checkbox" id="btn-1">

                {{-- Container: Preventiva/Integrativa --}}
                <ul id="menu-layer-collapsed">

                    {{-- Saúde Preventiva --}}
                    <li>
                        <label for="btn-2" class="show" id="open-third-level">Saúde Preventiva</label>
                        <input type="checkbox" id="btn-2">

                        <ul id="menu-layer-collapsed">
                            @foreach ($preventiva as $specialization)
                                <li id="submenu-link"><a href="{{ route('institutional.specializations.show', ['slug' => $specialization->slug]) }}">{{ $specialization->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>

                    {{-- Saúde Integrativa --}}
                    <li>
                        <label for="btn-3" class="show" id="open-third-level">Saúde Integrativa</label>
                        <input type="checkbox" id="btn-3">

                        <ul id="menu-layer-collapsed">
                            @foreach ($integrativa as $specialization)
                                <li id="submenu-link">
                                    <a href="{{ route('institutional.specializations.show', ['slug' => $specialization->slug]) }}">
                                        {{ $specialization->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                </ul>

            </li>

            @foreach ($equipes as $equipe)
                <li id="container-menu-link"><a href="{{ route('institutional.professional-type.show', ['slug' => $equipe->slug]) }}" id="menu-link"> {{ $equipe->title }} </a></li>
            @endforeach

            <li id="container-menu-link"><a href="{{ route('institutional.health-insurances.show') }}" id="menu-link"> Plano de Saúde </a></li>
            <li id="container-menu-link"><a href="{{ route('institutional.contact.show') }}" id="menu-link"> Contato </a></li>

        </ul>
    </nav>

    {{--
        <div href="#" id='a' class="a">
            Hover me
        </div>

        <div id='b'>
            Show me
        </div>
     --}}

</div>
