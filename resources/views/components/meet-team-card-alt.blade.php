<li>
    <div class="space-y-4 sm:grid sm:grid-cols-3 sm:gap-6 sm:space-y-0 lg:gap-8">
        <div class="h-0 aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
            <img class="object-cover shadow-lg rounded-lg animate__animated animate__fadeIn animate__slow"
                 src="{{ $img }}"
                 alt="">
        </div>
        <div class="sm:col-span-2">
            <div class="space-y-4">
                <div class="text-lg leading-6 font-medium space-y-1 animate__animated animate__fadeInUp">
                    <h3>{{ $name }}</h3>
                    <p class="text-primary-600 text-sm">{{ $speciality }}</p>
                </div>
                <div class="text-base">
                    <p class="text-gray-500 animate__animated animate__fadeInUp">
                        {{ $description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</li>
