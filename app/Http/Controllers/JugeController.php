<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Juge;

class JugeController extends Controller
{ 

    public function listJuges(){
        try{
            return Juge::all();
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
