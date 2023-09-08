<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
    <div class="container">
        <h2>Usuarios que no cuentan con el máximo de tareas asignadas</h2>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Usuarios</th>
                        <th>Tareas asignadas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->tareas_count }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

  
</body>

</html>
