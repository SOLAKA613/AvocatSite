<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie_dossier;

class CategorieDossiersController extends Controller
{
    protected $table = 'categorie_dossiers';
    protected $primaryKey = 'id';

    public function listCategorie_dossiers(){
        try{
            return Categorie_dossier::all();
        }catch(Exception $e){
            return  $e->getMessage();
        }   
    }

}
