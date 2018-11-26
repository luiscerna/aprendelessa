<?php
  session_start();
  if(array_key_exists("codUsuario", $_SESSION) && array_key_exists("Video_codVideo", $_GET)){
    include("../../Datos/Comentario.php");

    $comentario = new Comentario();
    $comentario->setVideo_codVideo($_GET["Video_codVideo"]);

    echo $comentario->cargarComentarios();

  } else{
    header("Location: ../../index.php");
  }
?>
