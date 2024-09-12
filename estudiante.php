<?php

  include_once "conexion.php";
  class Estudiante extends Conexion{
    public $ci;
    public $nombre;
    public $ap_paterno;
    public $ap_materno;
    public $numero_telf;

    public static function ver(){
      $cone = new Conexion();
      $cone->conectar();
      $pre = mysqli_prepare($cone->con,"select * from alumnos");
      $pre->execute();
      $res = $pre->get_result();
      $estudiantes = [];
      while($estudiante = $res->fetch_object()){
        array_push($estudiantes,$estudiante);
      };
      return json_encode($estudiantes);

    }
  }


?>