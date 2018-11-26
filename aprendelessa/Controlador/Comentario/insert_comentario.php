<?php
  session_start();
  if(array_key_exists("codUsuario", $_SESSION) && array_key_exists("Video_codVideo", $_GET) && array_key_exists("contenido", $_GET)){
    include("../../Datos/Comentario.php");

    $comentario = new Comentario();
    $comentario->setContenido($_GET["contenido"]);
    $comentario->setUsuario_codUsuario($_SESSION["codUsuario"]);
    $comentario->setVideo_codVideo($_GET["Video_codVideo"]);

    echo $comentario->insertComentario();

  } else{
    header("Location: ../../index.php");
  }
?>
