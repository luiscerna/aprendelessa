<?php
session_start();
if(array_key_exists("nombre", $_GET) && array_key_exists("apellido", $_GET) && array_key_exists("sexo", $_GET) && array_key_exists("fecha_nac", $_GET) && array_key_exists("correo", $_GET) && array_key_exists("contrasenia", $_GET)){
  include("../../Datos/Usuario.php");
  $usuario = new Usuario();
  $usuario->setNombre($_GET["nombre"]);
  $usuario->setApellido($_GET["apellido"]);
  $usuario->setSexo($_GET["sexo"]);
  $usuario->setFecha_Nac($_GET["fecha_nac"]);
  $usuario->setCorreo($_GET["correo"]);
  $usuario->setContrasenia($_GET["contrasenia"]);
  echo $usuario->insertUsuario();
} else{
  //header("Location: ../../index.php");
}
?>
