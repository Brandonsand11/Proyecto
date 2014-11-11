<?php

$bd = new SqLite3("base.db");
$codigo= $_GET['id'];

$usus = $bd-> exec(" DELETE FROM  basquet WHERE id = $codigo  ");

if ($usus ){
	echo "Eliminado correctamente.";
} else {
	echo "Error al eliminar";
}

 ?>
 <button><a href="index.php">menu de deportes</a></button>
 <button><a href="basquet.php">atras</a></button>