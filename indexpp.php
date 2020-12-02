<html>
<body>
<?php
     function lista() {
      $salida="";
       for ($i=1000; $i<2000; $i++ ) {
            $salida=$salida." ".strval($i);
       }
       
       return $salida; 
      }
 
           echo " iniciar";
           exec ('getent passwd'.lista(), $salida);

          echo "<pre>";
           foreach ($salida as $linea){
              echo $linea."\n";
           }
         echo "</pre>";

         echo "terminado";
?>
</body>
</html>
