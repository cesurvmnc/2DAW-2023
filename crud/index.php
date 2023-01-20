<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>

<?php
/* CREAMOS LA CONEXION CON LA BASE DE DATOS */
include("conexion.php");

	if (isset($_POST["porig"])){
		
		if ($_POST["porig"]!=''){
			$porig=$_POST["porig"];
			$conexion=$base->query("SELECT * FROM productos WHERE PAISDEORIGEN='$porig'");
		}else if ($_POST["cart"]!=''){
			$cart=$_POST["cart"];
			$conexion=$base->query("SELECT * FROM productos WHERE CODIGOARTICULO='$cart'");
		}else if ($_POST["sec"]!=''){
			$sec=$_POST["sec"];
			$conexion=$base->query("SELECT * FROM productos WHERE SECCION='$sec'");
		}else if ($_POST["nart"]!=''){
			$nart=$_POST["nart"];
			$conexion=$base->query("SELECT * FROM productos WHERE NOMBREARTICULO='$nart'");
		}else if ($_POST["pre"]!=''){
			$pre=$_POST["pre"];
			$conexion=$base->query("SELECT * FROM productos WHERE PRECIO='$pre'");
		}else if ($_POST["fech"]!=''){
			$fech=$_POST["fech"];
			$conexion=$base->query("SELECT * FROM productos WHERE FECHA='$fech'");
		}else if ($_POST["impor"]!=''){
			$impor=$_POST["impor"];
			$conexion=$base->query("SELECT * FROM productos WHERE IMPORTADO='$impor'");
		}else{
		$conexion=$base->query("SELECT * FROM productos"); 
		} 
	}else{
		$conexion=$base->query("SELECT * FROM productos"); 
	} 

	
$registros=$conexion->fetchAll(PDO::FETCH_OBJ); 
	
?>

<h1 style="color:red">CRUD CESUR 2022</h1>

  <table width="90%" border="0" align="center">
    <tr >
      <td class="primera_fila">CODIGOARTICULO</td>
      <td class="primera_fila">SECCION</td>
      <td class="primera_fila">NOMBREARTICULO</td>
      <td class="primera_fila">PRECIO</td>
	  <td class="primera_fila">FECHA</td>
	  <td class="primera_fila">IMPORTADO</td>
	  <td class="primera_fila">PAISDEORIGEN</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>

    </tr> 
   
	<?php
	foreach($registros as $persona):
	 ?>
		
   	<tr>
      <td><?php echo $persona->CODIGOARTICULO;?></td>
      <td><?php echo $persona->SECCION;?></td>
      <td><?php echo $persona->NOMBREARTICULO;?></td>
      <td><?php echo $persona->PRECIO;?></td>
	  <td><?php echo $persona->FECHA;?></td>
	  <td><?php echo $persona->IMPORTADO;?></td>
      <td><?php echo $persona->PAISDEORIGEN;?></td>
 
      <td class="bot"><a href="borrar.php?cart=<?php echo $persona->CODIGOARTICULO?>">
		  <input type='button' name='del' id='del' value='Borrar'>
		  			</a>
	  </td>
		
      <td class='bot'><a href="editar.php?cart=<?php echo $persona->CODIGOARTICULO?> & sec=<?php echo $persona->SECCION?> & nart=<?php echo $persona->NOMBREARTICULO?> & pre=<?php echo $persona->PRECIO?> & fech=<?php echo $persona->FECHA?> & impor=<?php echo $persona->IMPORTADO?> & porig=<?php echo $persona->PAISDEORIGEN?> ">
		  <input type='button' name='up' id='up' value='Actualizar'>
	  				</a>
	  </td>
    </tr>   
	
	<?php
	endforeach;
	?>

	<form method="post" action="insertar.php">
	  <tr>
		  <td><input type='text' name='icart' size='10' class='centrado'></td>
		  <td><input type='text' name='isec' size='10' class='centrado'></td>
		  <td><input type='text' name='inart' size='10' class='centrado'></td>
		  <td><input type='text' name='ipre' size='10' class='centrado'></td>
		  <td><input type='text' name='ifech' size='10' class='centrado'></td>
		  <td><input type='text' name='iimpor' size='10' class='centrado'></td>
		  <td><input type='text' name='iporig' size='10' class='centrado'></td>
		  <td class='bot'><input type='submit' value='Insertar'></td>
	  </tr> 
	</form>
	  
	<form method="post" action="index.php">
		<tr>
		  <td><input type='text' name='cart' size='10' class='centrado'></td>
		  <td><input type='text' name='sec' size='10' class='centrado'></td>
		  <td><input type='text' name='nart' size='10' class='centrado'></td>
		  <td><input type='text' name='pre' size='10' class='centrado'></td>
		  <td><input type='text' name='fech' size='10' class='centrado'></td>
		  <td><input type='text' name='impor' size='10' class='centrado'></td>
		  <td><input type='text' name='porig' size='10' class='centrado'></td>
	
	  	<td class='bot'><input type='submit' value='Seleccionar'></td> 
	</form>
		
	  <form method="post" action="index.php">
	  	<td class='bot'><input type='submit' value='Mostrar Todo'></td> 
	  </form>
	 </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>