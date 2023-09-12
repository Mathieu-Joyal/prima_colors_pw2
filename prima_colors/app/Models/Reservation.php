<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    /**
     *
     *
     * @return BelongsToMany
     */
    public function users() {

        return $this->belongsToMany(User::class);
    }

    /**
     *
     *
     * @return BelongsToMany
     */
    public function forfaits() {

        return $this->belongsToMany(Forfait::class);
    }
}
