<?php
include_once '../../Datos/Video.php';
include_once '../../Datos/Coincidencia.php';
include_once '../../Datos/Palabra.php';

$resultados=array();
$mensaje='';
$coincidencia1=new Coincidencia();

if($_POST){
	
  $busqueda = trim($_POST['buscar']);
  $numResul=0;
  if (empty($busqueda)){
	  $mensaje = 'Ingrese un término de búsqueda.';
  }else{
	// Si hay información para buscar
        $palabra=new Palabra();
        $codPalabras=$palabra->obtenerPalabras($busqueda);//obtener los cod de la tabla palabra
	if (!empty($codPalabras)){ 
            // Si se encontraron palabras, se busca en la tabla coincidencia
            
            foreach ($codPalabras as $value) {
                $resultados=$coincidencia1->obtenerCodCoincidencias($value);//Obtener los cod de la tabla coincidencias
                
            }
            $mensaje="Se obtuvieron ".$numResul." Resultados.";
	}else{
            $texto = "No se encontró ninguna coincidencia.";	
	}
  }
}
?>

<!DOCTYPE html>
<html>
<?php
  session_start();

  /*if(!array_key_exists("codUsuario", $_SESSION)){
    header("Location: index.php");
  }*/

  // Es necesario que lo lleven todas las que tienen el menu lateral izquierdo
  $seleccionar_navbar = "";
  
  $titulo = "Busqueda";
  include "headers_contenido.php";
?>
<body>
   <!--<form class="navbar-form navbar-left" id="buscador" name="buscador" method="post" action="<?php //echo $_SERVER['PHP_SELF'] ?>"> 
    <div class="input-group">
    <input id="buscar" name="buscar" type="search" class="form-control" placeholder="Busqueda..." autofocus >
    <span class="input-group-btn"><input type="submit" name="buscador" class="btn btn-primary" value="buscar"></span>
    </div>
  </form>
-->

  <?php include("navbar.php"); ?>

    <?php
        echo "`<p>".$mensaje."</p>";
    foreach ($resultados as $coin) {
        $coincidencia1->llenarCoincidencia($coin);
        $numResul.=1; 
        $video=$coincidencia1->getVideo();
        $tiempo=(int)$coincidencia1->getMinuto();
        $tiempo=$tiempo*60;
        $tiempo.=(int)$coincidencia1    ->getSegundo();
        
        echo "<div class=\"panel panel-headline\"><div class=\"contenedorVideo\"><div class=\"youtube-player\"><iframe src=\"https://www.youtube.com/embed/".$video->getUrl()."?rel=0&showinfo=0&start=".$tiempo."\" frameborder=\"0\" allow=\"accelerometer; autoplay;  encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe></div></div></div>";
        
    }
    ?>
</body>
</html>
