<?php
$nombre = $_GET['nombre_usu'];
$habitacion = $_GET['numero_hab'];
$celular = $_GET['numero_cel'];
$telefono = $_GET['numero_tel'];
$otro = $_GET['otro'];
$listar = $_GET['listar'];
$agregar = $_GET['crear'];
$borrar = $_GET['Borrar'];
$editar= $_GET['Editar'];


echo "<h2>Informacion de los usuarios</h2>";


if ($_GET['function']=="editar") {
    prueba();
  
 }
 elseif ($_GET['function']=="listar") {
   listar();
 }
#echo "El Nombre del Usuario es:". $nombre ."<br/>";
#echo "El Numero de Habitacion es:". $habitacion ."<br/>";
#echo "El Numero de Celular es:". $celular ."<br/>";
#echo "El Numero de Telefono es:". $telefono ."<br/>";
#echo "Otro Numero de Telefono es:". $otro ."<br/>";
function listar(){
   exec ('/bin/bash -c "getent passwd {1000..2000}"', $listar );
   echo "<pre>";
   foreach ( $listar as $linea )
   {
      echo $linea."\n";
   }
   echo "</pre>";
}

function prueba(){
   echo "pruebaas";
}

function agregar(){
   exec ('ps', $agregar );
   echo "<pre>";
   foreach ( $agregar as $linea )
   {
      echo $linea."\n";
   }
   echo "</pre>";
}

function editar(){
   exec ('sudo usermod', $editar );
   echo "<pre>";
   foreach ( $editar as $linea )
   {
      echo $linea."\n";
   }
   echo "</pre>";
}

function borrar(){
   exec ('sudo deluser', $borrar );
   echo "<pre>";
   foreach ( $borrar as $linea )
   {
      echo $linea."\n";
   }
   echo "</pre>";
}

?>

<form action="index2.html" method="get">
<p><input type="submit" value="Regresar"/></p>
</form>
