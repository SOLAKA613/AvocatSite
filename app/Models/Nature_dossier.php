<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nature_dossier extends Model
{
    protected $table = 'nature_dossier';
    use HasFactory;

    public function categorie_dossiers()
    {
        return $this->hasMany(Categorie_dossier::class,'id_nature');
    }

    public function dossiers()
    {
        return $this->hasMany(Dossier::class, 'id_nature');
    }
    
}
