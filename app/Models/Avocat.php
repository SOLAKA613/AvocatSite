<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avocat extends Model
{
    use HasFactory;

    public function dossiers()
    {
        return $this->hasMany(Dossier::class, 'id_avocat_responsable', 'id');
    }
}
