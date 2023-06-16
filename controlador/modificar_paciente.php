<?php
if (!empty($_POST["btn-modificar"])) {
    echo "boton presionado";
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["numerop"]) and !empty($_POST["fechan"]) and !empty($_POST["correo"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $numero = $_POST["numerop"];
        $fechanac = $_POST["fechan"];
        $correo = $_POST["correo"];
        $sql = $conexion->query("update pacientes set NOMBRE='$nombre', APELLIDO='$apellido',NUMERO_P='$numero',FECHA_NAC='$fechanac',CORREO='$correo' where ID=$id");
        if ($sql == 1) {
            header("location:index.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar producto</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }
}


?>