<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ActualiteFactory extends Factory
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
            "date_publication" => $this->faker->date(),
            "description" => $this->faker->paragraph(),
            "image" => $this->faker->word(),
            "employe_id" => 2
         ];
    }
}
