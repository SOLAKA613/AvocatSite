<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcedureDossierController extends Controller
{
    //Begin: Donnees
    public function listProcedure(){
        return view('PagesNavbar.Donnees.procedures.procedures', ['i' => 6,'j' => 2]);
    }
    //End: Donnees
}
