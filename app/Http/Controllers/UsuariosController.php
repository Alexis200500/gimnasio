<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;
use Carbon\Carbon;
use DataTables;

class UsuariosController extends Controller
{
    public function getusuarios(Request $request){
      if($request->ajax()){
        $data = usuarios::latest()->get();
        return DataTables::of($data)
          ->addIndexColumn()
          ->addColumn('action', function($row){
            $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Actualizar pago</a>';
            return $actionBtn;
          })
          ->rawColumns(['action'])
          ->make(true);
      }
    }

    public function usuarios(){
      // $hoy = Carbon::today();
      // $hoy= $hoy->format('Y-m-d');
      // // return $hoy;
      
      // $usuarios = usuarios::select('usuarios.*')->selectRaw("DATEDIFF(fecha_proximo_pago, '$hoy') AS dias")->get();

      // return $usuarios;
      return view('usuarios.reportes');
      // ->with('usuarios',$usuarios);


    }

    public function alta_usuario(){

      $aleatorio = mt_rand(1000000000000000,10000000000000000);
      
      return view('usuarios.alta')->with('aleatorio',$aleatorio);
    }

    public function guardar_usuario(Request $request){
      $usuario = new usuarios;
      $usuario->id_tarjeta = $request->id_tarjeta;
      $usuario->nombre = $request->nombre;
      $usuario->apellido_paterno = $request->apellido_paterno;
      $usuario->apellido_materno = $request->apellido_materno;
      $usuario->fecha_nacimiento = $request->fecha_nacimiento;
      $usuario->telefono_emergencia = $request->telefono_emergencia;
      $usuario->fecha_inscripcion = $request->fecha_inscripcion;
      $usuario->fecha_pago = $request->fecha_pago;
      $usuario->fecha_proximo_pago = $request->fecha_proximo_pago;
      $usuario->save();

      return redirect()->route('usuarios');


    }

    public function actualizar_usuario($id){
      $usuario = usuarios::find($id);

      return view('usuarios.actualizar')->with('usuario',$usuario);
    }

    public function usuario_actualizado(Request $request){
      $usuario = usuarios::find($request->id);
      $usuario->id = $request->id;
      $usuario->id_tarjeta = $request->id_tarjeta;
      $usuario->nombre = $request->nombre;
      $usuario->apellido_paterno = $request->apellido_paterno;
      $usuario->apellido_materno = $request->apellido_materno;
      $usuario->fecha_nacimiento = $request->fecha_nacimiento;
      $usuario->telefono_emergencia = $request->telefono_emergencia;
      $usuario->fecha_inscripcion = $request->fecha_inscripcion;
      $usuario->fecha_pago = $request->fecha_pago;
      $usuario->fecha_proximo_pago = $request->fecha_proximo_pago;
      $usuario->save();

      return redirect()->route('usuarios');
    }
}