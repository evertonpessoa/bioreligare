<?php

namespace Database\Factories;

use App\Domain\User\Models\Address;
use App\Domain\User\Models\PersonalProfile;
use App\Domain\User\Models\ProfessionalProfile;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $isProfessionalProfile = $this->faker->randomElement([true, false]);

        return [
            'street' => $this->faker->streetName,
            'cep' => $this->faker->postcode,
            'number' => $this->faker->buildingNumber,
            'neighborhood' => $this->faker->firstName(),
            'state' => $this->faker->stateAbbr,
            'city' => $this->faker->city,
            'professional_profile_id' => $isProfessionalProfile ? ProfessionalProfile::factory() : null,
            'personal_profile_id' => $isProfessionalProfile ? null : PersonalProfile::factory(),
        ];
    }
}
