<?php
  include("Conexion.php");

  class Comentario extends Conexion {

    private $codComentario;
    private $contenido;
    private $fechaHora;
    private $cantMeGusta;
    private $Video_codVideo;
    private $Usuario_codUsuario;

    public function __construct(){
      parent::__construct();
    }

    //Insertar los videos ya vostos
    public function insertComentario(){
      $query = "INSERT INTO comentario (contenido, fechaHora, cantMeGusta, Video_codVideo, Usuario_codUsuario) VALUES ('".parent::string($this->getContenido())."', NOW(), 0, ".parent::string($this->getVideo_codVideo()).", ".parent::string($this->getUsuario_codUsuario()).");";
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

    //Cargas las generales de las listas
    public function cargarComentarios(){
      $query = "SELECT comentario.codComentario, comentario.contenido, comentario.fechaHora, comentario.cantMeGusta, usuario.nombre, usuario.apellido FROM comentario INNER JOIN video ON video.codVideo = comentario.Video_codVideo INNER JOIN usuario ON usuario.codUsuario = comentario.Usuario_codUsuario WHERE comentario.Video_codVideo = ".parent::string($this->getVideo_codVideo())." ORDER BY comentario.codComentario DESC;";
      $result = mysqli_query(parent::conexion(), $query);
      $arreglo = null;

      if(!$result){
          die("Error");
      } else{
        while($data = mysqli_fetch_assoc($result)){
          $arreglo[] = $data;
        }
      }

      parent::desconectar();
      return json_encode($arreglo);
    }

    public function setCodComentario($codComentario){
      $this->codComentario = $codComentario;
    }

    public function getCodComentario(){
      return $this->codComentario;
    }

    public function setContenido($contenido){
      $this->contenido = $contenido;
    }

    public function getContenido(){
      return $this->contenido;
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
