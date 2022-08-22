<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet_paiement extends Model
{
    use HasFactory;
    protected $table = 'projet_paiement';
    protected $primaryKey = 'id_projet_paiement';

    public function Dossier()
    {
        return $this->belongsTo(Dossier::class, 'id_dossier', 'id_dossier');
    }

    public function Projet_paiement_type()
    {
        return $this->belongsTo(Projet_paiement_type::class, 'id_type_paiement', 'id_type_paiement');
    }
}
