<?php
  include("Conexion.php");

  class Sugerencia extends Conexion {

    private $codSugerencia;
    private $contenido;
    private $Usuario_codUsuario;

    public function __construct(){
      parent::__construct();
    }

    public function setCodSugerencia($codSugerencia){
      $this->codSugerencia = $codSugerencia;
    }

    public function getCodSugerencia(){
      return $this->codSugerencia;
    }

    public function setContenido($contenido){
      $this->contenido = $contenido;
    }

    public function getContenido(){
      return $this->contenido;
    }

    public function setUsuario_codUsuario($Usuario_codUsuario){
      $this->Usuario_codUsuario = $Usuario_codUsuario;
    }

    public function getUsuario_codUsuario(){
      return $this->Usuario_codUsuario;
    }
  }
?>
