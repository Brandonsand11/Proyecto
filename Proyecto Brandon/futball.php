<!DOCTYPE html>
<html>
<head>
	<title>futball</title>
	<LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</head>
<body>



<?php 
$bd = new SQLite3('base.db');
$usus = $bd->query("SELECT * FROM futball;");
//echo "Cantidad " . $usus->numColumns();
?>
<h1>Nuestros Futbolistas</h1>


<br /> <br />
<table border="1px">
	<tr>
		<td>Id</td>
		<td>nombre</td>
		<td>edad</td>
		<td>posicion</td>

		<td>Editar</td>
		
	</tr>
<?php
while ($fila = $usus->fetchArray()) {
?> 
<tr>
	<td> <?php  echo $fila['id'] ;?></td>
	<td> <?php  echo $fila['nombre'] ;?></td>
	<td> <?php  echo $fila['edad'];?></td>
	<td> <?php  echo $fila['posicion'];?></td>
	<td>
		<a href="editarfutball.php?id=<?php echo $fila['id']; ?>">Editar</a>
		<a class="eliminarfutball" href="eliminarfutball.php?id=<?php echo $fila['id']; ?>">Eliminar</a>

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
 			if (!confirm('estas seguro??'))
 				return false;
 		})
 	})
 	</script>

  
   	<button><a href="index.php">menu de deportes</a></button>
 

 

</body>
</html>