<?php

if (!empty($_POST["btn-registrar-receta"])) {
    if (!empty($_POST["id"]) and !empty($_POST["texto_receta"])) {


        $id_paciente = $_POST["id"];
        $texto_receta = $_POST["texto_receta"];
        /* $numerop = $_POST["numerop"];
        $fechan = $_POST["fechan"];
        $correo = $_POST["correo"];
 */
        $sql = $conexion->query(" insert into recetas (ID_PACIENTE,TEXTO_RECETA) values ('$id_paciente','$texto_receta') ");
        if ($sql == 1) {
            header("location:index.php");
        } else {
            echo '<div class="alert alert-danger"> Error al registrar</div>';
        }


    } else {
        echo '<div class="alert alert-succes"> Algun campo esta vacio </div>';
    }
}
?>