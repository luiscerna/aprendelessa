<?php
  include("Conexion.php");

  class Reproduccion extends Conexion {

    private $codReproduccion;
    private $Usuario_codUsuario;
    private $videoVisto;
    private $Video_codVideo;

    public function __construct(){
      parent::__construct();
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
