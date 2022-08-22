<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet_tache extends Model
{
    use HasFactory;
    protected $table = 'projet_tache';
    protected $primaryKey = 'id_tache';

    public function taches()
    {
        return $this->hasMany(Tache::class, 'id_projet_tache', 'id_tache');
    }
}
