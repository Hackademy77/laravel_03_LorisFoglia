<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public $oggetti = [
        ["id"=>1, "name"=> "computer", "brand" => "HP", "type"=>"PC", "img" => "hp.webp", "description"=>"funziona bene"],

        ["id"=>2,"name"=> "ipad", "brand" =>"Apple", "type" =>"iPad", "img" => "ipad.jpg", "description"=>"non una non due ben tre scarpiere slim"],

        ["id"=>3, "name"=> "cellulare", "brand" =>"Nokia", "type" =>"telefono", "img" => "nokia.jpg", "description"=>"non prende da nessuna parte"],

        ["id"=>4, "name"=> "cellulare", "brand" =>"Samsung", "type" =>"telefono", "img" => "samsung.jpg", "description"=>"non prende da nessuna parte"],

    ];


    public function showProdotti() {
         return view('prodotti', ['prodotti'=> $this->oggetti]);
    }


    public function showPerGeneri($genere){

        $objectByGenre = [];

        foreach($this->oggetti as $oggetto){
            if(strtolower($oggetto["type"])==strtolower($genere)){
                array_push($objectByGenre, $oggetto);
            }

        }

            return view('prodotti-genere', ['oggetti'=>$objectByGenre]);
    
    }
}
