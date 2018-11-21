<?php
  session_start();
  if(array_key_exists("correo", $_GET)){
    include("../../Datos/Usuario.php");
    $usuario = new Usuario();
    $usuario->setCorreo($_GET["correo"]);
    echo $usuario->comprobarCorreo();
  } else{
    //header("Location: ../../index.php");
  }
?>
