<?php

	$cart=$_POST["cart"];
	$sec=$_POST["sec"];
	$nart=$_POST["nart"];
	$pre=$_POST["pre"];
	$fech=$_POST["fech"];
	$impor=$_POST["impor"];
	$porig=$_POST["porig"];

include("conexion.php");

$base->query("UPDATE productos SET CODIGOARTICULO='$cart', SECCION='$sec', NOMBREARTICULO='$nart', PRECIO='$pre', FECHA='$fech', IMPORTADO='$impor', PAISDEORIGEN='$porig' WHERE CODIGOARTICULO='$cart'");
header ("Location:index.php");

?>