<?php
  include_once "estudiante.php";
  $a = new Estudiante();
  $a->nombre = $_POST['nombre'];
  $a->ap_paterno = $_POST['apellido'];
  $a->ap_materno = $_POST['apellido_mat'];
  $a->numero_telf = $_POST['telefono'];
  $a->ci = $_POST['ci'];
  $a->actualizar();
  //echo "Datos actualizados correctamente";
  header('Location:index.php');

?>