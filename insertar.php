<?php 
  include_once "estudiante.php";
  $a = new Estudiante();
  $a->ci = 136;
  $a->nombre = "alvaro";
  $a->ap_paterno = "Colque";
  $a->ap_materno = "Zubieta";
  $a->numero_telf = "65897634";
  $a->insertar();
  echo "Datos insertados correctamente";
  


  //echo ($a);
  
?>