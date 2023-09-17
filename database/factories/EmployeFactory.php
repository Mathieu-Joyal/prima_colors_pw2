<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmployeFactory extends Factory
{
    /**
     * Définir les propriétés par défaut du modèle Employe.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'prenom' => $this->faker->firstname(),
            'nom' => $this->faker->lastname(),
            'identifiant' => $this->faker->unique()->numberBetween(1111111, 9999999),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role_id' => 2,
            'remember_token' => Str::random(10),
        ];
    }
}
