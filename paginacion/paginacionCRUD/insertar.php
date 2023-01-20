<?php

$nom=$_POST["Nom"];
$ape=$_POST["Ape"];
$dir=$_POST["Dir"];
include("conexion.php");
$base->query("INSERT INTO datos_usuarios (Nombre,Apellido,Direccion) VALUES ('$nom','$ape','$dir')");
header ("Location:index.php");

?>