<?php
	$titulo = "APRENDELESSA | Registrar";
	include("headers_contenido.php");
?>

<body>
	<style>
		.color-border-txt {
			border-color: red !important;
		}
	</style>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
								<div class="form-group">
									<input type="text" class="form-control" id="txt_nombre" placeholder="Nombre">
								</div>
                <div class="form-group">
									<input type="text" class="form-control" id="txt_apellido" placeholder="Apellido">
								</div>
                <div class="form-group">
									<select class="form-control" id="select_sexo">
										<option value="sexo" disabled="disabled" selected="true">Sexo</option>
										<option value="masculino">Másculino</option>
										<option value="femenino">Femenino</option>
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
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">¡Registrate!</h1>
							<p>by The Develovers</p>
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
      $("#txt_fecha_nac").datepicker();
    });

		$("#btn_registrar").click(function(){
			var error = "";

			if($("#txt_nombre").val() == ""){
				error += "Error en nombre";
				$("#txt_nombre").addClass("color-border-txt");
			} else {
				$("#txt_nombre").removeClass("color-border-txt");
			}

			if($("#txt_apellido").val() == ""){
				error += "Error en apellido";
				$("#txt_apellido").addClass("color-border-txt");
			} else {
				$("#txt_apellido").removeClass("color-border-txt");
			}

			if($("#select_sexo").val() == null){
				error += "Error en sexo";
				$("#select_sexo").addClass("color-border-txt");
			} else {
				$("#select_sexo").removeClass("color-border-txt");
			}

			if($("#txt_fecha_nac").val() == ""){
				error += "Error en fecha nacimiento";
				$("#txt_fecha_nac").addClass("color-border-txt");
			} else {
				$("#txt_fecha_nac").removeClass("color-border-txt");
			}

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
				// Primero comprobar si existe el correo
				var parametros = {
					'correo': $("#txt_correo").val(),
				}

				axios.get("Controlador/Usuario/comprobar_correo.php", {

        params: parametros

	      }).then(response => {
					//console.log(response.data[0].existe);
					if(response.data[0].existe > 0){
						alert("Ya existe un registro con esté correo.");
					} else {
						var parametros = {
							'nombre': $("#txt_nombre").val(),
							'apellido': $("#txt_apellido").val(),
							'sexo': $("#select_sexo").val(),
							'fecha_nac': formatFecha(new Date($("#txt_fecha_nac").val())),
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

			}
		});

		function formatFecha(fecha){
		 return fecha.getFullYear()+"-"+(fecha.getMonth()+1)+"-"+fecha.getDate();
	 	}
  </script>
	<?php
		include("footer_contenido.php");
	?>
