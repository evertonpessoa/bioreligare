<section role="mentalHealthPost">

    {{-- Imagem --}}
    <div id="yellow-bg" class="px-4 sm:px-6 lg:px-8">
        <div id="hero-{{ $key % 2 === 1 ? 2 : 3 }}"
             class="mb-4 {{ $key % 2 === 0 ? 'right overflow-hidden' : 'left xl:py-0' }}" style="float:{{ $key % 2 === 0 ? 'right' : 'left'}}">
            <img src="{{ asset('storage/mental_health_posts/'.$mentalHealthPost['image_post_path']) }}">
        </div>

        {{-- Título --}}
        <div id="container-article-text-1">
            <div id="article-title" class="z-10">
                <div class="text-base lg:max-w-none">
                    <p class="mt-2 text-center text-3xl font-extrabold leading-8 tracking-tight text-primary-700 sm:text-5xl"
                       style="font-family: 'Patrick Hand'">
                        {{$mentalHealthPost['title']}}
                    </p>
                </div>
            </div>

            {{-- Descrição --}}
            <div class="z-10" x-data="{ open: false }">
                <div :class="open ? '' : 'line-clamp-5'" class="pt-4 text-justify text-gray-500 prose-lg">
                    {!! $mentalHealthPost['description'] !!}
                </div>

                <br/>

                <button
                    class="p-2 text-xl underline text-primary-900 hover:text-indigo-900 focus:outline-none"
                    x-on:click="open = !open"
                >
                    <p x-text="open ? 'Esconder texto' : 'Leia mais'"></p>
                </button>
            </div>

            {{-- Data de publicação --}}
            <div>
                <p class="pt-4 text-justify text-gray-500 prose-lg mb-8">
                    Publicado em {{ date('d/m/Y H:m', strtotime($mentalHealthPost['posted_at'])) }}
                </p>
            </div>
        </div>
    </div>
</section>



