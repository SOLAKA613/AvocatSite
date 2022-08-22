<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie_dossier extends Model
{
    use HasFactory;
    public function nature_dossier()
    {
        return $this->belongsTo(Nature_dossier::class, 'id_nature');
    }

    public function dossiers()
    {
        return $this->hasMany(Dossier::class, 'id_categorie');
    }
}
