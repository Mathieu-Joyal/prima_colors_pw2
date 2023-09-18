<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends User
{

    use HasFactory;

    protected $guard = "employe";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'identifiant',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];


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
