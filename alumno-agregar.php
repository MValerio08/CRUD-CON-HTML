<?php 
  $ci = $_POST['ci'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $apellido_mat = $_POST['apellido_mat'];
  $telefono = $_POST['telefono'];
  
  include_once "estudiante.php";
  $a = new Estudiante();
  $a->ci = $ci;
  $a->nombre = $nombre;
  $a->ap_paterno = $apellido;
  $a->ap_materno = $apellido_mat;
  $a->numero_telf = $telefono;
  $a->insertar();
  //echo "Datos insertados correctamente";
header('Location:index.php');



  //llamar al metodo de alumno guardar
  //llamar al index.php

?>