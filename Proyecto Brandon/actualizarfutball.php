<?php

$bd = new SQLite3("base.db") ;

$id = $_POST['id'];

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];

$posicion = $_POST['posicion'];

$consulta = 'UPDATE futball SET nombre ="'.$nombre.'", edad ="'.$edad.'", posicion ="'.$posicion.'" WHERE  id="'.$id.'";';

$result = $bd-> exec ($consulta);
//echo  $id. "_________". $consulta;

if($result){
	echo $nombre ." fue modificado";

}else {
	echo "error al modificar ". $nombre;
}

?>
 <button><a href="index.php">menu de deportes</a></button>
 <button><a href="futball.php">atras</a></button>
