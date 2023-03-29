<h1>Agregar usuario</h1>
<form action="{{route('guardar_usuario')}}" method="post">
  @csrf
  ID <input type="text" value="{{$aleatorio}}" name="id_tarjeta" id="id_tarjeta"><br>
  Nombre: <input type="text" name="nombre" id="nombre"><br> 
  Apellido paterno: <input type="text" name="apellido_paterno" id="apellido_paterno"><br>
  Apellido materno: <input type="text" name="apellido_materno" id="apellido_materno"><br>
  Fecha de nacimiento: <input type="date" name="fecha_nacimiento" id="fecha_nacimiento"><br>
  Teléfono de emergencia: <input type="text" name="telefono_emergencia" id="telefono_emergencia"><br>
  Fecha de inscripcion: <input type="date" name="fecha_inscripcion" id="fecha_inscripcion"><br>
  Fecha de pago: <input type="date" name="fecha_pago" id="fecha_pago"><br>
  Fecha de proximo pago <input type="date" name="fecha_proximo_pago" id="fecha_proximo_pago"><br>
  <input type="submit" value="Guardar">
</form>