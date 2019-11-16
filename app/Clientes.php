<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = ['usuario','pass','nombre_cliente','app','apm','correo','telefono'];
    
}
