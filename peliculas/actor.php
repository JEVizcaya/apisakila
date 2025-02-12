<?php
include("../conexiondb.php");
$sql="SELECT F.film_id,F.title,F.description,F.release_year FROM film as F
inner join film_actor as FA on F.film_id=FA.film_id
where FA.actor_id=:actor_id;";
$stm=$conexion->prepare($sql);
$stm->bindParam(":actor_id",$_GET['id']);
$stm->execute();
$datos=$stm->fetchAll(PDO::FETCH_ASSOC);
$json=json_encode($datos);
// Establece la cabecera para indicar que la respuesta es JSON
header('Content-Type: application/json');
echo $json;
?>