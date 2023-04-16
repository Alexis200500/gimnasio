@extends('index')
@section('container')

<div class="title">
  <h1>Actualizar usuario</h1>
</div>
<div class="formularios">
  <div class="body-content">
    <div class="module">
      <form class="form" action="{{route('usuario_actualizado')}}" method="post">
        @csrf
        <div>
          ID:
          <input type="text" value="{{$usuario->id}}" name="id" id="id" readonly >
        </div>
        <div>
          Número de la tarjeta:
          <input type="text" value="{{$usuario->id_tarjeta}}" name="id_tarjeta" name="id_tarjeta" required readonly >
        </div>
        <div>
          Nombre:
          <input type="text" placeholder="Nombre" name="nombre" required value="{{$usuario->nombre}}" >
        </div>
        <div>
          Apellido Paterno:
          <input type="text" placeholder="Apellido Paterno" name="apellido_paterno" id="apellido_paterno" value="{{$usuario->apellido_paterno}}">
        </div>
        <div>
          Apellido Materno:
          <input type="text" placeholder="Apellido Materno" name="apellido_materno" id="apellido_materno" value="{{$usuario->apellido_materno}}">
        </div>
        <div>
          Fecha de nacimiento: <input type="date" placeholder="Fecha de nacimiento" name="fecha_nacimiento" id="fecha_nacimiento" value="{{$usuario->fecha_nacimiento}}">
        </div>
        <div>
          Teléfono de emergencia:
          <input type="text" placeholder="Teléfono de emergencia" name="telefono_emergencia" id="telefono_emergencia" value="{{$usuario->telefono_emergencia}}">
        </div>
        <div>
          Fecha de inscripcion: <input type="date" placeholder="Fecha de inscripción" name="fecha_inscripcion" id="fecha_inscripcion" value="{{$usuario->fecha_inscripcion}}">
        </div>
        <div>
          Fecha de pago: <input type="date" placeholder="Fecha de pago" name="fecha_pago" id="fecha_pago" value="{{$usuario->fecha_pago}}">
        </div>
        <div>
          Fecha de proximo pago: <input type="date" placeholder="Fecha del proximo pago" name="fecha_proximo_pago" id="fecha_proximo_pago" value="{{$usuario->fecha_proximo_pago}}">
        </div>
        <input type="submit" value="Agregar" name="register" class="btn btn-block btn-primary" />
      </form>
    </div>
  </div>
</div>



@endsection