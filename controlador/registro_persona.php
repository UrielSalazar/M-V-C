<?php
    if (!empty($_POST["btnregistrar"])){
        if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["rfc"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])){
            
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $rfc=$_POST["rfc"];
            $fecha=$_POST["fecha"];
            $correo=$_POST["correo"];

            $sql=$conexion->query("insert into Persona (Nombre,Apellido,RFC,Fech_Nac,Correo)values('$nombre','$apellido','$rfc',$fecha,'$correo') ");

            if ($sql==1){
                echo '<div class="alert alert-success"> Persona registrada correctamente</div>';
            }else{
                echo '<div class="alert alert-danger"> Error al registrarse</div>';
            }

        }else{
            echo '<div class="alert alert-warning"> Alguno de los campos esta vacio</div>';
        }
    }
?>