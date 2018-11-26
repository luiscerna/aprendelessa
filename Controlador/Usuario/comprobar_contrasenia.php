<?php
  session_start();
  if(array_key_exists("codUsuario", $_SESSION) && array_key_exists("contrasenia", $_GET)){
    include("../../Datos/Usuario.php");
    $usuario = new Usuario();
    $usuario->setCodUsuario($_SESSION["codUsuario"]);
    $usuario->setContrasenia($_GET["contrasenia"]);
    echo $usuario->comprobarContrasenia();
  } else{
    header("Location: ../../index.php");
  }
?>
