<?php
  include("Conexion.php");

  class Usuario extends Conexion {

    private $codUsuario;
    private $nombre;
    private $apellido;
    private $sexo;
    private $fecha_nac;
    private $correo;
    private $contrasenia;

    public function __construct(){
      parent::__construct();
    }

    //Insertar usuario desde registrar.php
    public function insertUsuario(){
      $query = "INSERT INTO usuario (nombre, apellido, sexo, fecha_nac, correo, contrasenia) VALUES ('".parent::string($this->getNombre())."', '".parent::string($this->getApellido())."', '".parent::string($this->getSexo())."', '".parent::string($this->getFecha_Nac())."', '".parent::string($this->getCorreo())."', '".parent::string($this->getContrasenia())."');";
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

    //Comprobar si el correo ya está registrado registrar.php
    public function comprobarCorreo(){
      $query = "SELECT COUNT(*) AS existe FROM usuario WHERE correo = '".parent::string($this->getCorreo())."';";
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

    //Seleccionar datos para login iniciarsesion.php
    public function selectIniciarSesion(){
      $query = "SELECT codUsuario, nombre, apellido, sexo, count(*) as existe FROM usuario WHERE correo = '".parent::string($this->getCorreo())."' AND contrasenia = '".parent::string($this->getContrasenia())."' LIMIT 1;";
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

    //Guardar datos de inicio de sesion
    /*public function inicioSesion(){
      $query = "CALL inicioSesion(".parent::string($this->getIdusuario()).");";
      $result = mysqli_query(parent::conexion(), $query);
      if($result){
        $fila = mysqli_fetch_array($result);
        $this->setIdInicios_Sesion($fila["idinicios_sesion"]);
        parent::desconectar();
        return true;
      } else{
        echo parent::conexion()->error;
        parent::desconectar();
        return false;
      }
    }*/

    public function setCodUsuario($codUsuario){
      $this->codUsuario = $codUsuario;
    }

    public function getCodUsuario(){
      return $this->codUsuario;
    }

    public function setNombre($nombre){
      $this->nombre = $nombre;
    }

    public function getNombre(){
      return $this->nombre;
    }

    public function setApellido($apellido){
      $this->apellido = $apellido;
    }

    public function getApellido(){
      return $this->apellido;
    }

    public function setSexo($sexo){
      $this->sexo = $sexo;
    }

    public function getSexo(){
      return $this->sexo;
    }

    public function setFecha_Nac($fecha_nac){
      $this->fecha_nac = $fecha_nac;
    }

    public function getFecha_Nac(){
      return $this->fecha_nac;
    }

    public function setCorreo($correo){
      $this->correo = $correo;
    }

    public function getCorreo(){
      return $this->correo;
    }

    public function setContrasenia($contrasenia){
      $this->contrasenia = $contrasenia;
    }

    public function getContrasenia(){
      return $this->contrasenia;
    }
  }
?>
