<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dossier;
use Exception;

class ControllerApiKadaya extends Controller
{

    public function listDossiers(){
        try{
             $dossiers = Dossier::with(['Client','Opposant','Categorie_dossier','Juge','Tribunal','Nature_dossier','Avocat','Client_position','Opposant_position','Employe'])->get();
            return response()->json([
                'data' => $dossiers
            ]);
        }catch(Exception $e){
            return  $e->getMessage();                                                                   
        }   
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
