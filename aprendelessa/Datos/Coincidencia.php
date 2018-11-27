<?php
  include_once "Conexion.php";
  include_once 'Video.php';

  class Coincidencia extends Conexion {

    private $codCoincidencia;
    private $minuto;
    private $segundo;
    private $Palabra_codPalabra;
    private $Video_codVideo;
    private $video;

    public function __construct(){
      parent::__construct();
    }
    
    //Obtener un array con todas las coincidencias de cada codPalabra
    public function obtenerCodCoincidencias($codPalabra) {
      $query = "SELECT codCoincidencia FROM coincidencia WHERE Palabra_codPalabra = ".$codPalabra.";";
      $result = mysqli_query(parent::conexion(), $query);
      $codCoincidencias=array();
      if($result){
        while($fila= mysqli_fetch_assoc($result)){
            array_push($codCoincidencias, $fila['codCoincidencia']);
        }
        parent::desconectar();
        return $codCoincidencias;
      } else{
        //echo parent::conexion()->error;
        parent::desconectar();
        return $codCoincidencias;
      }
        
    }

    //Obtener los datos de la coincidencia y el Video Correspondiente
    public function llenarCoincidencia($codCoin) {
      $query = "SELECT codCoincidencia, minuto, segundo, Palabra_codPalabra, Video_codVideo FROM coincidencia WHERE codCoincidencia = ".$codCoin.";";
      $result = mysqli_query(parent::conexion(), $query);
      if($result){
        $fila = mysqli_fetch_array($result);
        $this->codCoincidencia=$fila[0];
        $this->minuto=$fila[1];
        $this->segundo=$fila[2];
        $this->Palabra_codPalabra=$fila[3];
        $this->Video_codVideo=$fila[4];
        $this->video=new Video();
        $this->video->llenarVideo($this->Video_codVideo);
        parent::desconectar();
        return true;
      } else{
        //echo parent::conexion()->error;
        parent::desconectar();
        return false;
      }
    }
    
    public function setCodCoincidencia($codCoincidencia){
      $this->codCoincidencia = $codCoincidencia;
    }

    public function getCodCoincidencia(){
      return $this->codCoincidencia;
    }

    public function setMinuto($minuto){
      $this->minuto = $minuto;
    }

    public function getMinuto(){
      return $this->minuto;
    }

    public function setSegundo($segundo){
      $this->segundo = $segundo;
    }

    public function getSegundo(){
      return $this->segundo;
    }

    public function setPalabra_CodPalabra($Palabra_codPalabra){
      $this->Palabra_codPalabra = $Palabra_codPalabra;
    }

    public function getPalabra_CodPalabra(){
      return $this->Palabra_codPalabra;
    }

    public function setVideo_CodVideo($Video_codVideo){
      $this->Video_codVideo = $Video_codVideo;
    }

    public function getVideo_CodVideo(){
      return $this->Palabra_codPalabra;
    }
    
    public function setVideo($video){
      $this->video = $video;
    }

    public function getVideo(){
      return $this->video;
    }
  }
?>  
    