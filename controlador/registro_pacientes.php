<?php

if (!empty($_POST["btn-registrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["numerop"]) and !empty($_POST["fechan"]) and !empty($_POST["correo"])) {


        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $numerop = $_POST["numerop"];
        $fechan = $_POST["fechan"];
        $correo = $_POST["correo"];

        $sql = $conexion->query(" insert into pacientes (NOMBRE,APELLIDO,NUMERO_P,FECHA_NAC,CORREO) values ('$nombre','$apellido','$numerop','$fechan','$correo') ");
        if ($sql == 1) {
            echo '<div class="alert alert-success"> Paciente registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger"> Error al registrar</div>';
        }


    } else {
        echo '<div class="alert alert-succes"> Algun campo esta vacio </div>';
    }
}
?>