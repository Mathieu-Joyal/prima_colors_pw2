<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model implements Authenticatable
{

    // ************************************************************************************************************* //
    // Implémentation de cette section en raison de l'existence de la table "employes".
    // Ajustements apportés pour l'intégrer dans notre système d'authentification. Ces méthodes et configurations garantissent que le système
    // d'authentification fonctionne correctement avec à la fois les utilisateurs et les employés, permettant de faire la distinction
    // entre les deux et de personnaliser leurs processus d'authentification selon les besoins.
    // ************************************************************************************************************* //

    use HasFactory;
    /**
     * Obtenez le nom de l'identifiant unique de l'utilisateur.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return 'identifiant'; // Remplacez par le nom de colonne réel pour l'identification de l'employé.
    }

    /**
     * Obtenez l'identifiant unique de l'utilisateur.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey(); // Remplacez par le nom de la clé primaire réelle si elle est différente.
    }

    /**
     * Obtenez le mot de passe de l'utilisateur.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password; // Remplacez par le nom de colonne réel pour le mot de passe.
    }

    /**
     *Obtenez le jeton de mémorisation pour l'utilisateur.
     *
     * @return string|null
     */
    public function getRememberToken()
    {
        return $this->remember_token;
    }

    /**
     * Définissez le jeton de mémorisation pour l'utilisateur.
     *
     * @param  string  $value
     * @return void
     */
    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    /**
     * Obtenez le nom de la colonne pour le jeton "remember me".
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    // ************************************************************************************************************* //

    /**
     * Employé associé à un rôle
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Actualité liée à un employé
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actualites()
    {
        return $this->hasMany(Actualite::class);
    }

    /**
     * Activité liée à un employé
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activites()
    {
        return $this->hasMany(Activite::class);
    }
}
