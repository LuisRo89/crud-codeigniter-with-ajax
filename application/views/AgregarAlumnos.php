<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Agregar Alumnos</title>
</head>
<body>
    <br><br>
    <div class="container">
        <div class="container-fluid col-6">
            <h2 class="text-center">Agregar Alumno</h2>
            <br>
            <form action="./insertarAlumnos" method="get">
                <label>Carnet:</label>
                <input type="text" name="carnet" class="form-control">
                <br>
                <label>Nombres:</label>
                <input type="text" name="nombre" class="form-control">
                <br>
                <label>Apellidos:</label>
                <input type="text" name="apellido" class="form-control">
                <br>
                <label>fecha de Nacimiento:</label>
                <input type="date" name="fecha" class="form-control">
                <!-- <input type="text" name="fecha" class="form-control" placeholder="YYYY-MM-DD"> -->
                <br>
                <input type="submit" class="btn btn-success offset-3 col-3">
                <a href="./mostrar" class="btn btn-danger col-3">Cancelar</a>
            </form>
        </div>
    </div>
</body>
</html>