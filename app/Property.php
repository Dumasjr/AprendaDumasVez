<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table ='imoveis' ;
    protected $fillable = [
        'type',
        'name',
        'description',
        'rental_price',
        'sale_price' ];

    public $timestamps =false;

}
