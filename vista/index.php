<!doctype html>
<html lang="en">
  <head>
    <title>CRUD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/525f17c369.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <script>
        function eliminar(){
            var respuesta=confirm("Desea eliminar el registro seleccionado?");
            return respuesta
        }
    </script>
    <h1></h1>
    <?php
        include "modelo/conexion.php";
        include "controlador/eliminar_persona.php";
    ?>
    <div class="continer-fluid row ">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro</h3>
            <?php
                include "modelo/conexion.php";
                include "controlador/registro.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">RFC</label>
                <input type="text" class="form-control" name="rfc">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fecha">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control" name="correo">
            </div>
            <button type="submit" class="btn btn-primary" name="registrar" value="ok">Registrar</button>
        </form>

        <div class="col-8 p-4">
        <table class="table">
            <thead class="bg-info">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">RFC</th>
                <th scope="col">Fecha de Nacimiento</th>
                <th scope="col">Correo</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "modelo/conexion.php";
                $sql= $conexion-> query(" select * from Persona");
                while ($datos = $sql->fetch_object()) {
                ?>
                    <tr>
                    <td><?= $datos->id_persona?></td>
                    <td><?= $datos->Nombre?></td>
                    <td><?= $datos->Apellido?></td>
                    <td><?= $datos->RFC?></td>
                    <td><?= $datos->Fech_Nac?></td>  
                    <td><?= $datos->Correo?></td>
                    <td>
                        <a href="modificar_persona.php?id=<?= $datos->id_persona?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a onclick="return eliminar()" href="index.php?id= <?= $datos->id_persona?>" class="btn btn-small btn-warning"><i class="fa-sharp fa-solid fa-trash"></i></a>
                    </td>
                   </tr>
                <?php
                }
                ?>
            </tbody>
            </table>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>    
  </body>
</html>