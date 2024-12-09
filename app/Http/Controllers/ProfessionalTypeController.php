<?php

namespace App\Http\Controllers;

use App\Domain\User\Enums\ProfessionalTypeEnum;
use App\Domain\User\Models\ProfessionalProfile;
use App\Domain\User\Models\ProfessionalType;
use App\Domain\User\Models\Specialization;
use App\Enum\ButtonsFilters;
use Illuminate\Http\Request;

class ProfessionalTypeController extends Controller
{
    public function show($slug)
    {
        // Equipe medica ou Equipe terapeutica (mostra o titulo, descrição e banner)
        $professionalTypeData = ProfessionalType::where('slug', $slug)->first();

        // Buscar profissionais - Consulta dinâmica. Se o slug for equipe-medica, ele vai pegar o ID deste slug e passar como parâmetro para a consulta abaixo
        $professionals = ProfessionalProfile::where('professional_type_id', $professionalTypeData->id)->with('specializations')->get();

        // Buscar especialidade (nome + icone). Gerenciado pelo nova.
        $filtros = Specialization::where('professional_type_id', $professionalTypeData->id)
            ->orderBy('order', 'asc')
            ->get();

        return view('pages.institutional.professional-type', [
        'professionalType' => $professionalTypeData,
        'professionals' => $professionals,
        'filtros' => $filtros
        ]);
    }
}

