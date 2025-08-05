<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
</head>
<body>
    <h1 style="text-align: center">Listado Calificaciones</h1>
    <div class="container">
        <table class="table table-dark table-striped-columns">
            <div style="text-align:right">
            <a class="btn btn-info">Añadir Asignatura</a>
        </div>
        <thead>
            <tr>
                <th style="text-align: center" scope="col">Id</th>
                <th style="text-align: center" scope="col">1 Nota</th>
                <th style="text-align: center" scope="col">2 Nota</th>
                <th style="text-align: center" scope="col">3 Nota</th>
                <th style="text-align: center" scope="col">Nota Final</th>
                <th style="text-align: center" scope="col">Estado</th>
                <th style="text-align: center" scope="col">Asignatura ID</th>
                <th style="text-align: center" scope="col">Docente ID</th>
                <th style="text-align: center" scope="col">Estudiante ID</th>
                <th style="text-align: center">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($scores as $s)
            <tr>
                <td style="text-align: center; vertical-align: middle" scope="row">{{$s->score_id}}</td>
                <td style="text-align: center; vertical-align: middle">{{$s->score1}}</td>
                <td style="text-align: center; vertical-align: middle" scope="row">{{$s->score2}}</td>
                <td style="text-align: center; vertical-align: middle">{{$s->score3}}</td>
                <td style="text-align: center">{{$s->final_score}}</td>
                <td style="text-align: center">{{$s->state}}</td>
                <td style="text-align: center; vertical-align: middle">{{$s->subject_id}}</td>
                <td style="text-align: center">{{$s->teacher_id}}</td>
                <td style="text-align: center">{{$s->student_id}}</td>
                <td>
                    <div style="text-align:center">
                        <a style="display: inlineblock; width: 40%; text-align:center" type="a" class="btn btn-success">Editar</a>
                        <a style="display: inlineblock; width: 40%; text-align:center" type="a" class="btn btn-danger">Eliminar</a>
                    </div>
                </td>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>