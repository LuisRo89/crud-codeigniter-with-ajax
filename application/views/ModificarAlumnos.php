<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Modificar Alumnos</title>
</head>
<body>
    <br><br>
    <div class="container">
        <div class="container-fluid col-6">
            <h2 class="text-center">Modificar Alumno</h2>
            <br>
            <form action="./updateAlumnos" method="get">
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                <label>Carnet:</label>
                <input type="text" name="carnet" value="<?php echo $_GET['carnet'] ?>" class="form-control">
                <br>
                <label>Nombres:</label>
                <input type="text" name="nombre" value="<?php echo $_GET['nombres'] ?>" class="form-control">
                <br>
                <label>Apellidos:</label>
                <input type="text" name="apellido" value="<?php echo $_GET['apellido'] ?>" class="form-control">
                <br>
                <label>fecha de Nacimiento:</label>
                <input type="date" name="fecha" value="<?php echo $_GET['fecha'] ?>" class="form-control">
                <br>
                <input type="submit" class="btn btn-success offset-3 col-3">
                <a href="./mostrar" class="btn btn-danger col-3">Cancelar</a>
            </form>
        </div>
    </div>
</body>
</html>