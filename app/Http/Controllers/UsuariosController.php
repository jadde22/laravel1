<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\models\Alumno;

class UsuariosController extends Controller
{
    function listar() {
       $alumnos = Alumno :: join('estados','alumnos.estado_id','=','estados.id')
       ->orderby ('edad','DESC')
       ->get();
      //dd($alumnos);
       return view('listado',compact('alumnos'));

    }
}


