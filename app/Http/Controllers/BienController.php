<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Wilaya;
use App\Models\Commune;
use App\Models\TypeBien;
use App\Models\Bien;

class BienController extends Controller
{

    

    public function show ( )
    {


     
        $Wilayas = Wilaya::get();
        $Communes = Commune::get();
        $Type_biens = TypeBien::get();
        return  view("biens",compact('Wilayas','Communes','Type_biens'));

        
    }



    public function insert_bien (Request $request){
        
        $superficie = $request->input('superficie');
        $nombre_chambre = $request->input('nombre_chambre');
        $wilaya_id = $request->input('wilaya_id');
        $state = $request->input('state');     
        $type_id = $request->input('type_id');
/*
        $niceNames = [
            'superficie' => 'superficie',
            'nombre_chambre' => 'nombre_chambre',
            'state' => 'state',
            'wilaya_id' => 'wilaya_id',
            'user_id' => 'user_id',
            'type_id' => 'type_id',
        ];
        $rules = [
            'superficie'  => 'required|max:6|string',
            'nombre_chambre' => 'required|string|max:3',
            'wilaya_id' => 'required|max:3|string', 
            'type_id' => 'required|max:3|string',
        ];
        $validator = Validator::make($request->all(), $rules);
        $validator->setAttributeNames($niceNames); 
        if ($validator->fails()) {
            return  ($validator);
        } 
        else {
        }*/
 
            $bien = new Bien;
            $bien->superficie = $superficie ;
            $bien->nombre_chambre = $nombre_chambre;
            $bien->state = "0";
            $bien->wilaya_id = $wilaya_id;
            $bien->user_id = "1";
            $bien->type_id = $type_id;
            $bien->save();
  }

 
}
