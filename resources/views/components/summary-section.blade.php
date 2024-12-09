<div class="m-auto w-full px-8 bg-secondary-200 bg-opacity-20">
    {{ $wallpaper }}
    <div class="h-1000 py-8 lg:py-24 relative flex flex-col lg:flex-row justify-between m-auto w-full lg:w-4/5">
        
        <div class="flex flex-col lg:flex-row w-full lg:w-1/2">
            <div class="relative w-full text-primary-600" style="min-height: 550px">
                {{-- Raminho de folhas --}}
                <div class="absolute w-24 -top-12 -left-12 ">
                    <img src="{{ asset('img/ramo.png') }}">
                </div>

                <p class="uppercase"> {{ $subtitle }} </p>
                <p class="text-primary-600 text-4xl">{{ $title }}</p>
                <div class="mt-4 text-lg text-justify leading-loose text-primary-600" style="font-family: 'Patrick Hand';">
                     {{ $description }}
                </div>
            </div>
            
        </div>
        <div class="relative h-full w-full lg:w-1/2" >
            {{ $imgTypeHero }}
        </div>
    </div>
</div>