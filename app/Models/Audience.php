<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audience extends Model
{
    protected $table = 'audience';
    protected $primaryKey = 'id_audience';
    use HasFactory;

    public function dossier()
    {
        return $this->belongsTo(Dossier::class,'id_dossier', 'id_dossier');
    }

    public function Juge()
    {
        return $this->belongsTo(Juge::class,'id_juge_decideur');
    }
    public function Marqueur()
    {
        return $this->belongsTo(Marqueur::class,'id_marqueur','id_marqueur');
    }
}
