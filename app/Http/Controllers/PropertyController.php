<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Property;

class PropertyController extends Controller
{
    public function index()    {

        //$properties = DB::select("select * from imoveis");
        $properties=Property::all();

        return view('property.index')->with('properties',$properties);

    }

public function create(){

    return view('property.create');
}

    public function show($name)
    {
       // $property = DB::select("select * from imoveis where name=?", [$name]);
       $property = Property::where('name',$name)->get();

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

     'type'=>$request->type,
     'name'=>$propertySlug,
     'description'=>$request->description,
     'rental_price'=>$request->rental_price,
     'sale_price'=>$request->sale_price
];

    Property::create($property);

//DB::insert('insert into imoveis (type,name, description,rental_price,sale_price) values (?,?,?,?,?)', $property);

return redirect()->action('PropertyController@index');
}

public function edit($name){

    //$property = DB::select("select * from imoveis where name=?", [$name]);
    $property = Property::where('name',$name)->get();

        if(!empty($property)){

            return view('property.edit')->with('property',$property);

}
}


public function update(Request $request,$id)
{
    $propertySlug=$this->setName($request->type);

  //  $property =[

//     $request->type,
  //       $propertySlug,
  //       $request->description,
  //       $request->rental_price,
  //       $request->sale_price,
 //        $id
  //  ];

   // DB::update('update imoveis set type=?,name=?,description=?,rental_price=?,sale_price=? where id=?', $property);

    $property=Property::find($id);

    $property->type = $request->type;
    $property->name = $propertySlug;
    $property->description =$request->description;
    $property->rental_price = $request->rental_price;
    $property->sale_price = $request->sale_price;

    $property->save();

    return redirect()->action('PropertyController@index');
}


public function destroy($name)
{
    //$property = DB::select("select * from imoveis where name=?", [$name]);
    $property = Property::where('name',$name)->get();

    if(!empty($property)){
        DB::delete("delete from imoveis where name=?",[$name]);
        return redirect()->action('PropertyController@index');
    }

var_dump($name);
}
private function setName($type){

    $propertySlug= str_slug($type);
    //$properties = DB::select("SELECT * FROM imoveis");
    $properties=Property::all();
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
