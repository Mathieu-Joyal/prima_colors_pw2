<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;

    /**
     * Activité associée à un employé
     *
     * @return BelongsTo
     */
    public function employe() {
        return $this->belongsTo(Employe::class);
    }
}
