<?php
include "modelo/conexion.php";
$id = $_GET["id"];
$sql = $conexion->query(" select * from recetas where ID_RECETA=$id ");
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
        <h3 class="text-center alert alert-secondary">Modificar Receta</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
        include "controlador/modificar_receta.php";
        while ($datosp = $sql->fetch_object()) { ?>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Nombre del paciente</label>
                <input type="text" class="form-control" name="id_receta" value="<?= $datosp->ID_RECETA ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Apellido del paciente</label>
                <input type="text" class="form-control" name="id_paciente" value="<?= $datosp->ID_PACIENTE ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Fecha Generada</label>
                <input type="text" class="form-control" name="fecha_g" value="<?= $datosp->FECHA_GENERADA ?>">
            </div>

            <div class="form-outline">
                <textarea class="form-control" id="textAreaExample1" rows="4"><?= $datosp->TEXTO_RECETA ?></textarea>
                <label class="form-label" for="textAreaExample"></label>
            </div>

        <?php }
        ?>

        <button type="submit" class="btn btn-primary" name="btn-modificar" value="ok">Modificar</button>
        <button type="submit" class="btn btn-secondary" name="btn-imprimir" value="ok">Imprimir</button>
    </form>
</body>

</html>