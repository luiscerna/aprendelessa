<?php
  include("Conexion.php");

  class Palabra extends Conexion {

    private $codPalabra;
    private $palabra;

    public function __construct(){
      parent::__construct();
    }

    public function setCodPalabra($codPalabra){
      $this->codPalabra = $codPalabra;
    }

    public function getCodPalabra(){
      return $this->codPalabra;
    }

    public function setPalabra($palabra){
      $this->palabra = $palabra;
    }

    public function getPalabra(){
      return $this->palabra;
    }
  }
?>  