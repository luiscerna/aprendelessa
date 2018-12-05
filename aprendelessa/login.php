<?php
	session_start();

	if(array_key_exists("codUsuario", $_SESSION)){
		header("Location: principal.php");
	}

	$titulo = "APRENDELESSA | Login";
	include("headers_contenido.php");
?>

<body>
	<!-- WRAPPER -->
	<style>
		.color-border-txt {
			border-color: red !important;
		}
		.alert-danger {
			display: none;
		}
	</style>
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="alert alert-danger alert-dismissible" role="alert">
								<i class="fa fa-times-circle"></i><span id="mensaje_error"></span>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="txt_correo" placeholder="Correo">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="txt_contrasenia" placeholder="Contraseña">
							</div>
							<button type="submit" class="btn btn-primary btn-lg btn-block" id="btn_inicia_sesion">INICIAR SESIÓN</button>
							<p>¿No tienes una cuenta?    <a href="registrar.php">Registrate</a></p>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Inicia sesión en el mejor sitio para aprender LESSA</h1>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
	<script type="text/javascript">
		var emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

		$(document).ready(function(){

		});

		$(document).keypress(function(e) {
			if(e.which == 13) {
				iniciarSesion();
			}
		});

		$("#btn_inicia_sesion").click(function(){
			iniciarSesion();
		});

		function iniciarSesion() {
			var error = "";

			if(!emailRegex.test($("#txt_correo").val()) || $("#txt_correo").val() == ""){
				error += "Error en correo";
				$("#txt_correo").addClass("color-border-txt");
			} else {
				$("#txt_correo").removeClass("color-border-txt");
			}

			if($("#txt_contrasenia").val() == ""){
				error += "Error en contraseña";
				$("#txt_contrasenia").addClass("color-border-txt");
			} else {
				$("#txt_contrasenia").removeClass("color-border-txt");
			}

			if(error == ""){
				$(".alert-danger").css({"display":"none"});
				// Primero comprobar si existe el correo
				var parametros = {
					'correo': $("#txt_correo").val(),
				}

				axios.get("Controlador/Usuario/comprobar_correo.php", {

        params: parametros

	      }).then(response => {
					//console.log(response.data[0].existe);
					console.log(response);
					if(response.data[0].existe > 0){

						var parametros = {
							'correo': $("#txt_correo").val(),
							'contrasenia': $("#txt_contrasenia").val(),
						}

						axios.get("Controlador/Usuario/iniciar_sesion.php", {

		        params: parametros

			      }).then(response => {
							//console.log(response.data[0].existe);
							console.log(response);
							console.log(response.data);
							if(response.data == true){
								window.location.href = "principal.php";
							} else {
								$(".alert-danger").css({"display":"block"});
								$("#mensaje_error").html(" Verifique que el correo y contraseña sean correctos.")
							}
			      }).catch(e => {
			        alert('Han ocurrido algunos problemas, intente nuevamente más tarde.');
			        console.log('Ha ocurrido el siguiete error: '+e);
			      });

					} else {
						$(".alert-danger").css({"display":"block"});
						$("#mensaje_error").html(" El correo es incorrecto.")
					}
	      }).catch(e => {
	        alert('Han ocurrido algunos problemas, intente nuevamente más tarde.');
	        console.log('Ha ocurrido el siguiete error: '+e);
	      });

			} else {
				$(".alert-danger").css({"display":"block"});
				$("#mensaje_error").html(" Hay campos vacios o no son correctos.");
			}
		}
	</script>
	<?php
		include("footer_contenido.php");
	?>
