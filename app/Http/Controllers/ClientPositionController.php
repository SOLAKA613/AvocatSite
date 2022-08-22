<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client_position;

class ClientPositionController extends Controller
{
    public function listClient_position(){
        try{
            return Client_position::all();
        }catch(Exception $e){
            return  $e->getMessage();
        }   
    }
}
