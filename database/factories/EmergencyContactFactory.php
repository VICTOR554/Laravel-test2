<?php

namespace Database\Factories;
use App\Models\EmergencyContact;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmergencyContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'phone_number' => $this->faker->randomFloat(5, 530, 500),
            'animal_id' => $this->faker->numberBetween(2, 11),
        ];
    }
}
