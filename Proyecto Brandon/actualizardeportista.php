<?php

$bd = new SQLite3("base.db") ;
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];


$consulta = 'UPDATE deportistas SET nombre ="'.$nombre.'", apellido ="'.$apellido.'" WHERE  id="'.$id.'";';

$result = $bd-> exec ($consulta);
//echo  $id. "_________". $consulta;

if($result){
	echo $nombre ." fue modificado.";

}else {
	echo "no fue modificado ". $nombre;
}

?>
 <button><a href="index.php">menu de deportes</a></button>
 <button><a href="deportistas.php">atras</a></button>

