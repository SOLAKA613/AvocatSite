<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet_paiement_type extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_type_paiement';

    public function Projet_paiements()
    {
        return $this->hasMany(Projet_paiement::class, 'id_type_paiement', 'id_type_paiement');
    }
}
