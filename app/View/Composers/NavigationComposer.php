<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Domain\User\Models\Specialization;
use App\Domain\User\Enums\SpecialtyTypeEnum;
use App\Domain\User\Models\ProfessionalType;
use App\Domain\User\Models\SpecialtyType;

class NavigationComposer
{
    /**
     * Bind data to the view.
     * @param View $view
     * @return void
     */

    // to-do usar model scope ao invés de DB::table
    public function compose(View $view)
    {
        // $preventive = SpecialtyType::with('specializations')->get();
        // SpecialtyType::with('specializations')->get()->groupBy('title')->all()['Preventiva']->first()->specializations;

        $view->with('preventiva', Specialization::where('specialty_type_id', '1')->get());
        $view->with('integrativa', Specialization::where('specialty_type_id', '2')->get());
        $view->with('equipes', ProfessionalType::all());
    }
}
