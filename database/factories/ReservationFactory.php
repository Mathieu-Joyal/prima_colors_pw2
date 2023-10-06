<?php

namespace Database\Factories;

use App\Models\Forfait;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "forfait_id" => Forfait::inRandomOrder()->first()->id,
            "user_id" => User::inRandomOrder()->first()->id
        ];
    }
}
