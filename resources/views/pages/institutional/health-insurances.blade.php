<x-institutional-layout>

  <div class="bg-secondary-100">

    <div class="max-w-7xl mx-auto py-16 px-4 sm:py-12 sm:px-6 lg:px-8">
      <div class="text-center">
        <p class="mt-1 text-4xl font-extrabold text-primary-900 sm:text-5xl sm:tracking-tight lg:text-6xl" >CONVÊNIOS</p>
        <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">Confira abaixo os convênios atendidos pela Bioreligare </p>
      </div>
    </div>

    <div class="bg-opacity-50" style="background-color: white;">
      <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-8 lg:px-8">
        <div class="grid grid-cols-2 gap-0.5 md:grid-cols-5 lg:mt-8">

            @foreach ($medicalPlans as $medicalPlan)
                <div class="m-2 col-span-1 flex justify-center p-2 bg-gray-50 shadow-lg">
                    <div class="bg-contain bg-center bg-no-repeat h-20 w-full" style="background-image: url('{{ asset('storage/health_plans/'.$medicalPlan->logo_path) }}')"></div>
                </div>
            @endforeach

        </div>
      </div>
    </div>

  </div>

</x-institutional-layout>
