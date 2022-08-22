<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Avocat;

class AvocatController extends Controller
{ 

    public function listAvocats(){
        try{
            return Avocat::all();
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
