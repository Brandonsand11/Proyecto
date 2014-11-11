<?php

$bd = new SQLite3("base.db");
$nom=$_POST['nombre'];

$ape=$_POST['apellido'];





$result=$bd-> exec ("INSERT INTO deportistas (nombre , apellido) VALUES ('$nom','$ape')");
if($result) {
	echo "deportista ".$nom." creado";
} else {
	echo "no se a podido crear a " . $nom; 
}


?>
<button><a href="index.php">menu de deportes</a></button>
<button><a href="deportistas.php">atras</a></button>