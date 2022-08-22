<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nature_dossier;

class NatureDossierController extends Controller
{
    public function listNature_dossier(){
        try{
            return Nature_dossier::all();
        }catch(Exception $e){
            return  $e->getMessage();
        }   
    }
}
