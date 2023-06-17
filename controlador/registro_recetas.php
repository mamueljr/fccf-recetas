<?php

if (!empty($_POST["btn-registrar-receta"])) {
    if (!empty($_POST["id_paciente"]) and !empty($_POST["texto_receta"])) {


        $id_paciente = $_POST["id_paciente"];
        $texto_receta = $_POST["texto_receta"];
        /* $numerop = $_POST["numerop"];
        $fechan = $_POST["fechan"];
        $correo = $_POST["correo"];
 */
        $sql = $conexion->query(" insert into recetas (ID_PACIENTE,TEXTO_RECETA) values ('$id_paciente','$texto_receta') ");
        if ($sql == 1) {
            echo '<div class="alert alert-success"> Receta registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger"> Error al registrar</div>';
        }


    } else {
        echo '<div class="alert alert-succes"> Algun campo esta vacio </div>';
    }
}
?>