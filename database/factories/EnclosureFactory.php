<?php

namespace Database\Factories;
use App\Models\Enclosure;

use Illuminate\Database\Eloquent\Factories\Factory;

class EnclosureFactory extends Factory
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
        ];
    }
}
