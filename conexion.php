<?php

   $conexion = new PDO("mysql:host=localhost;dbname=prueba","root","");


  if (!$conexion) {
      echo 'Error al conectar con el servidor';
  } else {
    echo 'Conectado al servidor';
  }
  
?>
