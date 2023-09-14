<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forfait extends Model
{
    use HasFactory;

    /**
     *
     *
     * @return BelongsToMany
     */
    public function users() {

        return $this->belongsToMany(User::class, "reservations");
    }

    /**
     *
     *
     * @return HasMany
     */
    public function reservations() {

        return $this->hasMany(Reservation::class);
    }
}
