<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marqueur extends Model
{
    use HasFactory;
    protected $table = 'marqueur';

    protected $primaryKey = 'id_marqueur';

    public function audiences()
    {
        return $this->hasMany(Audience::class, 'id_marqueur','id_marqueur');
    }

    public function procedure_dossiers()
    {
        return $this->hasMany(Procedure_dossier::class, 'id_marqueur','id_marqueur');
    }

}
