<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * Rôle associé à plusieurs employés
     *
     * @return HasMany
     */
    public function employes() {
        return $this->hasMany(Employe::class);
    }
}
