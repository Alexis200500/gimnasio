@extends('index')
@section('container')
    

<div class="agregar">
  <a href="{{route('alta_usuario')}}">
          <button type="button" class="btn btn-success">Agregar</button>
        </a>
      </div>
      
      <div class="mensaje">
        @if (Session::has('mensaje'))
        <div class="alert alert-success" role="alert">
            {{Session::get('mensaje')}}
          </div>
        @endif
      </div>
      
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>ID tarjeta</th>
            <th>Nombre completo</th>
            <th>Fecha nacimiento</th>
            <th>Teléfono de emergencia</th>
            <th>Fecha de inscripción</th>
            <th>Fecha de pago</th>
            <th>Fecha de proximo pago</th>
            <th>Días disponibles</th>
            <th>Actualizar pago </th>
          </tr>
        </thead>
        <tbody>
          @forelse ($usuarios as $usuario)
          <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->id_tarjeta}}</td>
            <td>{{$usuario->nombre}} {{$usuario->apellido_paterno}} {{$usuario->apellido_materno}}</td>
            <td>{{$usuario->fecha_nacimiento}}</td>
            <td>{{$usuario->telefono_emergencia}}</td>
            <td>{{$usuario->fecha_inscripcion}}</td>
            <td>{{$usuario->fecha_pago}}</td>
            <td>{{$usuario->fecha_proximo_pago}}</td>
            <td>{{$usuario->dias}}</td>
            <td>
              <a href="{{route('actualizar_usuario',[$usuario->id])}}">
                <button>Actualizar</button>
              </a>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="10" class="sinregistros">No existen registros</td>
          </tr>
          @endforelse
        </tbody>
      </table>

          @endsection