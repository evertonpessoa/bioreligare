<?php

namespace Tests\Feature\Livewire;

use App\Domain\User\Enums\ProfessionalTypeEnum;
use Tests\TestCase;
use Livewire\Livewire;
use Mockery\MockInterface;
use App\Http\Livewire\AddressForm;
use Illuminate\Http\UploadedFile;
use App\Services\SearchCepService;
use App\Http\Livewire\Auth\RegisterUserForm;
use App\Http\Livewire\PersonalForm;
use App\Http\Livewire\SpecialityForm;
use App\Http\Livewire\ProfessionalForm;
use App\Http\Livewire\RegisterProfessionalUserForm;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;

class ProfessionalUserRegisterComponentTest extends TestCase
{
    use DatabaseTransactions;
    use WithFaker;

    /*
    public function test_professional_registration_exists()
    {
        $this->get(route('platform.register'))->assertSeeLivewire('auth.register-user-form');
        Livewire::test(RegisterUserForm::class)
            ->set('state.userType', 'professional')
            ->assertSeeHtml('plan-form');
    }

    public function test_professional_registration_has_steps()
    {
        $this->get(route('platform.register'));
        Livewire::test(RegisterProfessionalUserForm::class)
            ->set('step', 'personal')
            ->assertSeeHtml('section id="personal"')
            ->set('step', 'professional')
            ->assertSeeHtml('section id="professional"')
            ->set('step', 'speciality')
            ->assertSeeHtml('section id="speciality"');
    }

    public function test_speciality_step_has_validation_and_change_step()
    {
        $this->get(route('platform.register'));
        $password = $this->faker->password(8);

        Livewire::test(SpecialityForm::class)
            ->set('state.speciality', ProfessionalTypeEnum::PSYCHOLOGY)
            ->set('state.email', $this->faker->email)
            ->set('state.password', $password)
            ->set('state.confirmPassword', $password)
            ->assertHasNoErrors(['state.speciality', 'state.email', 'state.password', 'state.confirmPassword'])
            ->call('next')->assertEmitted('next');
    }

    public function test_speciality_step_fails_validation_and_dont_change_step()
    {
        $this->get(route('platform.register'));
        Livewire::test(SpecialityForm::class)
            ->set('state.speciality', '')
            ->set('state.email', '')
            ->set('state.password', '')
            ->set('state.confirmPassword', '')
            ->assertHasErrors(['state.speciality', 'state.email', 'state.password', 'state.confirmPassword'])
            ->call('next')->assertNotEmitted('next');
    }

    public function test_personal_step_has_validation_and_change_step()
    {
        $this->get(route('platform.register'));

        $step = 'personal';

        Livewire::test(PersonalForm::class, ['step' => $step])
            ->set('state.firstName', $this->faker->name())
            ->set('state.lastName', $this->faker->lastName())
            ->set('state.cpf', '775.184.890-15')
            ->set('state.rg', '296212477')
            ->set('state.birthday', '15/03/1991')
            ->set('state.gender', 'Masculino')
            ->set('state.phone', '(11) 97499-7662')
            ->set('photo', UploadedFile::fake()->image('profile.jpg'))
            ->assertHasNoErrors(['state.firstName', 'state.lastName', 'state.birthday', 'state.cpf', 'state.rg', 'state.gender', 'state.phone'])
            ->call('childrenValidated', [$step => []])
            ->assertEmitted('next');
    }

    public function test_personal_step_fails_validation_and_dont_change_step()
    {
        $this->get(route('platform.register'));

        $step = 'personal';

        Livewire::test(PersonalForm::class, ['step' => $step])
            ->set('state.firstName', '')
            ->set('state.lastName', '')
            ->set('state.birthday', '')
            ->set('state.cpf', '')
            ->set('state.rg', '')
            ->set('state.gender', '')
            ->set('state.phone', '')
            ->assertHasErrors(['state.firstName', 'state.lastName', 'state.birthday', 'state.cpf', 'state.rg', 'state.gender', 'state.phone'])
            ->call('childrenValidated', [$step => []])
            ->assertNotEmitted('next');
    }

    public function test_professional_step_validates_psychologist_user_and_change_step()
    {
        $this->get(route('platform.register'));

        $step = 'professional';
        $speciality = ProfessionalTypeEnum::PSYCHOLOGY;

        Livewire::test(ProfessionalForm::class, ['step' => $step])
            ->call('specialitySet', $speciality)
            ->set('degree', UploadedFile::fake()->image('degree.jpg'))
            ->set('ethicalRegulatory', UploadedFile::fake()->image('ethicalRegulatory.jpg'))
            ->set('healthCounsil', UploadedFile::fake()->image('healthCounsil.jpg'))
            ->set('state.curriculum', $this->faker->text())
            ->set('state.medicalPlans', ['Unimed', 'Cassi'])
            ->set('state.startedWorkingAt', $this->faker->date('Y'))
            ->set('state.videoUrl', $this->faker->url())
            ->set('state.patientGroups', ['Crianças', 'Idosos'])
            ->set('state.languages', ['Português', 'Ingles'])
            ->set('state.professionalDocument', '2342342')
            ->set('state.psychologicalAreas', ['Ambiental', 'Clinica'])
            ->set('state.psychologicalApproaches', ['Comportamental', 'Holistica'])
            ->assertHasNoErrors([
                'degree',
                'healthCounsil',
                'state.curriculum',
                'state.medicalPlans',
                'state.startedWorkingAt',
                'state.videoUrl',
                'state.patientGroups',
                'state.languages',
                'state.professionalDocument',
                'state.psychologicalAreas',
                'state.psychologicalApproaches',
            ])
            ->call('childrenValidated', [$step => []])
            ->assertEmitted('next');
    }

    public function test_professional_step_fails_validation_on_psychologist_user_and_dont_change_step()
    {
        $this->get(route('platform.register'));

        $step = 'professional';
        $speciality = ProfessionalTypeEnum::PSYCHOLOGY;

        Livewire::test(ProfessionalForm::class, ['step' => $step])
            ->call('specialitySet', $speciality)
            ->set('degree', '')
            ->set('ethicalRegulatory', '')
            ->set('healthCounsil', '')
            ->set('state.curriculum', '')
            ->set('state.medicalPlans', '')
            ->set('state.startedWorkingAt', '')
            ->set('state.videoUrl', '')
            ->set('state.patientGroups', '')
            ->set('state.languages', '')
            ->set('state.professionalDocument', '')
            ->set('state.psychologicalAreas', '')
            ->set('state.psychologicalApproaches', '')
            ->assertHasErrors([
                'degree',
                'healthCounsil',
                'state.curriculum',
                'state.medicalPlans',
                'state.startedWorkingAt',
                'state.patientGroups',
                'state.languages',
                'state.professionalDocument',
                'state.psychologicalAreas',
                'state.psychologicalApproaches',
            ])
            ->call('childrenValidated', [$step => []])
            ->assertNotEmitted('next');
    }

    public function test_professional_step_validates_medical_user_and_change_step()
    {
        $this->get(route('platform.register'));

        $step = 'professional';
        $speciality = ProfessionalTypeEnum::MEDICINE;

        Livewire::test(ProfessionalForm::class, ['step' => $step])
            ->call('specialitySet', $speciality)
            ->set('degree', UploadedFile::fake()->image('degree.jpg'))
            ->set('ethicalRegulatory', UploadedFile::fake()->image('ethicalRegulatory.jpg'))
            ->set('healthCounsil', UploadedFile::fake()->image('healthCounsil.jpg'))
            ->set('state.curriculum', $this->faker->text())
            ->set('state.medicalPlans', ['Unimed', 'Cassi'])
            ->set('state.startedWorkingAt', $this->faker->date('Y'))
            ->set('state.videoUrl', $this->faker->url())
            ->set('state.patientGroups', ['Crianças', 'Idosos'])
            ->set('state.languages', ['Português', 'Ingles'])
            ->set('state.professionalDocument', '2342342')
            ->set('state.medicalPrimarySpeciality', ['Cardiolgia'])
            ->assertHasNoErrors([
                'degree',
                'healthCounsil',
                'state.curriculum',
                'state.medicalPlans',
                'state.startedWorkingAt',
                'state.videoUrl',
                'state.patientGroups',
                'state.languages',
                'state.professionalDocument',
                'state.medicalPrimarySpeciality',
            ])
            ->call('childrenValidated', [$step => []])
            ->assertEmitted('next');
    }

    public function test_professional_step_fails_validation_on_medical_user_and_dont_change_step()
    {
        $this->get(route('platform.register'));

        $step = 'professional';
        $speciality = ProfessionalTypeEnum::MEDICINE;

        Livewire::test(ProfessionalForm::class, ['step' => $step])
            ->call('specialitySet', $speciality)
            ->set('degree', '')
            ->set('ethicalRegulatory', '')
            ->set('healthCounsil', '')
            ->set('state.curriculum', '')
            ->set('state.medicalPlans', '')
            ->set('state.startedWorkingAt', '')
            ->set('state.videoUrl', '')
            ->set('state.patientGroups', '')
            ->set('state.languages', '')
            ->set('state.professionalDocument', '')
            ->set('state.medicalPrimarySpeciality', '')
            ->assertHasErrors([
                'degree',
                'healthCounsil',
                'state.curriculum',
                'state.medicalPlans',
                'state.startedWorkingAt',
                'state.patientGroups',
                'state.languages',
                'state.professionalDocument',
                'state.medicalPrimarySpeciality',
            ])
            ->call('childrenValidated', [$step => []])
            ->assertNotEmitted('next');
    }

    public function test_address_form_has_valid_input_and_emmits()
    {
        $this->get(route('platform.register'));

        $step = 'personal';

        Livewire::test(AddressForm::class, ['step' => $step])
            ->set('state.streetAddress', 'Travessa Santo Antônio')
            ->set('state.cep', '45607-120')
            ->set('state.streetNumber', '842')
            ->set('state.streetComplement', '')
            ->set('state.neighborhood', 'São Caetano')
            ->set('state.city', 'Itabuna')
            ->set('state.state', 'BA')
            ->assertHasNoErrors(['state.streetAddress', 'state.cep', 'state.streetNumber', 'state.city', 'state.state'])
            ->call('validateChild', $step)
            ->assertEmitted('childrenValidated');
    }

    public function test_address_form_fails_validation_and_dont_emmits()
    {
        $this->get(route('platform.register'));

        $step = 'personal';

        Livewire::test(AddressForm::class, ['step' => $step])
            ->set('state.streetAddress', '')
            ->set('state.cep', '')
            ->set('state.streetNumber', '')
            ->set('state.streetComplement', '')
            ->set('state.neighborhood', '')
            ->set('state.city', '')
            ->set('state.state', '')
            ->assertHasErrors(['state.streetAddress', 'state.cep', 'state.streetNumber', 'state.city', 'state.state'])
            ->call('validateChild', $step)
            ->assertNotEmitted('childrenValidated');
    }

    public function test_address_form_emmits_validation_when_its_allowed_to_use_personal_address()
    {
        $this->get(route('platform.register'));

        $step = 'professional';

        Livewire::test(AddressForm::class, ['step' => $step])
            ->call('allowSameAddress', $step)
            ->call('validateChild', $step)
            ->assertEmitted('childrenValidated');
    }

    public function test_address_form_autocomplete_function()
    {
        $this->get(route('platform.register'));

        $step = 'personal';
        $cep = '45607120';
        $neighborhood = 'São Caetano';
        $city = 'Itabuna';
        $state = 'BA';
        $address = 'Travessa Santo Antônio';

        $this->mock(SearchCepService::class, function (MockInterface $mock) use ($cep, $neighborhood, $address, $state, $city) {
            $mock->shouldReceive('fetchAddress')->with($cep)->once()->andReturn([
                'street' => $address,
                'neighborhood' => $neighborhood,
                'city' => $city,
                'state' => $state,
                'cep' => $cep,
            ]);
        });

        $cep = '45607-120';

        Livewire::test(AddressForm::class, ['step' => $step])
            ->set('state.cep', $cep)
            ->call('cepAutocomplete')
            ->assertSet('state.streetAddress', $address)
            ->assertSet('state.cep', $cep)
            ->assertSet('state.city', $city)
            ->assertSet('state.state', $state)
            ->assertSet('state.neighborhood', $neighborhood);
    }
    */
}
