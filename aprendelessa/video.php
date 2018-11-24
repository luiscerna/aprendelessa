<?php
	session_start();

	if(!array_key_exists("codUsuario", $_SESSION)){
		header("Location: index.php");
	} elseif (!array_key_exists("video", $_GET)) {
    header("Location: principal.php");
  }

  include("Datos/Video.php");
  $video = new Video();
  $video->setCodVideo($_GET["video"]);
  $fila = $video->selectVideo();
  if($fila["existe"] == 1){
    echo "Todo bien";
  } else{
    echo "Algo ha salido mal";
  }

  $seleccionar_navbar = $fila["titulo"];

	$titulo = "APRENDELESSA | ".$fila["titulo"];
	include("headers_contenido.php");
?>
<body>
	<style media="screen">
	</style>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<?php include("navbar.php"); ?>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<?php include("menu_lateral.php"); ?>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Titulo: <?php echo $seleccionar_navbar; ?></h3>
							<p class="panel-subtitle"><?php echo $fila["fecha"]; ?></p>
						</div>
						<div class="panel-body">
							<div class="row">
                <div class="col-sm-12">
                  <!-- https://www.youtube.com/embed/BKKueXko5S8 -->
                  <iframe width="853" height="480" src="<?php echo $fila["url"]; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
          <!-- PUBLICIDAD -->
          <div class="row">
            <div class="col-sm-4">
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Espacio Publicitario</h3>
                  <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                  </div>
                </div>
                <div class="panel-body">
                  <!-- AGREGAR IMAGEN DE PUBLICIDAD -->
                </div>
              </div>
            </div>
          </div>
          <!-- END PUBLICIDAD -->
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<!-- <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p> -->
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script>

	</script>
	<?php
		include("footer_contenido.php");
	?>
