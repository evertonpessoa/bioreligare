<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Domain\User\Models\User;
use Spatie\Permission\Models\Role;
use App\Domain\User\Models\Language;
use App\Domain\User\Enums\GenderEnum;
use App\Domain\User\Models\MedicalPlan;
use App\Domain\User\Models\PatientGroup;
use Illuminate\Foundation\Testing\WithFaker;
use App\Domain\User\Actions\CreateUserAction;
use App\Domain\User\Actions\SetUserRolesAction;
use App\Domain\User\DataTransferObjects\UserData;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Domain\User\Actions\CreatePersonalProfileAction;
use App\Domain\User\DataTransferObjects\PersonalProfileData;
use App\Domain\User\Enums\ProfessionalRoleEnum;

class CreateUserActionsTest extends TestCase
{
    use DatabaseTransactions;
    use WithFaker;

    /*
    public function test_creates_user_action()
    {
        $input = [
            'firstName' => 'Jorge',
            'lastName' => 'Castro',
            'password' => '1234',
            'email' => 'jorgecastro@email.com',
        ];

        $userData = UserData::fromInput($input);

        $this->assertInstanceOf(UserData::class, $userData);

        $action = new CreateUserAction();

        $user = $action->execute($userData);

        $this->assertDatabaseHas($user->getTable(), [
            'id' => $user->id,
        ]);
    }

    public function test_create_personal_profile_for_a_user()
    {
        $user = User::factory()->create();

        $input = [
            'cpf' => '443.517.780-32',
            'rg' => '3424324x',
            'gender' => GenderEnum::MEN,
            'birthday' => '12/12/1984',
            'profession' => 'Analista de Dados',
            'phone' => $this->faker->phoneNumber,
            'photo' => $this->faker->url,
            'acceptScientificCollaboration' => $this->faker->boolean(),
            'personal' => [
                'cep' => $this->faker->postcode,
                'streetAddress' => $this->faker->streetName,
                'streetNumber' => (string) $this->faker->randomNumber(3),
                'complement' => '',
                'neighborhood' => $this->faker->name,
                'city' => $this->faker->city,
                'state' => $this->faker->stateAbbr,
            ],
        ];

        $personalData = PersonalProfileData::fromInput($input);

        $this->assertInstanceOf(PersonalProfileData::class, $personalData);

        $personalProfileCreator = new CreatePersonalProfileAction();

        $personalProfile = $personalProfileCreator->execute($personalData, $user);

        $this->assertDatabaseHas($personalProfile->getTable(), [
            'id' => $personalProfile->id,
            'user_id' => $user->id,
        ]);

        $this->assertNotEmpty($personalProfile->address);
    }

    // O perfil profissional e de usuário será separado agora. Nós excluimos este relacionamento então vou apagar alguns destes testes.

    public function test_professional_medicine_user_has_roles()
    {
        $roles = Role::whereIn('name', ProfessionalRoleEnum::getMedicineRoles())->get();
        $user = User::factory()->create();

        $setUserRole = new SetUserRolesAction();

        $this->assertEmpty($user->roles);

        $setUserRole->execute($user, $roles);

        $this->assertCount(2, $user->roles);
    }

    public function test_professional_psychology_user_has_roles()
    {
        $roles = Role::whereIn('name', ProfessionalRoleEnum::getPsychologyRoles())->get();
        $user = User::factory()->create();

        $setUserRole = new SetUserRolesAction();

        $this->assertEmpty($user->roles);

        $setUserRole->execute($user, $roles);

        $this->assertCount(2, $user->roles);
    }

    protected function getProfessionalProfileBaseInput()
    {
        return [
            'curriculum' => $this->faker->paragraph(),
            'startedWorkingAt' => $this->faker->date('Y'),
            'professionalDocument' => $this->faker->numerify('A######'),
            'commercialPhone' => $this->faker->phoneNumber,
            'degree' => $this->faker->url,
            'ethicalRegulatory' => $this->faker->url,
            'healthCounsil' => $this->faker->url,
            'videoUrl' => $this->faker->url,
        ];
    }

    protected function getProfessionalProfileRelationshipInput()
    {
        return [
            'patientGroups' => PatientGroup::inRandomOrder()->take(3)->get()->pluck('id')->toArray(),
            'medicalPlans' => MedicalPlan::inRandomOrder()->take(3)->get()->pluck('id')->toArray(),
            'languages' => Language::inRandomOrder()->take(3)->get()->pluck('id')->toArray(),
            'professional' => [],
        ];
    }
    */
}
