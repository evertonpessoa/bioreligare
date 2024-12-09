<?php

namespace Database\Factories;

use App\Domain\User\Models\ProfessionalProfile;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Domain\User\Models\User;

class ProfessionalProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProfessionalProfile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'phone' => $this->faker->phoneNumber,
            'professional_document' => $this->faker->numerify('A#####'),
            'started_working_at' => today()->subYears(5),
            'resumee_body' => $this->faker->paragraph(),
            'degree_url' => $this->faker->url(),
            'ethical_regulatory_url' => $this->faker->url(),
            'health_council_url' => $this->faker->url(),
            'video_url' => $this->faker->url(),
            'photo_path' => $this->faker->url(),
            'name' => $this->faker->name(),
            'linkedin' => $this->faker->url(),
            'instagram'=> $this->faker->url(),
            'facebook' => $this->faker->url(),
            'description' => $this->faker->text(),
        ];
    }
}
