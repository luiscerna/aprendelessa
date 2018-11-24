<?php
  include("Conexion.php");

  class Comentario extends Conexion {

    private $codComentario;
    private $fechaHora;
    private $cantMeGusta;
    private $Video_codVideo;
    private $Usuario_codUsuario;

    public function __construct(){
      parent::__construct();
    }

    public function setCodComentario($codComentario){
      $this->codComentario = $codComentario;
    }

    public function getCodComentario(){
      return $this->codComentario;
    }

    public function setFechaHora($fechaHora){
      $this->fechaHora = $fechaHora;
    }

    public function getFechaHora(){
      return $this->fechaHora;
    }

    public function setCantMeGusta($cantMeGusta){
      $this->cantMeGusta = $cantMeGusta;
    }

    public function getCantMeGusta(){
      return $this->cantMeGusta;
    }

    public function setVideo_CodVideo($Video_codVideo){
      $this->Video_codVideo = $Video_codVideo;
    }

    public function getVideo_CodVideo(){
      return $this->Video_codVideo;
    }

    public function setUsuario_CodUsuario($Usuario_codUsuario){
      $this->Usuario_codUsuario = $Usuario_codUsuario;
    }

    public function getUsuario_CodUsuario(){
      return $this->Usuario_codUsuario;
    }
  }
?>  
