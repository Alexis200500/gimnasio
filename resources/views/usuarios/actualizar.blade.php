<form action="{{route('usuario_actualizado')}}" method="post">
  @csrf
  ID <input type="text" value="{{$usuario->id}}" name="id" id="id"><br>
  ID tarjeta <input type="text" value="{{$usuario->id_tarjeta}}" name="id_tarjeta" id="id_tarjeta"><br>
  Nombre: <input type="text" name="nombre" id="nombre" value="{{$usuario->nombre}}"><br> 
  Apellido paterno: <input type="text" name="apellido_paterno" id="apellido_paterno" value="{{$usuario->apellido_paterno}}"><br>
  Apellido materno: <input type="text" name="apellido_materno" id="apellido_materno" value="{{$usuario->apellido_materno}}"><br>
  Fecha de nacimiento: <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{$usuario->fecha_nacimiento}}"><br>
  Teléfono de emergencia: <input type="text" name="telefono_emergencia" id="telefono_emergencia" value="{{$usuario->telefono_emergencia}}"><br>
  Fecha de inscripcion: <input type="date" name="fecha_inscripcion" id="fecha_inscripcion" value="{{$usuario->fecha_inscripcion}}"><br>
  Fecha de pago: <input type="date" name="fecha_pago" id="fecha_pago" value="{{$usuario->fecha_pago}}"><br>
  Fecha de proximo pago <input type="date" name="fecha_proximo_pago" id="fecha_proximo_pago" value="{{$usuario->fecha_proximo_pago}}"><br>
  <input type="submit" value="Guardar">
</form>