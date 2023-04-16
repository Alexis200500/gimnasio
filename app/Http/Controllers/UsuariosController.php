<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;
use Carbon\Carbon;
use DataTables;
use Session;

class UsuariosController extends Controller
{
   
    public function index(){
      return view('index');
    }

    public function buscar_usuarios(Request $request){
      $usuarios = usuarios::all()->selectRaw("DATEDIFF(fecha_proximo_pago, '$hoy') AS dias");
      if($request->keyword != ''){
      $usuarios = usuarios::where('nombre','LIKE','%'.$request->keyword.'%')->get();
      }
      return response()->json([
         'usuarios' => $usuarios
      ]);
    }

    public function usuarios(){
      $hoy = Carbon::today();
      $hoy= $hoy->format('Y-m-d');
      // return $hoy;
      
      $usuarios = usuarios::select('usuarios.*')->selectRaw("DATEDIFF(fecha_proximo_pago, '$hoy') AS dias")->get();

      // return $usuarios;
      return view('usuarios.reportes')
      ->with('usuarios',$usuarios);


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
      Session::flash('mensaje','Usuario creado');
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
      Session::flash('mensaje','Usuario actualizado');
      return redirect()->route('usuarios');
    }
}