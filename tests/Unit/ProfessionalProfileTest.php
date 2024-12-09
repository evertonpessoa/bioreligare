<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Domain\User\Models\Address;
use App\Domain\User\Models\MedicalPlan;
use App\Domain\User\Models\PatientGroup;
use App\Domain\User\Models\ProfessionalProfile;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProfessionalProfileTest extends TestCase
{
    use DatabaseTransactions;

    /*
    public function test_professional_profile_has_medical_plans() {
        $professional = ProfessionalProfile::factory()->create();

        $this->assertCount(0, $professional->fresh()->medicalPlans);

        $medicalPlans = MedicalPlan::first();

        $professional->medicalPlans()->attach($medicalPlans);

        $this->assertTrue($professional->medicalPlans()->first()->is($medicalPlans));
        $this->assertCount(1, $professional->fresh()->medicalPlans);
    }
    public function test_professional_profile_has_pacient_groups() {
        $professional = ProfessionalProfile::factory()->create();

        $this->assertCount(0, $professional->fresh()->patientGroups);

        $pacientGroups = PatientGroup::first();

        $professional->patientGroups()->attach($pacientGroups);

        $this->assertTrue($professional->patientGroups()->first()->is($pacientGroups));
        $this->assertCount(1, $professional->fresh()->patientGroups);
    }

    public function test_professional_profile_has_address() {
        $professional = ProfessionalProfile::factory()->create();

        $address = Address::factory()->create([
            'professional_profile_id' => $professional->id,
            'personal_profile_id' => null,
        ]);

        $this->assertTrue($professional->address()->is($address));
    }
    */
}
