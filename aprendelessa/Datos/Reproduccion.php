<?php
  include_once "Conexion.php";

  class Reproduccion extends Conexion {

    private $codReproduccion;
    private $Usuario_codUsuario;
    private $videoVisto;
    private $Video_codVideo;

    public function __construct(){
      parent::__construct();
    }

    //Insertar los videos ya vostos
    public function insertReproduccion(){
      $query = "INSERT INTO reproduccion (videoVisto, Usuario_codUsuario, Video_codVideo) VALUES (true, ".parent::string($this->getUsuario_codUsuario()).", ".parent::string($this->getVideo_codVideo()).");";
      $result = mysqli_query(parent::conexion(), $query);
      if($result){
        $fila = mysqli_fetch_array($result);
        parent::desconectar();
        return $fila;
      } else{
        echo parent::conexion()->error;
        parent::desconectar();
        return false;
      }
    }

    //Comprobar si ya existe existe la reproduccion de video con usuario
    public function comprobarReproduccion(){
      $query = "SELECT COUNT(*) AS existe FROM reproduccion WHERE Usuario_codUsuario = ".parent::string($this->getUsuario_codUsuario())." AND Video_codVideo = ".parent::string($this->getVideo_codVideo()).";";
      $result = mysqli_query(parent::conexion(), $query);
      if($result){
        $fila = mysqli_fetch_array($result);
        parent::desconectar();
        return $fila;
      } else{
        echo parent::conexion()->error;
        parent::desconectar();
        return false;
      }
    }

    public function setCodReproduccion($codReproduccion){
      $this->codReproduccion = $codReproduccion;
    }

    public function getCodReproduccion(){
      return $this->codReproduccion;
    }

    public function setUsuario_codUsuario($Usuario_codUsuario){
      $this->Usuario_codUsuario = $Usuario_codUsuario;
    }

    public function getUsuario_codUsuario(){
      return $this->Usuario_codUsuario;
    }

    public function setVideoVisto($videoVisto){
      $this->videoVisto = $videoVisto;
    }

    public function getVideoVisto(){
      return $this->videoVisto;
    }

    public function setVideo_codVideo($Video_codVideo){
      $this->Video_codVideo = $Video_codVideo;
    }

    public function getVideo_codVideo(){
      return $this->Video_codVideo;
    }
  }
?>
