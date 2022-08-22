<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    use HasFactory;
    // public $timestamps = false;
    protected $fillable =[
        'id_nature_jugement',
        'degree_cont',
        'id_tribune',
        'id_nature',
        'id_categorie',
        'sujet',
        'id_client',
        'position_client',
        'id_opposant',
        'position_opposant',
        'numero_ordre',
        'numero_archive',
        'date_dossier_bureau',
        'id_collaborateur_resp',
        'id_avocat_responsable',
        'experience',
        'num_notification',
        'num_notification_libelle',
        'id_commissaire_not',
        'num_execution',
        'num_execution_libelle',
        'id_commissaire_execution',
        'date_audience',
        'id_juge_decideur',
        'procedure',
        'date_ex_1',
        'procedure_demande',
        'decision',
        'num_dossier_1',
        'num_dossier_2',
        'num_dossier_4',
        'num_dossier_3'

    ];
    protected $primaryKey = 'id_dossier';
    public function date_modify()
    {
        $dateEl =$this->value('date_audience');

        return $dateEl==null? null: date('Y-m-d', strtotime($dateEl ));
    }

    public function dicisions()
    {
        return $this->hasMany(Dicision::class, 'id_dossier', 'id_dossier');
    }

    public function audiences()
    {
        return $this->hasMany(Audience::class,'id_dossier', 'id_dossier');
    }

    public function delai_dossiers()
    {
        return $this->hasMany(Delai_dossier::class, 'id_dossier', 'id_dossier');
    }

    public function dossier_numerotations()
    {
        return $this->hasMany(Dossier_numerotation::class, 'id_dossier', 'id_dossier');
    }

    public function procedure_dossiers()
    {
        return $this->hasMany(Procedure_dossier::class, 'id_dossier', 'id_dossier');
    }

    public function Avocat()
    {
        return $this->belongsTo(Avocat::class, 'id_avocat_responsable', 'id');
    }

    public function Categorie_dossier()
    {
        return $this->belongsTo(Categorie_dossier::class, 'id_categorie');
    }

    public function Client_position()
    {
        return $this->belongsTo(Client_position::class, 'position_client', 'id');
    }

    public function Opposant_position()
    {
        return $this->belongsTo(Client_position::class, 'position_opposant', 'id');
    }

    public function Client()
    {
        return $this->belongsTo(Client::class, 'id_client');
    }
    public function Opposant()
    {
        return $this->belongsTo(Client::class, 'id_opposant');
    }

    public function Employe()
    {
        return $this->belongsTo(Employe::class,'id_collaborateur_resp','id_employe');
    }

    public function Juge()
    {
        return $this->belongsTo(Juge::class, 'id_juge_decideur');
    }

    public function Nature_dossier()
    {
        return $this->belongsTo(Nature_dossier::class, 'id_nature');
    }

    public function Tribunal()
    {
        return $this->belongsTo(Tribunal::class, 'id_tribune');
    }

    public function Nature_dossier_bureau()
    {
        return $this->belongsTo(Nature_dossier_bureau::class, 'id_nature_bureau');
    }

    public function Projet_paiement()
    {
        return $this->belongsTo(Projet_paiement::class, 'id_dossier', 'id_dossier');
    }
    
}
