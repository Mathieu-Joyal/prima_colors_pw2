<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ActiviteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           "titre" => ucfirst($this->faker->word()),
           "date" => $this->faker->date(),
           "heure" => $this->faker->time(),
           "description" => $this->faker->paragraph(),
           "endroit" => $this->faker->word(),
           "image" => $this->faker->word(),
           "employe_id" => 2
        ];
    }
}
