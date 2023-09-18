<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class RoleFactory extends Factory
{
    /**
     * Définir les propriétés par défaut du modèle Role.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->word(),
        ];
    }
}
