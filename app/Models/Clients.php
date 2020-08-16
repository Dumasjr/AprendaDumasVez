<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = [
        'name',
        'rg',
        'cpf',
        'phone',
        'cel',
        'email',
        'birth',
        'gender',
        'description',
        'income'
    ];
}
