<?php
if (!empty($_POST["btn-modificar"])) {
    echo "boton presionado";
    if (!empty($_POST["id_paciente"]) and !empty($_POST["fecha_generada"]) and !empty($_POST["texto"])) {
        $id = $_POST["id_receta"];
        $id_paciente = $_POST["id_paciente"];
        $fecha_g = $_POST["fecha_g"];
        $texto = $_POST["texto"];
        $sql = $conexion->query("update recetas set ID_PACIENTE='$id_paciente', FECHA_GENERADA='$fecha_g',TEXTO_RECETA='$texto' where ID_RECETA=$id");
        if ($sql == 1) {
            header("location:index.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }
}


?>