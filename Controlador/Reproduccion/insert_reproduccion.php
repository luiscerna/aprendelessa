<?php
  session_start();
  if(array_key_exists("codUsuario", $_SESSION) && array_key_exists("Video_codVideo", $_GET)){
    include("../../Datos/Reproduccion.php");
    // Comprobar si ya existe registro de la reproduccion de este video
    include("Datos/Reproduccion.php");
    $reproduccion = new Reproduccion();
    $reproduccion->setUsuario_codUsuario($_SESSION["codUsuario"]);
    $reproduccion->setVideo_codVideo($_GET["Video_codVideo"]);

    $resultado = $reproduccion->comprobarReproduccion();
    if($resultado["existe"] != 1){
      // Almacenar el video visto con respecto al codUsuario
      echo $reproduccion->insertReproduccion();
    }
  } else{
    header("Location: ../../index.php");
  }
?>
