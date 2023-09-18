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
            "titre" => ucfirst($this->faker->sentence()),
            "date_publication" => $this->faker->dateTimeBetween('2022-01-01', '2023-12-31')->format('Y-m-d'),
            "description" => $this->faker->paragraph($nbSentences = 5),
            "image" => $this->faker->word(),
            "employe_id" => 2
         ];
    }
}
