<?php
include_once '../../Datos/Video.php';
include_once '../../Datos/Coincidencia.php';
include_once '../../Datos/Palabra.php';

$resultados=array();
$coincidencias=array();
$mensaje='';
$coincidencia1=new Coincidencia();
$busqueda='';

//Funcion para resaltar Resultados
function resaltar_frase($string, $frase, $taga = '<b>', $tagb = '</b>'){
  return ($string !== '' && $frase !== '')? 
  preg_replace('/('.preg_quote($frase, '/').')/i'.('true' ? 'u' : ''), $taga.'\\1'.$tagb, $string):$string;
}

if($_POST){
	
  $busqueda = trim($_POST['buscar']);
  $numResul=0;
  if (empty($busqueda)){
	  $mensaje = 'Ingrese un t&eacutermino de b&uacutesqueda.';
  }else{
	// Si hay información para buscar
        $palabra=new Palabra();
        $codPalabras=$palabra->obtenerPalabras($busqueda);//obtener los cod de la tabla palabra
	if (!empty($codPalabras)){ 
            // Si se encontraron palabras, se busca en la tabla coincidencia
            
            foreach ($codPalabras as $value) {
                $coincidencias=$coincidencia1->obtenerCodCoincidencias($value);//Obtener los cod de la tabla coincidencias
                foreach ($coincidencias as $coinci) {
                  array_push($resultados, $coinci);
                } 
            }
            $numResul=sizeof($resultados);
            $mensaje="Se obtuvieron ".$numResul." resultados.";
	}else{
            $mensaje = "No se encontr&oacute ninguna coincidencia.";	
	}
  }
}
?>

<!DOCTYPE html>
<html>
<?php
  session_start();

  /*if(!array_key_exists("codUsuario", $_SESSION)){
    header("Location: /../../index.php");
  }*/

  // Es necesario que lo lleven todas las que tienen el menu lateral izquierdo
  $seleccionar_navbar = "";
  
  $titulo = "Busqueda";
  include_once "headers_contenido.php";
?>
<body>


  <?php include("navbar.php"); ?>

    <?php
        echo "<div class=\"relleno\" ><div class=\"relleno-hijo\"><p>".$mensaje."</p></div></div>";
    foreach ($resultados as $coin) {
        $coincidencia1->llenarCoincidencia($coin);
        $numResul.=1; 
        $video=$coincidencia1->getVideo();
        $palabra=$coincidencia1->getPalabra();
        $tiempo=(int)$coincidencia1->getMinuto();
        $tiempo=$tiempo*60;
        $tiempo+=(int)$coincidencia1    ->getSegundo();
          echo "<div class=\"contenedorBusqueda\">
                  <div class=\"contenedorVideo\">
                    <div class=\"youtube-player\">
                      <iframe src=\"https://www.youtube.com/embed/".$video->getUrl()."?color=white&iv_load_policy=3&showinfo=0&rel=0&start=".$tiempo."\" frameborder=\"0\" allow=\"accelerometer; autoplay;  encrypted-media; gyroscope; picture-in-picture\" allowfullscreen>
                      </iframe>
                    </div>
                  </div>
                  <div class=\"contenedorResultado\">
                    <table>
                      <tr> 
                        <td><span>Video:&nbsp; </span>".$video->getTitulo()."</td>
                      </tr>
                      <tr> 
                        <td><span>Coincidencia:&nbsp; </span>".resaltar_frase($palabra->getPalabra(),$busqueda)."</td>
                        <td><span>Minuto: &nbsp; </span>".$coincidencia1->getMinuto()."</td>
                      </tr>
                      <tr>
                        <td><span>Palabra:&nbsp;  </span>".$coincidencia1->getPalabra()->getPalabra()."</td>
                        <td><span>Segundo:&nbsp;  </span>".$coincidencia1->getSegundo()."</td>
                      </tr>
                    </table>
                    <table>
                      <tr> 
                        <td><span>Etiquetas: &nbsp;</span>".$video->getEtiquetas()."</td>
                      </tr>
                      <tr> 
                        <td><span>Reproducciones: &nbsp; </span>".$video->getViews()."</td>
                      </tr>
                    </table>
                  </div>
              </div>
          ";
        
    }
    ?>
</body>
</html>
