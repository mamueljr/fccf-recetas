<?php
include "modelo/conexion.php";
$id = $_GET["id"];
$sql = $conexion->query(" select * from recetas where ID_PACIENTE=$id ");
// echo $id;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3d7c96b4af.js" crossorigin="anonymous"></script>
</head>

<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center alert alert-secondary">Imprimir receta</h3>
        <input type="hidden" name="id_receta" value="<?= $_GET["id"] ?>">
        <?php

        while ($datosr = $sql->fetch_object()) { ?>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">ID</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datosr->ID_PACIENTE ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Apellido del paciente</label>
                <input type="text" class="form-control" name="texto" value="<?= $datosr->APELLIDO ?>">

            <?php }
        ?>


    </form>
</body>

</html>