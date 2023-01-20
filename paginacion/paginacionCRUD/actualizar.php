<?php

$Id=$_POST["Id"];
$nom=$_POST["nom"];
$ape=$_POST["ape"];
$dir=$_POST["dir"];

include("conexion.php");

$base->query("UPDATE datos_usuarios SET id='$Id', Nombre='$nom', Apellido='$ape', Direccion='$dir' WHERE id='$Id'");
header ("Location:index.php");

?>