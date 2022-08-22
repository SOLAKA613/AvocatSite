<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titre extends Model
{
    use HasFactory;
    
    protected $table = 'titre';
    protected $primaryKey = 'id_titre';

    public function employes()
    {
        return $this->hasMany(Employe::class, 'id_titre', 'id_titre');
    }
}
