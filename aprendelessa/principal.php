<?php
	session_start();

	if(!array_key_exists("codUsuario", $_SESSION)){
		header("Location: index.php");
	}

	// Es necesario que lo lleven todas las que tienen el menu lateral izquierdo
	$seleccionar_navbar = "";

	$titulo = "APRENDELESSA | Cursos";
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
							<center>
							<h3 class="panel-title">Bienvenidos al curso de Aprende LESSA!!</h3>
							<img src="Imagenes/oskr.jpg">
							</center>
							<p class="panel-subtitle">Mi nombre es Oscar, y seré tu instructor de Lengua de Señas Salvadoreñas. Espero que este curso sea de tu agrado y que puedas ponerlo en práctica las veces que sean necesarias para que sigas reforzando tus conocimientos. 
							A lo largo de los días se seguirán actualizando más videos, y no olvides que puedes enviarnos todas tus sugerencias a la cuenta de aprendelessa@gmail.com. 
							Es un gusto acompañarte en este viaje de aprendizaje.</p>
						</div>
						<div class="panel-body">
							<div class="row">

							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
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
