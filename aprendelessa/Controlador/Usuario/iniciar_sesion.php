<?php
  session_start();
  if(array_key_exists("correo", $_GET) && array_key_exists("contrasenia", $_GET)){
    include("../../Datos/Usuario.php");
    $usuario = new Usuario();
    $usuario->setCorreo($_GET["correo"]);
    $usuario->setContrasenia($_GET["contrasenia"]);
    $fila = $usuario->selectIniciarSesion();
    if($fila["existe"] == 1){
      $_SESSION["codUsuario"] = $fila["codUsuario"];
      $_SESSION["nombre"] = $fila["nombre"];
      $_SESSION["apellido"] = $fila["apellido"];
      echo "true";
    } else{
      echo "false";
    }
  } else{
    //header("Location: ../../index.php");
  }
?>
