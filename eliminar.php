<?php 
  include_once "estudiante.php";
  $a = new Estudiante();
  $a->ci = 136;
  $a->eliminar();
  echo "Datos eliminados correctamente";
  
  
?>