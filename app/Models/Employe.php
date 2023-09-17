<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Contracts\Auth\Authenticatable;
// use Illuminate\Database\Eloquent\Model;

// class Employe extends Model implements Authenticatable
// {
//     use HasFactory;

//     /**
//      * Employé associé à un rôle
//      *
//      * @return BelongsTo
//      */
//     public function role() {
//         return $this->belongsTo(Role::class);
//     }

//     /**
//      * Actualité liée à un employé
//      *
//      * @return HasMany
//      */
//     public function actualites() {
//         return $this->hasMany(Actualite::class);
//     }

//     /**
//      * Activité liée à un employé
//      *
//      * @return HasMany
//      */
//     public function activites() {
//         return $this->hasMany(Activite::class);
//     }
// }

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model implements Authenticatable
{

    use HasFactory;
    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return 'identifiant'; // Replace with the actual column name for employee identification
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey(); // Assuming the primary key is 'id'; replace with the actual primary key name if different
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password; // Replace with the actual column name for the password
    }

    /**
     * Get the remember token for the user.
     *
     * @return string|null
     */
    public function getRememberToken()
    {
        return $this->remember_token;
    }

    /**
     * Set the remember token for the user.
     *
     * @param  string  $value
     * @return void
     */
    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return 'remember_token';
    }

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
