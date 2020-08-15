<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()    {

        $properties = DB::select("select * from imoveis");
        return view('property.index')->with('properties',$properties);

    }
    public function create(){


   return view('property.create');

}

public function dado(){

    return view('property.create');
}

    public function show($id)
    {
        $property = DB::select("select * from imoveis where id=?", [$id]);

        if(!empty($property)){

            return view('property.show')->with('property',$property);
        }else{
            return redirect()->action('PropertyController@index');
        }

    }



public function store(Request $request)
{
$property =[

     $request->type,
     $request->description,
     $request->rental_price,
     $request->sale_price
];

DB::insert('insert into imoveis (type, description,rental_price,sale_price) values (?, ?,?,?)', $property);
return redirect()->action('PropertyController@index');
}


}
