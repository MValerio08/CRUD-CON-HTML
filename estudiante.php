<?php

  include_once "conexion.php";
  class Estudiante extends Conexion{

    //Declaracion de variables
    public $ci;
    public $nombre;
    public $ap_paterno;
    public $ap_materno;
    public $numero_telf;

    //Funcion para visualizar los datos
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

    //Funcion para la insercion de datos
    public function insertar(){
      $this->conectar();
      $insertar = mysqli_prepare($this->con,"insert into alumnos values(?,?,?,?,?)");
      $insertar->bind_param("issss",$this->ci,$this->nombre,$this->ap_paterno,$this->ap_materno,$this->numero_telf);
      $insertar->execute();
    }
  }


?>