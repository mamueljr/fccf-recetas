<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas FCCF FISIOTERAPIA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3d7c96b4af.js" crossorigin="anonymous"></script>
    <!-- Paquete de iconos bootstrap -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
    <script>
        function eliminar() {
            var respuesta = confirm("Estas seguro que deseas eliminar?");
            return respuesta
        }
    </script>
    <h1 class="text-center p-3">Pacientes Fisioterapia FCCF UACH</h1>
    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar_paciente.php"
        ?>
    <div class="container-fluid row">

        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg=info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRES</th>
                        <th scope="col">APELLIDOS</th>
                        <th scope="col">NUMERO PENSIONES</th>
                        <th scope="col">FECHA DE NACIMIENTO</th>
                        <th scope="col">CORREO</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query("select * from pacientes ");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td>
                                <?= $datos->ID ?>
                            </td>
                            <td>
                                <?= $datos->NOMBRE ?>
                            </td>
                            <td>
                                <?= $datos->APELLIDO ?>
                            </td>
                            <td>
                                <?= $datos->NUMERO_P ?>
                            </td>
                            <td>
                                <?= $datos->FECHA_NAC ?>
                            </td>
                            <td>
                                <?= $datos->CORREO ?>
                            </td>
                            <td>
                                <a href="agrega_receta.php?id=<?= $datos->ID ?>" class="btn btn-small btn-success"><i
                                        class="fa-solid fa-circle-plus"></i></a>
                                <!-- <a onclick="return eliminar()" href="index.php?id=<?= $datos->ID ?>"
                                    class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a> -->
                            </td>
                        </tr>
                    <?php }
                    ?>


                </tbody>
            </table>
        </div>
    </div>
    <!-- Javascript Bundel Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>