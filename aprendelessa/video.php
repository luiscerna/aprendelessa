<?php
	session_start();

	if(!array_key_exists("codUsuario", $_SESSION)){
		header("Location: index.php");
	} elseif (!array_key_exists("video", $_GET)) {
    header("Location: principal.php");
  }

	// Es necesario que lo lleven todas las que tienen el menu lateral izquierdo
	$seleccionar_navbar = "";

	// Cargar los datos del video
  include("Datos/Video.php");
  $video = new Video();
  $video->setCodVideo($_GET["video"]);
  $fila = $video->selectVideo();
  if($fila["existe"] != 1){
    header("Location: principal.php");
  }
	// Dar el  valor del titulo del video
  $seleccionar_navbar = $fila["titulo"];

	// Incrementar en 1 los views
	$views_aumento = 0;
	$views_aumento += $fila["views"] +1;

	// Guardar la nueva cantidad de vistas
	$video_save = new Video();
	$video_save->setCodVideo($_GET["video"]);
	$video_save->setViews($views_aumento);
	$video_save->updateVistasVideo();

	$titulo = "APRENDELESSA | ".$fila["titulo"];
	include("headers_contenido.php");
?>
<body>
	<style media="screen">
		.color-border-txt {
			border-color: red !important;
		}
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
							<p class="panel-subtitle"><?php echo $fila["fecha"]; ?> | Visto: <?php echo $fila["views"]; ?></p>
						</div>
						<div class="panel-body">
							<div class="row">
                <div class="col-sm-12">
                  <!-- https://www.youtube.com/embed/BKKueXko5S8 -->
                  <iframe width="853" height="480" src="https://www.youtube.com/embed/<?php echo $fila["url"]; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
          <!-- PUBLICIDAD -->
          <div class="row">
						<div class="col-sm-8">
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Comentarios</h3>
                  <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                  </div>
                </div>
                <div class="panel-body">
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<textarea class="form-control" id="txt_comentario" placeholder="Mi comentario..." rows="4"></textarea>
											</div>
											<button type="button" class="btn btn-primary" id="btn_comentar">Comentar</button>
										</div>
									</div>
									<hr>
									<div id="comentarios">

									</div>
                </div>
              </div>
            </div>
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
                  <a href="https://www.ceibal.edu.uy/es/articulo/ceibal-lsu-en-las-tablets">
                  	<img class="irc_mi" src="https://img.elcomercio.pe/files/article_content_ec_fotos/uploads/2017/09/09/59b40d3d89b49.jpeg"alt="Resultado de imagen para anuncios lenguaje de señas" onload="typeof google==='object'&amp;&amp;google.aft&amp;&amp;google.aft(this)" style="margin-top: 0px;" width="352" height="353">
                  </a>
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
		$(document).ready(function(){
			// Hay que registrar el video
			var parametros = {
				'Video_codVideo': <?php echo $_GET["video"]; ?>,
			}

			axios.get("Controlador/Reproduccion/insert_reproduccion.php", {

			params: parametros

			}).then(response => {
				//console.log(response);

			}).catch(e => {
				alert('Han ocurrido algunos problemas, intente nuevamente más tarde.');
				console.log('Ha ocurrido el siguiete error: '+e);
			});

			cargarComentarios();
		});

		// Añadir comentario
		$("#btn_comentar").click(function(){
			var error = "";

			if($("#txt_comentario").val() == ""){
				error += "Error";
				$("#txt_comentario").addClass("color-border-txt");
			} else {
				$("#txt_comentario").removeClass("color-border-txt");
			}

			if(error == ""){
				var parametros = {
					'Video_codVideo': <?php echo $_GET["video"]; ?>,
					'contenido': $("#txt_comentario").val(),
				}

				axios.get("Controlador/Comentario/insert_comentario.php", {

				params: parametros

				}).then(response => {
					//console.log(response);
					$("#txt_comentario").val("");

					cargarComentarios();

				}).catch(e => {
					alert('Han ocurrido algunos problemas, intente nuevamente más tarde.');
					console.log('Ha ocurrido el siguiete error: '+e);
				});
			}
		});

		function cargarComentarios() {
			var parametros = {
				'Video_codVideo': <?php echo $_GET["video"]; ?>,
			}

			axios.get("Controlador/Comentario/cargar_comentarios.php", {

			params: parametros

			}).then(response => {
				if(response.data == null){
					console.log("Lo siento bra");
				} else {
					//console.log(response.data);
					var html = "";
					for(var i=0;i<response.data.length;i++){
						html += `<h4>${response.data[i].nombre} [${response.data[i].fechaHora}]</h4>
										 <p>${response.data[i].contenido}</p><br>`;
					}
					//
					//console.log(response);
					$("#comentarios").html(html);
				}
			}).catch(e => {
				alert('Han ocurrido algunos problemas, intente nuevamente más tarde.');
				console.log('Ha ocurrido el siguiete error: '+e);
			});
		}
	</script>
	<?php
		include("footer_contenido.php");
	?>
