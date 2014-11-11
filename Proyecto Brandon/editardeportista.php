<!DOCTYPE html>
 <html>
 <head>
 	<title>Modificar</title>
 	<LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
 </head>
 <body>
 <h1>Modificar deportistas</h1>
 <?php
 $id =  $_GET['id'];

$bd = new SQLite3("base.db");
$usu = $bd->query("SELECT * FROM deportistas WHERE id= '$id';");

$row = $usu->fetchArray();
 ?>
 <form  action="actualizardeportista.php" method="POST">
 <label>Id:</label><label> <?php echo $id;?></label>
 <br /> <br />

 <input type="hidden" name="id" value="<?php echo $id;?>">
 
 	<label>Nombre</label>
 	<input type="text" name="nombre" value="<?php echo $row['nombre']; ?>">
 	<br />
 	<label>Apellido</label>
 	<input type="text" name="apellido"value="<?php echo $row['apellido']; ?>">
 	
 	<br/>
 	<input type="submit" value="actualizar">
 	<br/>
 </form>
 
 </body>
 </html>  