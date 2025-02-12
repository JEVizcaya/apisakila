<?php
include("../conexiondb.php");
$sql = "select title, description,release_year from film";
$result = $conexion->query($sql);
$datos = $result->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($datos);
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
echo $json;


?>
