<?php
    include "modelo/conexion.php";
    $id=$_GET["id"];
    
    $sql=$conexion->query("select * from persona where id_persona=$id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">
            <h3 class="text-center text-secondary">Modificar Registros</h3>
            <input type="text" name="id" value="<?= $_GET["id"]?>">
            <?php
                include "controlador/modificar_persona.php";
                while($dato=$sql->fetch_object()){?>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="<?=$datos->Nombre?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="apellido" value="<?=$datos->Apellido?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">RFC</label>
                        <input type="text" class="form-control" name="rfc" value="<?=$datos->RFC?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" name="fecha" value="<?=$datos->Fech_Nac?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Correo</label>
                        <input type="email" class="form-control" name="correo" value="<?=$datos->Correo?>">
                    </div>
            <?php    }
            ?>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>
        </form>
</body>
</html>