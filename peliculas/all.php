<?php
include("../conexiondb.php");
$sql = "select title, description,release_year from film";
$result = $conexion->query($sql);
$datos = $result->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($datos);
include("../envio.php");

?>
