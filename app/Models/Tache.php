<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;
    protected $table = 'tache';
    
    public function Employe()
    {
        return $this->belongsTo(Employe::class, 'emp_id_employe', 'id_employe');
    }

    public function Projet_tache()
    {
        return $this->belongsTo(Projet_tache::class, 'id_projet_tache', 'id_tache');
    }

}
