<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nature_dossier_bureau extends Model
{
    protected $table = 'nature_dossier_bureau';
    use HasFactory;


    public function dossier_numerotations()
    {
        return $this->hasMany(Dossier_numerotation::class, 'id_dossier', 'id_dossier');
    }

    public function dossiers()
    {
        return $this->hasMany(Dossier::class, 'id_nature_bureau');
    }
}
