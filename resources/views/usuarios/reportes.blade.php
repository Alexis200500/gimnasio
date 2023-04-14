<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

<h1>Gimnasio</h1>

<input type="text" class="form-control"   placeholder="Search employee" id="search">


<a href="{{route('alta_usuario')}}">
<button class="btn btn-success">
    Agregar
  </button>
</a>
<table class="table table-dark table-hover">
  <thead>
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
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(function(){
    var table = $('.yajra-datatable').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ route('usuarios.list') }}",
      columns:[
        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
        {data: 'id_tarjeta', name: 'id_tarjeta'},
        {data: 'nombre', name: 'nombre'},
        {data: 'fecha_nacimiento', name: 'fecha_nacimiento'},
        {data: 'telefono_emergencia', name: 'telefono_emergencia'},
        {data: 'fecha_inscripcion', name: 'fecha_inscripcion'},
        {data: 'fecha_pago', name: 'fecha_pago'},
        {data: 'fecha_proximo_pago', name: 'fecha_proximo_pago'},
        {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
        },
      ]
    });
  });
</script> --}}

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
  $('#search').on('keyup', function(){
      search();
  });
  search();
  function search(){
       var keyword = $('#search').val();
       $.post('{{ route("usuarios.search") }}',
        {
           _token: $('meta[name="csrf-token"]').attr('content'),
           keyword:keyword
         },
         function(data){
          table_post_row(data);
            console.log(data);
         });
  }
  // table row with ajax
  function table_post_row(res){
  let htmlView = '';
  if(res.usuarios.length <= 0){
      htmlView+= `
         <tr>
            <td colspan="10">No se encuentra.</td>
        </tr>`;
  }
  for(let i = 0; i < res.usuarios.length; i++){
      htmlView += `
          <tr>
             <td>`+ (i+1) +`</td>
                <td>`+res.usuarios[i].id_tarjeta+`</td>
                <td>`+res.usuarios[i].nombre+res.usuarios[i].apellido_paterno+res.usuarios[i].apellido_materno+`</td>
                <td>`+res.usuarios[i].fecha_nacimiento+`</td>
                <td>`+res.usuarios[i].telefono_emergencia+`</td>
                <td>`+res.usuarios[i].fecha_inscripcion+`</td>
                <td>`+res.usuarios[i].fecha_pago+`</td>
                <td>`+res.usuarios[i].fecha_proximo_pago+`</td>
                <td>`+res.usuarios[i].dias+`</td>
                <td>`+res.usuarios[i].id+`</td>
          </tr>`;
  }
       $('tbody').html(htmlView);
  }
  </script>



</body>
</html>