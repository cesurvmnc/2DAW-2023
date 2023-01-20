<?php

$cart=$_POST["icart"];
$sec=$_POST["isec"];
$nart=$_POST["inart"];
$pre=$_POST["ipre"];
$fech=$_POST["ifech"];
$impor=$_POST["iimpor"];
$porig=$_POST["iporig"];

include("conexion.php");


$base->query("INSERT INTO productos (CODIGOARTICULO,SECCION,NOMBREARTICULO,PRECIO,FECHA,IMPORTADO,PAISDEORIGEN) VALUES ('$cart','$sec','$nart','$pre','$fech','$impor','$porig')");
header ("Location:index.php");

?>