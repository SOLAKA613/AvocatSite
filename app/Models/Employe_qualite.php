<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe_qualite extends Model
{
    use HasFactory;

    protected $table = 'employe_qualite';
    protected $primaryKey = 'id_employe_qualite';

    public function employes()
    {
        return $this->hasMany(Employe::class, 'id_employe_qualite', 'id_employe_qualite');
    }
}
