<?php
$nombre = $_GET['nombre_usu'];
$habitacion = $_GET['numero_hab'];
$celular = $_GET['numero_cel'];
$telefono = $_GET['numero_tel'];
$otro = $_GET['otro'];

echo "<h2>Informacion del usuario</h2>";
echo "El Nombre del Usuario es:". $nombre ."<br/>";
echo "El Numero de Habitacion es:". $habitacion ."<br/>";
echo "El Numero de Celular es:". $celular ."<br/>";
echo "El Numero de Telefono es:". $telefono ."<br/>";
echo "Otro Numero de Telefono es:". $otro ."<br/>";

?>
