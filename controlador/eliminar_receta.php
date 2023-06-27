<?php
if (!empty($_GET["ID_RECETA"])) {
    $id_receta = $_GET["ID_RECETA"];
    $sql_delete = $conexion->query("delete from recetas where ID_RECETA=$id_receta");
    if ($sql_delete == 1) {
        echo '<div class="alert alert-success"> Receta eliminada correctamente </div>';
    } else {
        echo '<div class="alert alert-danger"> Error al eliminar</div>';
    }

}



?>