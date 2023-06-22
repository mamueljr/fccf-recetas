<?php
require_once('./modelo/database.php');
$search_criteria = $_POST['search_criteria'];
//cadena de consulta
$query = "SELECT ID, NOMBRE, APELLIDO,NUMERO_P,FECHA_NAC,CORREO FROM pacientes WHERE NOMBRE LIKE '%" . $search_criteria . "%' OR APELLIDO LIKE '%" . $search_criteria . "%'";

$pacientes = [];
$errors = ['data' => false];

$getPacientes = $db->query($query);

if ($getPacientes->num_rows > 0) {
    while ($data = $getPacientes->fetch_assoc()) {
        $pacientes[] = $data;
    }
    echo json_encode($pacientes);

} else {
    echo json_encode($errors);
} ?>