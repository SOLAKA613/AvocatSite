<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Audience;
use Illuminate\Http\Request;

class AudienceController extends Controller
{
    public function listAudiences(){
        try{
            return Audience::all();
        }catch(Exception $e){
            return  $e->getMessage();
        }   
    }
    
    public function destroy(Request $request)
    {   
        try{        
            $id = $request->id; 
            $del = Audience::whereId_audience($id)->delete();
            return response()->json(['success'=> $del]);
        }catch(Exception $e){
            return response()->json(['error'=> $e->getMessage()]);
        }
    }
    public function destroyAll(Request $request)
    {   
        try{        
            $id = $request->id; 
            $del = Audience::whereId_audience($id)->delete();
            return response()->json(['success'=> $del]);
        }catch(Exception $e){
            return response()->json(['error'=> $e->getMessage()]);
        }
    }
}
