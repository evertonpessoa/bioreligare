<div class="relative flex flex-col xl:flex-row mb-12">

    {{-- Imagem do procedimento --}}
    <div class="flex justify-center">
        <img class="rounded-full h-48 w-48" src="{{$attributes['src']}}" >
    </div>

    {{-- Texto descrevendo o procedimento --}}
    <div id="procedure-text" class="relative">
        
        <div class="absolute w-24 -top-12 -left-8 xl:-top-8 xl:-left-12">
            <img src="{{ asset('img/ramo.png') }}">
        </div>

        <p id="procedure-title" class="text-primary-800 text-4xl">
            {{$title}}
        </p>

        <p id="procedure-content">
            {{$content}}
        </p>
    </div>

</div>
