<?php
  include_once 'Conexion.php'; 

  class Palabra extends Conexion {

    private $codPalabra;
    private $palabra;

    public function __construct(){
      parent::__construct();
    }
    
    //Primero buscar el termino en la tabla Palabras y devolver todos los cod de los resultados
    public function obtenerPalabras($palabra) {
        $query="select * from palabra where palabra like '".$palabra."' UNION select * from palabra where palabra like '%".$palabra."';";
        $result = mysqli_query(parent::conexion(), $query);
        $codPalabras=array();
        if($result){
        while($fila= mysqli_fetch_assoc($result)){
            array_push($codPalabras, $fila['codPalabra']);
        }
        parent::desconectar();
        return $codPalabras;
      } else{
        //echo parent::conexion()->error;
        parent::desconectar();
        return $codPalabras;
      }
        
    }

    public function llenarPalabra($codPalabra) {
        $query="select * from palabra where codPalabra = ".$codPalabra." LIMIT 1;";
        $result = mysqli_query(parent::conexion(), $query);
        if($result){
          $fila= mysqli_fetch_assoc($result);
          $this->codPalabra=$fila['codPalabra'];
          $this->palabra=$fila['palabra'];
        parent::desconectar();
        return true;
      } else{
        //echo parent::conexion()->error;
        parent::desconectar();
        return false;
      }
        
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