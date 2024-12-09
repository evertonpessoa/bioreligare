<?php

namespace App\Http\Controllers;

use App\Domain\User\Models\MedicalPlan;
use Illuminate\Http\Request;

class MedicalPlanController extends Controller
{
    public function show() {
        $medicalPlans = MedicalPlan::all();

        return view('pages.institutional.health-insurances', [
            'medicalPlans' => $medicalPlans,
        ]);

    }
}
