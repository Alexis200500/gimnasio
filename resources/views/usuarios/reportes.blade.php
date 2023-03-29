
<h1>Gimnasio</h1>

<button>
  <a href="{{route('alta_usuario')}}">Agregar</a>
</button>
<table border="1">
  <thead>
    <th>ID tarjeta</th>
    <th>Nombre completo</th>
    <th>Fecha nacimiento</th>
    <th>Teléfono de emergencia</th>
    <th>Fecha de inscripción</th>
    <th>Fecha de pago</th>
    <th>Fecha de proximo pago</th>
    <th>Días disponibles</th>
    <th>Actualizar pago</th>
  </thead>
  <tbody>
    @forelse ($usuarios as $usuario)
      <tr>
        <td>{{$usuario->id_tarjeta}}</td>
        <td>{{$usuario->nombre}} {{$usuario->apellido_paterno}} {{$usuario->apellido_materno}}</td>
        <td>{{$usuario->fecha_nacimiento}}</td>
        <td>{{$usuario->telefono_emergencia}}</td>
        <td>{{$usuario->fecha_inscripcion}}</td>
        <td>{{$usuario->fecha_pago}}</td>
        <td>{{$usuario->fecha_proximo_pago}}</td>
        <td>{{$usuario->dias}}</td>
        <td>
          <button>
            <a href="{{route('actualizar_usuario',[$usuario->id])}}">Actualizar pago</a>
          </button>
        </td>

      </tr>
    @empty
        
    @endforelse
  </tbody>


</table>