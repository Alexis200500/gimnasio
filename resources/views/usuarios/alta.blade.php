@extends('index')
@section('container')

<div class="title">
  <h1>Agregar usuario</h1>
</div>
<div class="formularios">
  <div class="body-content">
    <div class="module">
      <form class="form" action="{{route('guardar_usuario')}}" method="post">
        @csrf
        <input type="text" value="{{$aleatorio}}" name="id_tarjeta" required readonly >
        <input type="text" placeholder="Nombre" name="nombre" required >
        <input type="text" placeholder="Apellido Paterno" name="apellido_paterno" id="apellido_paterno">
        <input type="text" placeholder="Apellido Materno" name="apellido_materno" id="apellido_materno">
        <div>
          Fecha de nacimiento: <input type="date" placeholder="Fecha de nacimiento" name="fecha_nacimiento" id="fecha_nacimiento">
        </div>
        <input type="text" placeholder="Teléfono de emergencia" name="telefono_emergencia" id="telefono_emergencia">
        <div>
          Fecha de inscripcion: <input type="date" placeholder="Fecha de inscripción" name="fecha_inscripcion" id="fecha_inscripcion">
        </div>
        <div>
          Fecha de pago: <input type="date" placeholder="Fecha de pago" name="fecha_pago" id="fecha_pago">
        </div>
        <div>
          Fecha de proximo pago: <input type="date" placeholder="Fecha del proximo pago" name="fecha_proximo_pago" id="fecha_proximo_pago">
        </div>
        <input type="submit" value="Agregar" name="register" class="btn btn-block btn-primary" />
      </form>
    </div>
  </div>
</div>



@endsection