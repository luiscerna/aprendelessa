<?php
  session_start();
  if(array_key_exists("codUsuario", $_SESSION)){
    include("../../Datos/Usuario.php");
    $usuario = new Usuario();
    $usuario->setCodUsuario($_SESSION["codUsuario"]);
    echo $usuario->cargarUsuario();
  } else{
    header("Location: ../../index.php");
  }
?>
