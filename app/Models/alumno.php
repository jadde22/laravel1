<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    use HasFactory;
   protected $table = 'alumnos';
   protected $filiable = [
    'nombre'
    'edad'
    'dni'
    'estado_id'
];
public function estado(){
 return $this->belongsto(Estado::class)
}

}
