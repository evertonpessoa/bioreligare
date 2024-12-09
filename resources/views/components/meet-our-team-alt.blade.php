<div class="bg-white">
    <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
        <div class="space-y-12">
            <div class="div">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-700 sm:text-4xl animate__animated animate__fadeInLeft">{{ __('Conheça nossa Equipe Terapêutica') }}</h2>
                <h3 class="text-lg font-light sm:text-xl text-gray-500 mt-2 animate__animated animate__fadeInDown">{{ __('A Equipe que trabalha a favor da sua saúde e bem-estar') }}</h2>
            </div>
            <ul class="space-y-12 lg:grid lg:grid-cols-2 lg:items-start lg:gap-x-16 lg:gap-y-20 lg:space-y-0">
                {{ $team }}
            </ul>
        </div>
    </div>
</div>
