<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = [
        'nombre',
         'apellido', 
         'cedula', 
         'departamento',
          'ciudad',
           'celular', 
           'correo_electronico', 
           'habeas_data'
        
        ];
}
