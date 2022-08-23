<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Procedure_dossier;
use Exception;

class ControllerApiProcedure extends Controller
{

    public function listProcedures(){
        try{
            $procedures = Procedure_dossier::with(['Dossier'=>function ($q){
                $q->with('Client','Nature_dossier','Tribunal');},'Marqueur'])->get();
            return response()->json([
                'data' => $procedures
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
