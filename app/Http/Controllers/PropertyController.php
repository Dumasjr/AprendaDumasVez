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

public function dado(){

    return view('property.create');
}

    public function show($name)
    {
        $property = DB::select("select * from imoveis where name=?", [$name]);

        if(!empty($property)){

            return view('property.show')->with('property',$property);
        }else{
            return redirect()->action('PropertyController@index');
        }

    }



public function store(Request $request)
{

$propertySlug=$this->setName($request->type);

$property =[

     $request->type,
     $propertySlug,
     $request->description,
     $request->rental_price,
     $request->sale_price
];

DB::insert('insert into imoveis (type,name, description,rental_price,sale_price) values (?,?,?,?,?)', $property);
return redirect()->action('PropertyController@index');
}

public function setName($type){

    $propertySlug= str_slug($type);
    $properties = DB::select("SELECT * FROM imoveis");
    $t = 0;
    foreach ($properties as $property)
    {
        if(str_slug($property->type) === $propertySlug)
        {
        $t++;
        }
        }
    if($t > 0){
        $propertySlug=$propertySlug.'-'.$t;
    }
    return $propertySlug;

}


}
