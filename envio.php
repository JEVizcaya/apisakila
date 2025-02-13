<?php
include_once("../validarAcceso.php");
//Establece cabecera para permitir operaciones de cq origen que sera json y que enviara
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
echo $json;
?>