<?php
  include_once 'Conexion.php';

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
    
    //llenar datos de Video
    public function llenarVideo($codVideo){
      $query = "SELECT codVideo, etiquetas, fecha, titulo, url, views FROM video WHERE codVideo = ".$codVideo.";";
      $result = mysqli_query(parent::conexion(), $query);
      if($result){
        $fila = mysqli_fetch_array($result);
        $this->codVideo=$fila[0];
        $this->etiquetas=$fila[1];
        $this->fecha=$fila[2];
        $this->titulo=$fila[3];
        $this->url=$fila[4];
        
        parent::desconectar();
        return true;
      } else{
        //echo parent::conexion()->error;
        parent::desconectar();
        return false;
      }
    }

    // Traer los datos del video
    public function selectVideo(){
      $query = "SELECT etiquetas, fecha, titulo, url, views, count(*) as existe FROM video WHERE codVideo = ".parent::string($this->getCodVideo())." LIMIT 1;";
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

    // Actualizar número de vistas del video
    public function updateVistasVideo(){
      $query = "UPDATE video SET views = ".parent::string($this->getViews())." WHERE codVideo = ".parent::string($this->getCodVideo()).";";
      $result = mysqli_query(parent::conexion(), $query);
      if($result){
        parent::desconectar();
        return true;
      } else{
        echo parent::conexion()->error;
        parent::desconectar();
        return false;
      }
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
