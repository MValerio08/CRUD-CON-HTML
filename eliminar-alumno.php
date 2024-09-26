<?php
  include_once "estudiante.php";
  $a = new Estudiante();
  $a->ci = $_GET['ci'];
  $a->eliminar();
  header('Location:alumnos-list.php');

?>