<?php
include_once '../../Datos/Video.php';
include_once '../../Datos/Coincidencia.php';
include_once '../../Datos/Palabra.php';

$resultados=array();
$mensaje='';

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
            $coincidencia1=new Coincidencia();
            foreach ($codPalabras as $value) {
                $codCoincidencias=$coincidencia1->obtenerCodCoincidencias($value);//Obtener los cod de la tabla coincidencias
                foreach ($codCoincidencias as $coin){
                    $coincidencia1->llenarCoincidencia($coin);
                    array_push($resultados, $coincidencia1);//Crea una coincidencias por cada cod, y automaticamente obtiene el video.
                    $numResul.=1;
                }
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
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Busqueda</title>
  <!--<link rel="stylesheet" href="">-->
</head>
<body>
   <form id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"> 
    <input id="buscar" name="buscar" type="search" placeholder="Busqueda..." autofocus >
    <input type="submit" name="buscador" class="boton peque aceptar" value="buscar">
  </form>

    <?php
    foreach ($resultados as $coincidencia) {
        $video=$coincidencia->getVideo();
        $tiempo=(int)$coincidencia->getMinuto();
        $tiempo=$tiempo*60;
        $tiempo.=(int)$coincidencia->getSegundo();
        echo "<iframe class=\"videoResultado\" width=\"70%\" height=auto src=\"https://www.youtube.com/embed/".$video->getUrl()."?start=".$tiempo." frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
    }
    ?>
</body>
</html>