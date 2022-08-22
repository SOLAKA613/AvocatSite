<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
   
    use HasFactory;

    protected $table = 'employe';
    protected $primaryKey = 'id_employe';

    public function dossiers()
    {
        return $this->hasMany(Dossier::class, 'id_collaborateur_resp', 'id_employe');
    }

    public function taches()
    {
        return $this->hasMany(Tache::class, 'emp_id_employe', 'id_employe');
    }

    public function employe_qualite()
    {
        return $this->belongsTo(Employe_qualite::class, 'id_employe_qualite', 'id_employe_qualite');
    }

    public function employe_poste()
    {
        return $this->belongsTo(Employe_poste::class, 'id_employe_poste', 'id_employe_poste');
    }

    public function titre()
    {
        return $this->belongsTo(Titre::class, 'id_titre', 'id_titre');
    }

}
