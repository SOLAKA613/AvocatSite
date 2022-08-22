<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tribunal extends Model
{
    protected $table = 'tribunal';
    use HasFactory;

    public function dossiers()
    {
        return $this->hasMany(Dossier::class, 'id_tribune');
    }
}
