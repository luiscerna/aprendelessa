<?php
  session_start();
  if(array_key_exists("codUsuario", $_SESSION)){
    include("../../Datos/Reproduccion.php");

    $reproduccion = new Reproduccion();
    $reproduccion->setUsuario_codUsuario($_SESSION["codUsuario"]);

    echo $reproduccion->cargarVideosYaVistos();

  } else{
    header("Location: ../../index.php");
  }
?>
