<?php
  class Conexion {

    private $host;
    private $user;
    private $pass;
    private $bd;
    private $conexion;

    public function __construct(){
      $this->host = "localhost";
      $this->user = "aprendelessa";
      $this->pass = "Aprendelessa12";
      $this->bd = "aprendelessa";
    }

    public function conexion(){
      $this->conexion = mysqli_connect($this->host, $this->user, $this->pass, $this->bd) or die("Algo ha salido mal en la conexión a la base de datos.");
      //echo "Ha salido bien la conexion";
      return $this->conexion;
    }

    public function desconectar(){
      mysqli_close($this->conexion);
    }

    public function string($string){
      return mysqli_real_escape_string($this->conexion(), $string);
    }
  }
?>
