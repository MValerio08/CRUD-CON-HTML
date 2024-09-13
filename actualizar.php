<?php 
  include_once "estudiante.php";
  $a = new Estudiante();
  $a->nombre = "juanita";
  $a->ap_paterno = "Del barrio";
  $a->ap_materno = "";
  $a->numero_telf = "12345678";
  $a->ci = 136;
  $a->actualizar();
  echo "Datos actualizados correctamente";
  
?>