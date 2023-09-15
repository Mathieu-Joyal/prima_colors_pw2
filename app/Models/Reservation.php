<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    /**
     * Réservation utilisateur pour un forfait
     *
     * @return BelongsToMany
     */
    public function user() {

        return $this->belongsTo(User::class);
    }

    /**
     * Modèle de forfaits disponibles
     *
     * @return BelongsToMany
     */
    public function forfait() {

        return $this->belongsTo(Forfait::class);
    }
}
