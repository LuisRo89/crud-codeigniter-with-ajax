<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Mostrar Alumnos</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>
    <br><br>    
    <div class="container">
        <div class="container-fluid">
        <h1 class="offset-4">Lista de Alumnos</h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Agregar</button>
            <br><br>
            <table class="table table-bordered text-center">
                <thead class="bg-ligth text-black">
                    <th>Id</th>
                    <th>Carnet</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Acciones</th>
                </thead>
                <tbody id="mostrarAlumnos">
                    <?php
                        // foreach ($mostrarAlumnos as $item) {
                        //     echo '<tr>'.
                        //         '<td>'.$item->Id.'</td>'.
                        //         '<td>'.$item->Carnet.'</td>'.
                        //         '<td>'.$item->Nombres.'</td>'.
                        //         '<td>'.$item->Apellidos.'</td>'.
                        //         '<td>'.$item->FechaNacimiento.'</td>'.
                        //         '<td>'.'<a href="./modificarAlumno?id='.$item->Id.'&carnet='.$item->Carnet.'&nombres='.$item->Nombres.'&apellido='.$item->Apellidos.'&fecha='.$item->FechaNacimiento.'" class="btn btn-warning">Modificar</a> | 
                        //                 <a href="./eliminarAlumno?id='.$item->Id.'&carnet='.$item->Carnet.'&nombres='.$item->Nombres.'&apellido='.$item->Apellidos.'&fecha='.$item->FechaNacimiento.'" class="btn btn-danger">Eliminar</a>'.'</td>'.
                        //         '</tr>';
                        // }
                    // ?>
                </tbody>
            </table>
        </div>
    </div>
    <br><br>

<!-- Modal para agregar un registro -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" modal='toggle' role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Agregar</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="" id="miFormulario" method="post">
              <label for="">Carnet</label>
              <input class="form-control" type="text" name="carnet" id="carnet" required>
              <hr>
              <label for="">Nombre</label>
              <input class="form-control" type="text" name="nombre" id="nombre" required>
              <hr>              
              <div class="form-group">
                <label for="">Apellido</label>
                <input class="form-control" type="text" name="apellido" id="apellido" required>
              </div>
              <hr>
              <label for="">Fecha</label>
              <input class="form-control" type="date" name="fecha" id="fecha" required>
              <hr>   
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="button" name="agregarR" id="agregarR" class="btn btn-primary" data-dismiss="modal">Guardar</button>
            </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal para modificar un registro -->
<div class="modal fade" id="exampleModalModif" tabindex="-1" modal='toggle' role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Modificar Registro</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="" id="miFormulario" method="post">
              <label for="">Carnet</label>
              <input class="form-control" type="hidden" name="IdM" id="IdM" required>
              <input class="form-control" type="text" name="carnetM" id="carnetM" required>
              <hr>
              <label for="">Nombre</label>
              <input class="form-control" type="text" name="nombreM" id="nombreM" required>
              <hr>              
              <div class="form-group">
                <label for="">Apellido</label>
                <input class="form-control" type="text" name="apellidoM" id="apellidoM" required>
              </div>
              <hr>
              <label for="">Fecha</label>
              <input class="form-control" type="date" name="fechaM" id="fechaM" required>
              <hr>   
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="button" name="updateR" id="updateR" class="btn btn-primary" data-dismiss="modal">Modificar</button>
            </div>
            </form>
          </div>
        </div>
      </div>

       <!-- Modal para eliminar un registro -->
<div class="modal fade" id="exampleModalEliminar" tabindex="-1" modal='toggle' role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Registro</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="" id="miFormulario" method="post">
              <label for="">Carnet</label>
              <input class="form-control" type="hidden" name="IdE" id="IdE" required>
              <input class="form-control" type="text" name="carnetE" id="carnetE" required>
              <hr>
              <label for="">Nombre</label>
              <input class="form-control" type="text" name="nombreE" id="nombreE" required>
              <hr>              
              <div class="form-group">
                <label for="">Apellido</label>
                <input class="form-control" type="text" name="apellidoE" id="apellidoE" required>
              </div>
              <hr>
              <label for="">Fecha</label>
              <input class="form-control" type="date" name="fechaE" id="fechaE" required>
              <hr>   
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="button" name="deleteR" id="deleteR" class="btn btn-primary" data-dismiss="modal">Eliminar</button>
            </div>
            </form>
          </div>
        </div>
      </div>

    <script>
    
    $(document).ready(mostrarAlumnos);

    function mostrarAlumnos(){

        $.ajax({
            method:"post",
            url:"http://localhost/certificacion/index.php/alumnoController/listar",
            success:listar,
            error:error
        });
    
            

            //funcion para listar todos los datos en la base de datos
            function listar(t) {
                var listar = t.mostrarAlumnos;
                // console.log(t.mostrarAlumnos[0].Id);

                $("#mostrarAlumnos").html("");
                

                listar.forEach(element => {
                    // console.log(element.Carnet);
                    $("#mostrarAlumnos").append('<tr>'
                                                +'<td id="idL">'+element.Id+'</td>'
                                                +'<td id="carnetL">'+element.Carnet+'</td>'
                                                +'<td id="nombresL">'+element.Nombres+'</td>'
                                                +'<td id="apellidosL">'+element.Apellidos+'</td>'
                                                +'<td id="fechaNacimientoL">'+element.FechaNacimiento+'</td>'
                                                +'<td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalModif" onclick="modificar('+element.Id+')">'
                                                    +'Modificar'
                                                    +'</button>|'
                                                +'<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalEliminar" onclick="eliminar('+element.Id+')">'
                                                    +'Eliminar'
                                                    +'</button></td>'
                                                +'</tr>');
                }); 
                $('#miFormulario')[0].reset();               
            }

            //funcion para verificar si hay error
            // function error(e) {
            //     alert("Error: "+e);
                
            // }
    }

    // Agregar reporte
    $('#agregarR').click(function(){
        agregarR();
    });
    // Peticion agregar reporte
    function agregarR(){
        $.ajax({
            method:"post",
            url:"http://localhost/certificacion/index.php/alumnoController/insertarAlumnos",
            data:{
                carnet: $('#carnet').val(),                
                nombre: $('#nombre').val(),
                apellido: $('#apellido').val(),                
                fecha: $('#fecha').val()
            },
            success:listo,
            error:error
        })
    }

    function listo(){
        mostrarAlumnos();
        // $('#exampleModalCenter').modal('toggle');
        // $("#carnet").html("");
        // $("#nombre").html("");
        // $("#apellido").html("");
        // $("#fecha").html("");

    }

    // esta parte funcion para modificar
    function modificar(id) {
        // alert(id);
        $.ajax({

            method:"post",
            url:"http://localhost/certificacion/index.php/alumnoController/modificarAlumno",
            data:{
                id:id
            },
            success:modi,
            error:error
        })
    }

    function error(e){
        alert("Error: " + e);
    }
    function modi(updateUno) {
        // console.log(updateUno);
        // alert(updateUno.Id);
        updateUno.forEach(element => {   
            // alert(element.Id);     
            $("#IdM").val(element.Id);
            $("#carnetM").val(element.Carnet);
            $("#nombreM").val(element.Nombres);
            $("#apellidoM").val(element.Apellidos);
            $("#fechaM").val(element.FechaNacimiento);
         });
    }

    $('#updateR').click(function(){
        update();
    });

    function update(){
        $("#mostrarAlumnos").html("");
        let id = $('#IdM').val();
        let carnet = $('#carnetM').val();
        let nombre = $('#nombreM').val();
        let apellido = $('#apellidoM').val();
        let fecha = $('#fechaM').val();
        $.ajax({
            method:"post",
            url:"http://localhost/certificacion/index.php/alumnoController/updateAlumnos",
            data:{
                id:id,
                carnet:carnet,                
                nombre:nombre,
                apellido:apellido,                
                fecha:fecha
            },
            success:listo,
            error:error

    })} //fin de la parte que modifica
    

    // esta parte funcion para eliminar
    function eliminar(id) {
        // alert(id);
        $.ajax({

            method:"post",
            url:"http://localhost/certificacion/index.php/alumnoController/modificarAlumno",
            data:{
                id:id
            },
            success:dele,
            error:error
        })
    }
    function error(e){
        alert("Error: " + e);
    }
    function dele(d){
        // console.log(updateUno);
        // alert(updateUno.Id);
        d.forEach(element => {   
            // alert(element.Id);     
            $("#IdE").val(element.Id);
            $("#carnetE").val(element.Carnet);
            $("#nombreE").val(element.Nombres);
            $("#apellidoE").val(element.Apellidos);
            $("#fechaE").val(element.FechaNacimiento);
         });
    }

    $('#deleteR').click(function(){
        delet();
    });

    function delet(){
        $("#mostrarAlumnos").html("");
        let id = $('#IdE').val();        
        $.ajax({
            method:"post",
            url:"http://localhost/certificacion/index.php/alumnoController/deleteAlumnos",
            data:{
                id:id                
            },
            success:listo,
            error:error

    })} //fin de la parte que elimina

    </script>
</body>
</html>