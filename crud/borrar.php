<?php

include("conexion.php");
$cart=$_GET["cart"];
$base->query("DELETE FROM productos WHERE CODIGOARTICULO='$cart'");
header ("Location:index.php");

?>