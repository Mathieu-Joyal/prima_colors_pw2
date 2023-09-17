<?php

namespace Database\Seeders;

use App\Models\Employe;
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

        // Ajout d'un administrateur
        Employe::factory()->create([
            "prenom" => "Prénom-admin",
            "nom" => "Nom-admin",
            "identifiant" => "1234567",
            "password" => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi", // password
            "role_id" => 1
        ]);

        // Ajout d'utilisateurs fictifs
        \App\Models\User::factory(250)->create();

        // Ajout d'employés fictifs
        \App\Models\Employe::factory(25)->create();

        // ajout des activités

        \App\Models\Activite::factory(10)->create();

        // ajout des actualités
        \App\Models\Actualite::factory(10)->create();
    }
}
