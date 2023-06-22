<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "fccf_recetas";

//crera conexion
$db = new mysqli($server, $username, $password, $database);
// Check connection
if ($db->connect_error) {
    die("Error en la conexion con la DB: " . $db->connect_error);
}

?>