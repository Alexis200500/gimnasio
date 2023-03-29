<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>

<h1>Gimnasio</h1>

<button>
  <a href="{{route('alta_usuario')}}">Agregar</a>
</button>
<table class="table table-bordered yajra-datatable">
  <thead>
    <th>ID</th>
    <th>ID tarjeta</th>
    <th>Nombre completo</th>
    <th>Fecha nacimiento</th>
    <th>Teléfono de emergencia</th>
    <th>Fecha de inscripción</th>
    <th>Fecha de pago</th>
    <th>Fecha de proximo pago</th>
    {{-- <th>Días disponibles</th> --}}
    <th>Actualizar pago</th>
  </thead>
  <tbody>

  </tbody>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
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
</script>
</body>
</html>