<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Audience;
use Illuminate\Http\Request;
use App\Models\Dossier;

class ControllerApiAudience extends Controller
{

    public function listAudiences(){
        try{
             $audiences = Audience::with(['dossier',"Juge","Marqueur"])->get();
            return response()->json([
                'data' => $audiences
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
