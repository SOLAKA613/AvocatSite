<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class EmployeController extends Controller
{
    public function listEmployes(){
        try{
            return Employe::all();
        }catch(Exception $e){
            return  $e->getMessage();
        }   
    }
}
