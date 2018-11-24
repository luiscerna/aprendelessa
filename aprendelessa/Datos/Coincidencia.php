<?php
  include("Conexion.php");

  class Coincidencia extends Conexion {

    private $codCoincidencia;
    private $minuto;
    private $segundo;
    private $Palabra_codPalabra;
    private $Video_codVideo;

    public function __construct(){
      parent::__construct();
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
  }
?>  
    