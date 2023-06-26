<?php
include "modelo/conexion.php";
$id = $_GET["id"];
$sql = $conexion->query(" select * from pacientes where ID=$id ");
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
        <h3 class="text-center alert alert-secondary">Receta</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
        include "modelo/conexion.php";
        include "controlador/registro_recetas.php";

        while ($datosp = $sql->fetch_object()) { ?>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Nombre del paciente</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datosp->NOMBRE ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Apellido del paciente</label>
                <input type="text" class="form-control" name="apellido" value="<?= $datosp->APELLIDO ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Numero</label>
                <input type="text" class="form-control" name="numerop" value="<?= $datosp->NUMERO_P ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input type="text" class="form-control" name="fechan" value="<?= $datosp->FECHA_NAC ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Receta</label>
                <textarea class="form-control" name="texto_receta" rows="5"></textarea>
            </div>

        <?php }
        ?>

        <button type="submit" class="btn btn-primary" name="btn-registrar-receta" value="ok">Agregar receta</button>
    </form>
</body>

</html>