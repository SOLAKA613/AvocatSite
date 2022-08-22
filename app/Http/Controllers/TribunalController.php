<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tribunal;

class TribunalController extends Controller
{
    public function listTribunals(){
        try{
            return Tribunal::all();
        }catch(Exception $e){
            return  $e->getMessage();
        }   
    }

    //Begin: Reglements
    public function listDesTribunals(){
        return view('PagesNavbar.Reglements.tribunaux.tribunaux', ['i' => 9,'j' => 3]);
    }
    //End: Reglements
}
