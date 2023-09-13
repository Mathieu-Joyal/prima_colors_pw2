<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Ajout des rôles
        Role::factory()->create([
            "nom" => "Administrateur",
        ]);

        Role::factory()->create([
            "nom" => "Employé",
        ]);

        // Ajout d'utilisateurs fictifs
        \App\Models\User::factory(250)->create();

        // Ajout d'employés fictifs
        \App\Models\Employe::factory(25)->create();


    }
}
