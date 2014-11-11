<!DOCTYPE html>
<html>
<head>
	<title>voleyball</title>
	<LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</head>
<body>



<?php 
$bd = new SQLite3('base.db');
$usus = $bd->query("SELECT * FROM voleyball;");
//echo "Cantidad " . $usus->numColumns();
?>
<h1>nuestros Voleibolistas</h1>


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
		<a href="editarvoleyball.php?id=<?php echo $fila['id']; ?>">Editar</a>
		<a class="eliminarvoleyball" href="eliminarvoleyball.php?id=<?php echo $fila['id']; ?>">Eliminar</a>

	</td>
</tr>
<?php  
}
?>
</table>

<script type="text/javascript"src="jquery.js"></script>
<script type="text/javascript">


 	$(document).on('ready', function() {

 		$('.eliminarvoleyball').on('click', function(){
 			if (!confirm('esta seguro??'))
 				return false;
 		})
 	})
 	</script>
   	<button><a href="index.php">menu de deportes</a></button>
 

 

</body>
</html>