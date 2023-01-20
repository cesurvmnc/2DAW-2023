<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>

<h1>ACTUALIZAR</h1>

<?php
	
	$cart=$_GET["cart"];
	$sec=$_GET["sec"];
	$nart=$_GET["nart"];
	$pre=$_GET["pre"];
	$fech=$_GET["fech"];
	$impor=$_GET["impor"];
	$porig=$_GET["porig"];
?>
	
<p>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="actualizar.php">
  <table width="25%" border="0" align="center">
    <tr>
      <td>CODIGOARTICULO</td>
      <td><label for="cart"></label>
      <input type="text" name="cart" id="cart" value="<?php echo $cart ?>"></td>
    </tr>
    <tr>
      <td>SECCION</td>
      <td><label for="sec"></label>
      <input type="text" name="sec" id="sec" value="<?php echo $sec ?>"></td>
    </tr>
    <tr>
      <td>NOMBREARTICULO</td>
      <td><label for="nart"></label>
      <input type="text" name="nart" id="nart" value="<?php echo $nart ?>"></td>
    </tr>
    <tr>
      <td>PRECIO</td>
      <td><label for="pre"></label>
      <input type="text" name="pre" id="pre" value="<?php echo $pre ?>"></td>
    </tr>
	<tr>
      <td>FECHA</td>
      <td><label for="fech"></label>
      <input type="text" name="fech" id="fech" value="<?php echo $fech ?>"></td>
    </tr>
	<tr>
      <td>IMPORTADO</td>
      <td><label for="impor"></label>
      <input type="text" name="impor" id="impor" value="<?php echo $impor ?>"></td>
    </tr>
	<tr>
      <td>PAISDEORIGEN</td>
      <td><label for="porig"></label>
      <input type="text" name="porig" id="porig" value="<?php echo $porig ?>"></td>
    </tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>