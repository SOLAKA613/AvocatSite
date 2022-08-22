<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe_poste extends Model
{
    use HasFactory;
    protected $table = 'employe_poste';

    protected $primaryKey = 'id_employe_poste';
    
    public function employes()
    {
        return $this->hasMany(Employe::class, 'id_employe_poste', 'id_employe_poste');
    }

}
