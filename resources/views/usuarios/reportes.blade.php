<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<h1>Gimnasio</h1>

<a href="{{route('alta_usuario')}}">
<button class="btn btn-success">
    Agregar
  </button>
</a>
<table class="table table-dark table-hover">
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
            <button class="btn btn-primary">Actualizar</button>
          </a>
        </td>
      </tr>
    @empty
        
    @endforelse
  </tbody>
</table>
</body>
</html>