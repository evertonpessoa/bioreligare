<x-institutional-layout>

    <div class="relative">

        <div class="mt-10 relative" style="height:900px;">
            <div class="relative relative flex h-full bg-center bg-no-repeat bg-contain" style="mix-blend-mode: multiply; width:auto; height:700px; background-image: url({{ asset('storage/banners/'.$banner2[1]->image_path) }})">

                <div class="flex flex-col" style="margin-left:750px;">

                    <div style="font-family: 'Patrick Hand';" class="relative mt-80 text-primary-700 text-5xl h-auto">
                        {{ $banner2[1]->description }}
                    </div>

                    <div class="mt-8 inline-flex rounded-md">
                        <a href="{{ $banner2[1]->link }}" class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700">
                            Saiba mais
                        </a>
                    </div>

                </div>

            </div>
        </div>

        <div class = "relative">
            <img src="{{ asset('storage/banners/'.$banner3[2]->image_path) }}" alt="">
        </div>

    </div>

</x-institutional-layout>
