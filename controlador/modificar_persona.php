<?php
    if (!empty($_POST["btnregistrar"])) {
        if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["rfc"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])) {
            $id=$_POST["id"];
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $rfc=$_POST["rfc"];
            $fecha=$_POST["fecha"];
            $correo=$_POST["correo"];
            $sql=$conexion->query(" update persona set Nombre='$nombre', Apellido='$apellido', RFC='$rfc', Fech_Nac='$fecha', Correo='$correo' where id_persona= $id ");
            if ($sql==1) {
                header("location:index.php");
            }else{
                echo "<div class='alert alert-danger'>Eroor al modificar el registro</div>";
            }
        }else{
            echo "<div class='alert alert-warning'>Campos vacios</div>";
        } 
    }
?>