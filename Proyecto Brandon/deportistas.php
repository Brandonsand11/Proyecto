<!DOCTYPE html>
<html>
<head>
	<title>deportistas</title>
	<LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</head>
<body>

<style type="text/css"> 
<!-- 
body { cursor: crosshair} 
--> 
</style> 


<?php 
$bd = new SQLite3('base.db');
$usus = $bd->query("SELECT * FROM deportistas;");
//echo "Cantidad " . $usus->numColumns();
?>
<h1>Conoce a Nuestros Deportistas</h1>


<br /> <br />
<table border="1px">
	<tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Editar</td>
		
	</tr>
<?php
while ($fila = $usus->fetchArray()) {
?> 
<tr>
	<td> <?php  echo $fila['id'] ;?></td>
	<td> <?php  echo $fila['nombre'] ;?></td>
	<td> <?php  echo $fila['apellido'];?></td>
	<td>
		<a href="editardeportista.php?id=<?php echo $fila['id']; ?>">editar</a>
		<a class="eliminardeportista" href="eliminardeportista.php?id=<?php echo $fila['id']; ?>">eliminar</a>

	</td>
</tr>
<?php  
}
?>
</table>

<script type="text/javascript"src="jquery.js"></script>
<script type="text/javascript">


 	$(document).on('ready', function() {

 		$('.eliminardeportista').on('click', function(){
 			if (!confirm('seguro que desea eliminar?'))
 				return false;
 		})
 	})
 	</script>
 	<button><a href="nuevodeportista.php">nuevo deportista</a></button>
  

 
 <button><a href="index.php">menu de deportes</a></button>
 

</body>
</html>