<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DossierController;
use App\Http\Controllers\AudienceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('content.archive');
// });

Route::get('lang/{locale}', [LanguageController::class, 'lang']);

// Route::get('/dashboard', function () {
//     return view('content.archive');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    //Begin: MenuControle
        //Begin: Liste des agendas
        Route::get('/agenda','Controller@listAgenda')->name('Agenda');
        Route::post('/create_agenda', [Controller::class, 'store']);
        Route::delete('/delete_agenda/{id_agenda?}', [Controller::class, 'destroy']);
        Route::delete('/deleteLot_agendas', [Controller::class, 'destroyLot']);
        //End: Liste des agendas
        //Begin: Liste des panneaux controle
        Route::get('/dashboard','Controller@listPanneauControle')->name('PanneauControle');
        Route::post('/create_panneauControle', [Controller::class, 'store']);
        Route::delete('/delete_panneauControle/{id_panneauControle?}', [Controller::class, 'destroy']);
        Route::delete('/deleteLot_panneauControles', [Controller::class, 'destroyLot']);
        //End: Liste des panneaux controle
        //Begin: Liste des Rapports
        Route::get('/rapport','Controller@listRapport')->name('Rapport');
        Route::post('/create_rapport', [Controller::class, 'store']);
        Route::delete('/delete_rapport/{id_rapport?}', [Controller::class, 'destroy']);
        Route::delete('/deleteLot_rapports', [Controller::class, 'destroyLot']);
        //End: Liste des Rapports
    //End: MenuControle
    //Begin: Donnees
        //Begin: Liste des kadayas
        Route::get('/kadaya','Controller@listKadaya')->name('kadaya');
        Route::post('/create_dossier', [DossierController::class, 'store']);
        Route::delete('/delete_dossier/{id_dossier?}', [DossierController::class, 'destroy']);
        Route::delete('/deleteLot_dossiers', [DossierController::class, 'destroyLot']);
        //End: Liste des kadayas
        //Begin: Liste des Seances
        Route::get('/seance','Controller@listSeance')->name('Seance');
        Route::post('/create_seance', [Controller::class, 'store']);
        Route::delete('/delete_seance/{id_seance?}', [Controller::class, 'destroy']);
        Route::delete('/deleteLot_seances', [Controller::class, 'destroyLot']);
        //End: Liste des Seances
        //Begin: Liste des Procedures
        Route::get('/procedure','ProcedureDossierController@listProcedure')->name('Procedure');
        Route::post('/create_procedure', [ProcedureDossierController::class, 'store']);
        Route::delete('/delete_procedure/{id_procedure?}', [ProcedureDossierController::class, 'destroy']);
        Route::delete('/deleteLot_procedures', [ProcedureDossierController::class, 'destroyLot']);
        //End: Liste des Procedures
        //Begin: Liste des Consultants
        Route::get('/consultant','Controller@listConsultant')->name('Consultant');
        Route::post('/create_consultant', [Controller::class, 'store']);
        Route::delete('/delete_consultant/{id_consultant?}', [Controller::class, 'destroy']);
        Route::delete('/deleteLot_consultants', [Controller::class, 'destroyLot']);
        //End: Liste des Consultants
    //End: Donnees
    //Begin: Reglements
        //Begin: Liste des clients
        Route::get('/client','ClientController@listDesClients')->name('Client');
        Route::post('/create_client', [ClientController::class, 'store']);
        Route::delete('/delete_client/{id_client?}', [ClientController::class, 'destroy']);
        Route::delete('/deleteLot_clients', [ClientController::class, 'destroyLot']);
        //End: Liste des clients
        //Begin: Liste des Tribunaux
        Route::get('/tribunau','TribunalController@listDesTribunals')->name('Tribunau');
        Route::post('/create_tribunau', [TribunalController::class, 'store']);
        Route::delete('/delete_tribunau/{id_tribunau?}', [TribunalController::class, 'destroy']);
        Route::delete('/deleteLot_tribunaux', [TribunalController::class, 'destroyLot']);
        //End: Liste des Tribunaux
    //End: Reglements
    //Begin: Complements office
        //Begin: Liste des annuaires telephonique
        Route::get('/annuaireTelephonique','Controller@listAnnuaireTelephonique')->name('AnnuaireTelephonique');
        Route::post('/create_annuaireTelephonique', [Controller::class, 'store']);
        Route::delete('/delete_annuaireTelephonique/{id_annuaireTelephonique?}', [Controller::class, 'destroy']);
        Route::delete('/deleteLot_annuaireTelephoniques', [Controller::class, 'destroyLot']);
        //End: Liste des annuaires telephonique
        //Begin: Liste des Archives
        Route::get('/archive','Controller@listArchive')->name('Archive');
        Route::post('/create_archive', [Controller::class, 'store']);
        Route::delete('/delete_archive/{id_archive?}', [Controller::class, 'destroy']);
        Route::delete('/deleteLot_archives', [Controller::class, 'destroyLot']);
        //End: Liste des Archives
        //Begin: Liste des Emails
        Route::get('/email','Controller@listEmail')->name('Email');
        Route::post('/create_email', [Controller::class, 'store']);
        Route::delete('/delete_email/{id_email?}', [Controller::class, 'destroy']);
        Route::delete('/deleteLot_emails', [Controller::class, 'destroyLot']);
        //End: Liste des Emails
    //End: Complements office
    //Begin: Finance
        //Begin: Liste des boites
        Route::get('/boite','Controller@listBoite')->name('Boite');
        Route::post('/create_boite', [Controller::class, 'store']);
        Route::delete('/delete_boite/{id_boite?}', [Controller::class, 'destroy']);
        Route::delete('/deleteLot_boites', [Controller::class, 'destroyLot']);
        //End: Liste des boites
    //End: Finance
});
