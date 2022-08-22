<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Tribunal;
use App\Http\Controllers\TribunalController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DossierController;
use App\Http\Controllers\AvocatController;
use App\Http\Controllers\ClientPositionController;
use App\Http\Controllers\NatureDossierController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\JugeController;
use App\Http\Controllers\CategorieDossiersController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //Begin: Donnees
    public function listConsultant(){
        return view('PagesNavbar.Donnees.consultant.consultant', ['i' => 7,'j' => 2]);
    }
    public function listKadaya(){
        $tribu = new TribunalController();
        $client = new ClientController();
        $dossier = new DossierController();
        $avocat = new AvocatController();
        $client_position = new ClientPositionController();
        $nature_dossier = new NatureDossierController();
        $employe_responsable = new EmployeController();
        $juge = new JugeController();
        $categorie_dossiers = new CategorieDossiersController();

        return view('PagesNavbar.Donnees.kadaya.kadaya', ['tribunals' => $tribu->listTribunals(),
            'clients' => $client->listClients(),
            'dossiers' => $dossier->listDossiers(),
            'avocats' => $avocat->listAvocats(),
            'client_positions' => $client_position->listClient_position(),
            'nature_dossiers' => $nature_dossier->listNature_dossier(),
            'employe_responsables' => $employe_responsable->listEmployes(),
            'juges' => $juge->listJuges(),
            'categorie_dossiers' => $categorie_dossiers->listCategorie_dossiers(),
            'i' => 4,
            'j' => 2
        ]);
    }
    public function listSeance(){
        return view('PagesNavbar.Donnees.seances.seances', ['i' => 5,'j' => 2]);
    }
    //End: Donnees

    //Begin: MenuControle
    public function listAgenda(){
        return view('PagesNavbar.MenuControle.Agenda.agenda', ['i' => 3,'j' => 1]);
    }

    public function listPanneauControle(){
        return view('PagesNavbar.MenuControle.PanneauControle.panneauControle', ['i' => 1,'j' => 1]);
    }

    public function listRapport(){
        return view('PagesNavbar.MenuControle.Rapports.rapports', ['i' => 2,'j' => 1]);
    }
    //End: MenuControle

    //Begin: Complements_Office
    public function listAnnuaireTelephonique(){
        return view('PagesNavbar.Complements_Office.annuaireTelephonique.annuaireTelephonique', ['i' => 11,'j' => 4]);
    }

    public function listArchive(){
        return view('PagesNavbar.Complements_Office.archives.archives', ['i' => 12,'j' => 4]);
    }

    public function listEmail(){
        return view('PagesNavbar.Complements_Office.email.email', ['i' => 10,'j' => 4]);
    }
    //End: Complements_Office

    //Begin: Boite
    public function listBoite(){
        return view('PagesNavbar.Finance.boite.boite', ['i' => 13,'j' => 5]);
    }
    //End: Boite
}


