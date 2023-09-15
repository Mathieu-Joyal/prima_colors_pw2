<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    /**
     * Employé associé à un rôle
     *
     * @return BelongsTo
     */
    public function role() {
        return $this->belongsTo(Role::class);
    }

    /**
     * Actualité liée à un employé
     *
     * @return HasMany
     */
    public function actualites() {
        return $this->hasMany(Actualite::class);
    }

    /**
     * Activité liée à un employé
     *
     * @return HasMany
     */
    public function activites() {
        return $this->hasMany(Activite::class);
    }
}
