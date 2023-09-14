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
    public function user() {

        return $this->belongsTo(User::class);
    }

    /**
     *
     *
     * @return BelongsToMany
     */
    public function forfait() {

        return $this->belongsTo(Forfait::class);
    }
}
