<?php

namespace Database\Factories;
use App\Models\Employe;

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
           "date" => $this->faker->dateTimeBetween('2023-10-13', '2023-10-16')->format('Y-m-d'),
           "heure" => $this->faker->time(),
           "description" => $this->faker->paragraph(),
           "endroit" => $this->faker->word(),
           "image" => $this->faker->word(),
           "employe_id" => Employe::inRandomOrder()->first()
        ];
    }
}
