<?php

$bd = new SqLite3("base.db");
$codigo= $_GET['id'];

$usus = $bd-> exec(" DELETE FROM  voleyball WHERE id = $codigo  ");

if ($usus ){
	echo "Eliminado correctamente.";
} else {
	echo "Error al eliminar";
}

 ?>
 <button><a href="index.php">menu de deportes</a></button>
 <button><a href="voleyball.php">atras</a></button>