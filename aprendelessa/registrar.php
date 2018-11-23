<?php
	session_start();

	if(array_key_exists("codUsuario", $_SESSION)){
		header("Location: principal.php");
	}

	$titulo = "APRENDELESSA | Registrar";
	include("headers_contenido.php");
?>

<body>
	<style>
		.color-border-txt {
			border-color: red !important;
		}
		.panel-title {
			text-align: left !important;
		}
		.alert-danger {
			display: none;
		}
	</style>
	<!-- WRAPPER -->
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
								<input type="text" class="form-control" id="txt_nombre" placeholder="Nombre">
							</div>
              <div class="form-group">
								<input type="text" class="form-control" id="txt_apellido" placeholder="Apellido">
							</div>
              <div class="form-group">
								<select class="form-control" id="select_sexo">
									<option value="sexo" disabled="disabled" selected="true">Sexo</option>
									<option value="Másculino">Másculino</option>
									<option value="Femenino">Femenino</option>
								</select>
							</div>
              <div class="form-group">
								<input type="text" class="form-control" id="txt_fecha_nac" placeholder="Fecha de Nacimiento"></p>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="txt_correo" placeholder="Correo">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="txt_contrasenia" placeholder="Contreña">
							</div>
							<button class="btn btn-primary btn-lg btn-block" id="btn_registrar">REGISTRAR</button>
							<p>¿Ya tienes una cuenta?   <a href="login.php">Iniciar Sesión</a></p>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">¡Registrate para prender LESSA!</h1>
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
      $("#txt_fecha_nac").datepicker({
				dateFormat: 'dd/mm/yy',
				maxDate: new Date,
				changeMonth: true,
      	changeYear: true,
				yearRange: "-100:+0",
			});
    });

		$(document).keypress(function(e) {
			if(e.which == 13) {
				guardarRegistro();
			}
		});

		$("#btn_registrar").click(function(){
			guardarRegistro();
		});

		function guardarRegistro() {
			var error = "";

			error += validar("txt_nombre");
			error += validar("txt_apellido");

			if($("#select_sexo").val() == null){
				error += "Error en sexo";
				$("#select_sexo").addClass("color-border-txt");
			} else {
				$("#select_sexo").removeClass("color-border-txt");
			}

			error += validar("txt_fecha_nac");

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
					if(response.data[0].existe > 0){
						$(".alert-danger").css({"display":"block"});
						$("#mensaje_error").html(" Ya existe un registro con esté correo.");
					} else {
						var fecha_na = $("#txt_fecha_nac").val();
						fecha_na = fecha_na.substr(3,2)+"/"+fecha_na.substr(0,2)+"/"+fecha_na.substr(6,4);

						var parametros = {
							'nombre': $("#txt_nombre").val(),
							'apellido': $("#txt_apellido").val(),
							'sexo': $("#select_sexo").val(),
							'fecha_nac': formatFecha(new Date(fecha_na)),
							'correo': $("#txt_correo").val(),
							'contrasenia': $("#txt_contrasenia").val(),
						}

						// Se procede a registrar
						axios.get("Controlador/Usuario/registrar_usuario.php", {

		        params: parametros

			      }).then(response => {
							//console.log(response.data[0].existe);
							//alert("Se ha registrado "+response.data);
							console.log(response);
							console.log("Ya te haz registrado!");
							window.location.href = "login.php";
			      }).catch(e => {
			        alert('Han ocurrido algunos problemas, intente nuevamente más tarde.');
			        console.log('Ha ocurrido el siguiete error: '+e);
			      });
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

		function formatFecha(fecha){
		 return fecha.getFullYear()+"-"+(fecha.getMonth()+1)+"-"+fecha.getDate();
	 	}

		function validar(entrada){
			if($("#"+entrada).val() == ""){
				$("#"+entrada).addClass("color-border-txt");
				return "error";
			} else {
				$("#"+entrada).removeClass("color-border-txt");
				return "";
			}
		}
  </script>
	<?php
		include("footer_contenido.php");
	?>
