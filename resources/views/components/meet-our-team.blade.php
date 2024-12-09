<div class="bg-white">
    <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
        <div class="space-y-12 lg:grid lg:grid-cols-3 lg:gap-8 lg:space-y-0">
            <div class="space-y-5 sm:space-y-4">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-700 sm:text-4xl an$ate__animated animate__fadeInLeft">{{ __('Conheça nossa equipe médica') }}</h2>
                <p class="text-xl text-gray-500 animate__animated animate__fadeInUp">{{ __('A Equipe que trabalha a favor da sua saúde e bem-estar') }}</p>
            </div>
            <div class="lg:col-span-2">
                <ul class="space-y-12 sm:divide-y sm:divide-gray-200 sm:space-y-0 sm:-mt-8 lg:gap-x-8 lg:space-y-0">
                    {{ $team }}
                </ul>
            </div>
        </div>
    </div>
</div>
