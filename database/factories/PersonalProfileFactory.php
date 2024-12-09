<?php

namespace Database\Factories;

use App\Domain\User\Models\PersonalProfile;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Domain\User\Models\User;

class PersonalProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PersonalProfile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cpf' => $this->faker->numerify('###########'),
            'rg' => $this->faker->numerify('#########'),
            'gender' => $this->faker->randomElement($array = ['male', 'female']),
            'user_id' => User::factory(),
            'birthday' => $this->faker->dateTimeThisCentury->format('Y-m-d'),
            'profession' => $this->faker->jobTitle,
            'phone' => $this->faker->phoneNumber,
            'picture_url' => $this->faker->url,
        ];
    }
}
