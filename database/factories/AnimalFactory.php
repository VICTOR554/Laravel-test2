<?php

namespace Database\Factories;
use App\Models\Animal;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnimalFactory extends Factory
{
     /**
     * Name of the factory's corresponding model.
     *
     * @var String
     */


    protected $model = Animal::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'weight' => $this->faker->randomFloat(2, 230, 500),
        ];
    }
}
