<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dossier;

class DossierController extends Controller
{ 

    public function listDossiers(){
        try{
            return Dossier::whereId_nature(1)->get();
        }catch(Exception $e){
            return  $e->getMessage();
        }   
    }

    public function store(Request $request)
    {
        $ds = Dossier::updateOrCreate(

            ['id_dossier' =>  request('id_dossier')],        
            ['id_nature_jugement' => request('id_nature_jugement'),
            'degree_cont' => request('degree_cont'),
            'id_tribune' => request('id_tribune'),
            'id_nature' => request('id_nature'),
            'id_categorie' => request('id_categorie'),
            'sujet' => request('sujet'),
            'id_client' => request('id_client'),
            'position_client' => request('position_client'),
            'position_opposant' => request('position_opposant'),
            'numero_ordre' => request('numero_ordre'),
            'numero_archive' => request('numero_archive'),
            'date_dossier_bureau' => request('date_dossier_bureau'),
            'id_collaborateur_resp' => request('id_collaborateur_resp'),
            'id_avocat_responsable' => request('id_avocat_responsable'),
            'experience' => request('experience'),
            'num_notification' => request('num_notification'),
            'num_notification_libelle' => request('num_notification_libelle'),
            'id_commissaire_not' => request('id_commissaire_not'),
            'num_execution' => request('num_execution'),
            'num_execution_libelle' => request('num_execution_libelle'),
            'id_commissaire_execution' => request('id_commissaire_execution'),
            'remarques' => request('remarques'),
            'date_audience' => request('date_audience'),
            'date_audience' => request('date_audience'),
            'id_juge_decideur' => request('id_juge_decideur'),
            'procedure' => request('procedure'),
            'date_ex_1' => request('date_ex_1'),
            'decision' => request('decision'),
            'procedure_demande' => request('procedure_demande'),
            'num_dossier_1' => request('num_dossier_1'),
            'num_dossier_2' => request('num_dossier_2'),
            'num_dossier_4' => request('num_dossier_4'),
            'num_dossier_3' => request('num_dossier_3')
        ]

        );

        return back()->withInput()
            ->with('success','Dossier Created Successfully');
    }


    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request)
    {   
        try{        
            $id = $request->id; 
            $del = Dossier::whereId_dossier($id)->delete();
            return response()->json(['success'=> $del]);
        }catch(Exception $e){
            return response()->json(['error'=> $e->getMessage()]);
        }
    }
}
