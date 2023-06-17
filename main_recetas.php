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
</head>

<body>
    <script>
        function eliminar() {
            var respuesta = confirm("Estas seguro que deseas eliminar?");
            return respuesta
        }
    </script>
    <h1 class="text-center p-3">Recetas Fisioterapia FCCF UACH</h1>
    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar_receta.php"
        ?>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro de Recetas</h3>
            <?php

            include "controlador/registro_recetas.php"
                ?>
            <div class="mb-3">
                <label for="exampleDataList" class="form-label">Seleccionar Paciente</label>
                <input class="form-control" list="datalistOptions" id="exampleDataList" name="id_paciente"
                    placeholder="Type to search...">
                <datalist id="datalistOptions">
                    <option value="San Francisco">
                    <option value="New York">
                    <option value="Seattle">
                    <option value="Los Angeles">
                    <option value="Chicago">
                </datalist>
                <!-- <label for="exampleInputEmail1" class="form-label">Seleccionar Paciente</label>
                <input type="text" class="form-control" name="nombre"> -->
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Receta</label>
                <textarea class="form-control" name="texto_receta" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" name="btn-registrar-receta" value="ok">Agregar Receta</button>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg=info">
                    <tr>
                        <th scope="col">ID RECETA</th>
                        <th scope="col">PACIENTE</th>
                        <th scope="col"></th>
                        <th scope="col">FECHA GENERADA</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    //$sql = $conexion->query("SELECT * from recetas ");
                    $sql = $conexion->query("SELECT * from recetas r INNER JOIN pacientes p ON r.ID_PACIENTE=p.ID ");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td>
                                <?= $datos->ID_RECETA ?>
                            </td>
                            <td>
                                <?= $datos->NOMBRE ?>
                            </td>
                            <td>
                                <?= $datos->APELLIDO ?>
                            </td>
                            <td>
                                <?= $datos->FECHA_GENERADA ?>
                            </td>
                            <td>
                                <a href="modificar_receta.php?id=<?= $datos->ID ?>" class="btn btn-small btn-warning"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar()" href="main_recetas.php?id=<?= $datos->ID_RECETA ?>"
                                    class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
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