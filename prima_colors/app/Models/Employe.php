<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    /**
     *
     *
     * @return BelongsTo
     */
    public function role() {
        return $this->belongsTo(Role::class);
    }

    /**
     *
     *
     * @return HasMany
     */
    public function actualites() {
        return $this->hasMany(Actualite::class);
    }

    /**
     *
     *
     * @return HasMany
     */
    public function activites() {
        return $this->hasMany(Activite::class);
    }
}
