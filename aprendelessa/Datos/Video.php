<?php
  include("Conexion.php");

  class Video extends Conexion {

    private $codVideo;
    private $etiquetas;
    private $fecha;
    private $titulo;
    private $url;
    private $views;

    public function __construct(){
      parent::__construct();
    }

    public function setCodVideo($codVideo){
      $this->codVideo = $codVideo;
    }

    public function getCodVideo(){
      return $this->codVideo;
    }

    public function setEtiquetas($etiquetas){
      $this->etiquetas = $etiquetas;
    }

    public function getEtiquetas(){
      return $this->etiquetas;
    }

    public function setFecha($fecha){
      $this->fecha = $fecha;
    }

    public function getFecha(){
      return $this->fecha;
    }

    public function setTitulo($titulo){
      $this->titulo = $titulo;
    }

    public function getTitulo(){
      return $this->titulo;
    }

    public function setUrl($url){
      $this->url = $url;
    }

    public function getUrl(){
      return $this->url;
    }

    public function setViews($views){
      $this->views = $views;
    }

    public function getViews(){
      return $this->views;
    }
  }
?>
