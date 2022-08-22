<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function listClients(){
        try{
            return Client::all();
        }catch(Exception $e){
            return  $e->getMessage();
        }   
    }

    //Begin: Reglements
    public function listDesClients(){
        return view('PagesNavbar.Reglements.clients.clients', ['i' => 8,'j' => 3]);
    }
    //End: Reglements
}
