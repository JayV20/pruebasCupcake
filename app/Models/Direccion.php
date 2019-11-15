<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $fillable = ['calle','colonia','alcaldia','ciudad','num_extr','num_int','cp'];
}
