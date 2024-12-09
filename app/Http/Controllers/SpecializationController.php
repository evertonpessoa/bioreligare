<?php

namespace App\Http\Controllers;

use App\Domain\User\Models\ProfessionalProfile;
use App\Domain\User\Models\Specialization;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpecializationController extends Controller
{
    public function show($slug)
    {
        $specializationData = Specialization::where('slug', $slug)->with('procedures')->first();
        $specializationProcedures = $specializationData->procedures;

        // Buscar profissionais - Consulta dinâmica. Se o slug for neuropsicologia, ele vai retornar somente os profissionais que tem esta especialidade.
        $professionals = ProfessionalProfile::whereHas('specializations', function (Builder $query) use ($specializationData) {
            $query->where('slug', $specializationData->slug);
        })->get();

        return view('pages.institutional.specializations', [
            'specialization' => $specializationData,
            'procedures' => $specializationProcedures,
            'professionals' => $professionals,
        ]);
    }
}
