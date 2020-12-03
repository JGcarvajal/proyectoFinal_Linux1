<?php
$listar = $_GET['listar'];
$agregar = $_GET['crear'];
$borrar = $_GET['Borrar'];


print_r ("<h2>Informacion de los usuarios</h2>");

if ($_SERVER['REQUEST_METHOD']=="GET") {
   Echo "<h3>Lista de usuarios registrados en el sistema</h3>";
   listar();
 }
 if ($_SERVER['REQUEST_METHOD']=="POST" ) {

   $usuario = $_POST['usuario'];
   $nombre = $_POST['nombre_usu'];
   $interprete = $_POST['interprete'];
   $grupo = $_POST['grupo'];
   $clave = $_POST['clave'];
   
   crearUsuario($usuario, $nombre, $interprete, $grupo, $clave);
   echo "Usuario Creado";
 }

function listar(){
   
   exec ( "/bin/bash -c \"getent passwd {1000..2000}\"|sed 's/ /_/g'|sed 's/:/ /g'| awk {'print \"[ '\''\" $1 \"'\'','\''\" $5 \"'\'','\''\" $3\"'\'', '\''\" $6 \"'\''],\"'}", $tUsuarios );
   


   // foreach ( $tUsuarios as $linea )
   // {
   //    echo $linea."\n";
   // }
   // echo "</pre>";

?>
   <html>
   <head>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <script type="text/javascript">
       google.charts.load('current', {'packages':['table']});
       google.charts.setOnLoadCallback(drawTable);
 
       function drawTable() {
         var data = new google.visualization.DataTable();
         data.addColumn('string', 'Usuario');
         data.addColumn('string', 'Nombre');
         data.addColumn('string', 'Habitacios');
         data.addColumn('string', 'Home');
         data.addRows([
          <?php foreach ( $tUsuarios as $linea ){ echo $linea; } ?>
         ]);
 
         var table = new google.visualization.Table(document.getElementById('table_div'));
 
         table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
       }
     </script>
   </head>
   <body>
     <div id="table_div"></div>
   </body>
 </html>
 <?php

}
function crearUsuario($usuario, $nombre, $interprete, $grupo, $clave){
   exec ("./crearUsuario.sh ".$usuario." \"".$nombre."\" ".$interprete." ".$grupo." ".$clave." " , $salida);
echo "./crearUsuario.sh ".$usuario." \"".$nombre."\" ".$interprete." ".$grupo." ".$clave;
   echo "<pre>";
   foreach ( $salida as $linea ){echo $linea . "\n";}; 
   echo "</pre>";
}

?>




<form action="index.html" method="get">
<p><input type="submit" value="Regresar"/></p>
</form>
