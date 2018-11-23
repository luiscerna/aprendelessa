<?php
  session_start();
  if(array_key_exists("codUsuario", $_SESSION) && array_key_exists("nombre", $_GET) && array_key_exists("apellido", $_GET) && array_key_exists("sexo", $_GET) && array_key_exists("fecha_nac", $_GET)){
    include("../../Datos/Usuario.php");
    $usuario = new Usuario();
    $usuario->setCodUsuario($_SESSION["codUsuario"]);
    $usuario->setNombre($_GET["nombre"]);
    $usuario->setApellido($_GET["apellido"]);
    $usuario->setSexo($_GET["sexo"]);
    $usuario->setFecha_Nac($_GET["fecha_nac"]);

    $_SESSION["nombre"] = $_GET["nombre"];
    $_SESSION["apellido"] = $_GET["apellido"];

     echo $usuario->updateUsuario();
  } else{
    header("Location: ../../index.php");
  }
?>
