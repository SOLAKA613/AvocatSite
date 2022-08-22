<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juge extends Model
{
    use HasFactory;

    protected $table = 'juge';
    protected $fillable = ['id', 'nom_ar'];


    public function dossiers()
    {
        return $this->hasMany(Dossier::class, 'id_juge_decideur');
    }

    public function audiences()
    {
        return $this->hasMany(Audience::class, 'id_juge_decideur');
    }
}
