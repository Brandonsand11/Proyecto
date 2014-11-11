<!DOCTYPE html>
 <html>
 <head>
 	<title>modificar</title>
 	<LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
 </head>
 <body>
 <h1>Modificar Voleibolista</h1>
 <?php
 $id =  $_GET['id'];

$bd = new SQLite3("base.db");
$usu = $bd->query("SELECT * FROM voleyball WHERE ID= '$id';");

$row = $usu->fetchArray();
 ?>
 <form  action="actualizarvoleyball.php" method="POST">
 <label>Id:</label><label> <?php echo $id;?></label>
 <br /> <br />

 <input type="hidden" name="id" value="<?php echo $id;?>">
 
 	<label>nombre</label>
 	<input type="text" name="nombre" value="<?php echo $row['nombre']; ?>">
 	<br />
 	<label>edad</label>
 	<input type="text" name="edad" value="<?php echo $row['edad']; ?>">
 	
 	<br/>
 	<label>posicion</label>
 	<input type="text" name="posicion" value="<?php echo $row['posicion']; ?>">
 	<input type="submit" value="actualizar">
 	<br/>
 </form>
 
 </body>
 </html>  