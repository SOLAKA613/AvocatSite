<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client_position extends Model
{
    protected $table = 'client_position';
    use HasFactory;

    public function dossiers()
    {
        return $this->hasMany(Dossier::class, 'position_client', 'id');
    }

    public function dossiers2()
    {
        return $this->hasMany(Dossier::class, 'position_opposant', 'id');
    }
    
}
