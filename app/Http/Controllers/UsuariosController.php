<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;


class UsuariosController extends Controller
{
    public function usuarios(){
      $usuarios = usuarios::all();

      return $usuarios;
      // return view('usuarios.reportes')->with('usuarios',$usuarios);

    }
}
