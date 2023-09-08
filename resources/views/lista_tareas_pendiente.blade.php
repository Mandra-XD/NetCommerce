<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <P>Listado de todas las tareas pendientes agrupadas por empresas, cada una de las
            tareas mostrará si ya tiene un usuario relacionado.
        </P>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Empresa</th>
                        <th>Tarea</th>
                        <th>estatus</th>
                        <th>tiene usuario</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tareas as $tarea)
                        <tr>
                            <td>{{ $tarea->empresas->empresa }}</td>
                            <td>{{ $tarea->nombre }}</td>
                            <td>{{ $tarea->estatus ? 'completado' : 'pediente' }}</td>
                            <td>{{ $tarea->user->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
