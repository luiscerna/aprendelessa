<?php
	session_start();

	if(!array_key_exists("codUsuario", $_SESSION)){
		header("Location: index.php");
	}

	$titulo = "APRENDELESSA | Mi Perfil";
	include("headers_contenido.php");
?>
<body>
	<style media="screen">
		.inputs-ocultar, #form_cambiar_contraseña,  #alert_datos_usuario, #alert_contrasenia, #btn-guardar-contrasenia {
			display: none;
		}
		.color-border-txt {
			border-color: red !important;
		}
	</style>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="vista/template_contenido/assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>
								<?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"];  ?>
							</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="perfil.php"><i class="lnr lnr-user"></i> <span>Mi perfil</span></a></li>
								<li><a href="index.php?cerrar=true"><i class="lnr lnr-exit"></i> <span>Salir</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
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
							<h3 class="panel-title">Mi Perfil [<span class="labels-ocultar" id="lbl_correo"></span>]</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-6">
									<button type="button" class="btn btn-warning" id="btn-editar"><span class="lnr lnr-pencil"></span> Editar Datos</button>
									<button type="button" class="btn btn-primary inputs-ocultar" id="btn-guardar">Guardar Datos</button>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-12">
									<div id="alert_datos_usuario" class="alert alert-danger alert-dismissible" role="alert">
										<i class="fa fa-times-circle"></i><span id="mensaje_error"></span>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
                <div class="col-sm-4">
                  <h3 class="panel-title">Nombre: <strong><span class="labels-ocultar" id="lbl_nombre"></span></strong></h3>
									<input type="text" class="form-control input-sm inputs-ocultar" id="txt_nombre" placeholder="Nombre">
                </div>
                <div class="col-sm-4">
                  <h3 class="panel-title">Apellido: <strong><span class="labels-ocultar" id="lbl_apellido"></span></strong></h3>
									<input type="text" class="form-control input-sm inputs-ocultar" id="txt_apellido" placeholder="Apellido">
                </div>
                <div class="col-sm-4">
                  <h3 class="panel-title">Sexo: <strong><span class="labels-ocultar" id="lbl_sexo"></span></strong></h3>
									<select class="form-control input-sm inputs-ocultar" id="select_sexo">
										<option value="sexo" disabled="disabled" selected="true">Sexo</option>
										<option value="Másculino">Másculino</option>
										<option value="Femeino">Femenino</option>
									</select>
                </div>
							</div>
							<br>
              <div class="row">
                <div class="col-sm-4">
                  <h3 class="panel-title">Fecha de Nacimiento: <strong><span class="labels-ocultar" id="lbl_fecha_nac"></span></strong></h3>
									<input type="text" class="form-control input-sm inputs-ocultar" id="txt_fecha_nac" placeholder="Fecha de Nacimiento"></p>
                </div>
              </div>
							<br>
							<div class="row">
								<div class="col-sm-6">
									<button type="button" class="btn btn-info" id="btn-cambiar-contrasenia"><span class="lnr lnr-pencil"></span> Cambiar Contraseña</button>
									<button type="button" class="btn btn-primary" id="btn-guardar-contrasenia">Guardar Contraseña</button>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-12">
									<div id="alert_contrasenia" class="alert alert-danger alert-dismissible" role="alert">
										<i class="fa fa-times-circle"></i><span id="mensaje_error_contrasenia"></span>
									</div>
								</div>
							</div>
							<br>
							<div class="row" id="form_cambiar_contraseña">
								<div class="col-sm-4">
									<input type="password" class="form-control input-sm" id="txt_contrasenia" placeholder="Contraseña Actual">
								</div>
								<div class="col-sm-4">
									<input type="password" class="form-control input-sm" id="txt_contrasenia_nueva" placeholder="Contraseña Nueva">
								</div>
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
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->

	<script>
    $(document).ready(function(){
			$("#txt_fecha_nac").datepicker({
				dateFormat: 'dd/mm/yy',
				maxDate: new Date,
				changeMonth: true,
      	changeYear: true,
				yearRange: "-100:+0",
			});

      cargarDatos();
    });

		// Para mostrar los inputs y poder editar
		$("#btn-editar").click(function(){
			$(".labels-ocultar").hide();
			$(".inputs-ocultar").show();
		});

		// Para guardar los cambios hechos
		$("#btn-guardar").click(function(){
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

			if(error == ""){
				$("#alert_datos_usuario").css({"display":"none"});
				// Primero comprobar si existe el correo
				var fecha_na = $("#txt_fecha_nac").val();
				fecha_na = fecha_na.substr(3,2)+"/"+fecha_na.substr(0,2)+"/"+fecha_na.substr(6,4);

				var parametros = {
					'nombre': $("#txt_nombre").val(),
					'apellido': $("#txt_apellido").val(),
					'sexo': $("#select_sexo").val(),
					'fecha_nac': formatFecha(new Date(fecha_na)),
				}

				axios.get("Controlador/Usuario/actualizar_usuario.php", {

        params: parametros

	      }).then(response => {
					//console.log(response.data[0].existe);
					console.log(response.data);

					cargarDatos();
					$(".inputs-ocultar").hide();
					$(".labels-ocultar").show();

	      }).catch(e => {
	        alert('Han ocurrido algunos problemas, intente nuevamente más tarde.');
	        console.log('Ha ocurrido el siguiete error: '+e);
	      });
			} else {
				$("#alert_datos_usuario").css({"display":"block"});
				$("#mensaje_error").html(" Hay campos vacios o no son correctos.");
			}
		});

		// Abrir formulario para Cambiar contraseña
		$("#btn-cambiar-contrasenia").click(function(){
			$("#form_cambiar_contraseña").show();
			$("#btn-guardar-contrasenia").show();
		});

		// Verificar y hacer efectivos el cambio en la contraseña
		$("#btn-guardar-contrasenia").click(function(){
			var error = "";

			error += validar("txt_contrasenia");
			error += validar("txt_contrasenia_nueva");

			if(error == ""){
				$("#alert_contrasenia").css({"display":"none"});

				var parametros = {
					'contrasenia': $("#txt_contrasenia").val(),
				}

				axios.get("Controlador/Usuario/comprobar_contrasenia.php", {

				params: parametros

				}).then(response => {
					//console.log(response.data[0].existe);
					if(response.data[0].iguales == 0){
						$("#alert_contrasenia").css({"display":"block"});
						$("#mensaje_error_contrasenia").html(" La contrasena actual es incorrecta.");
					} else {
						var parametros = {
							'contrasenia': $("#txt_contrasenia").val(),
							'contrasenia_nueva': $("#txt_contrasenia_nueva").val(),
						}

						// Se procede a registrar
						axios.get("Controlador/Usuario/cambiar_contrasenia.php", {

						params: parametros

						}).then(response => {
							//console.log(response.data[0].existe);
							//alert("Se ha registrado "+response.data);
							//console.log(response);

							$("#form_cambiar_contraseña").hide();
							$("#btn-guardar-contrasenia").hide();
							$("#txt_contrasenia").val("");
							$("#txt_contrasenia_nueva").val("");

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
				$("#alert_contrasenia").css({"display":"block"});
				$("#mensaje_error_contrasenia").html(" Hay campos vacios o no son correctos.");
			}
		});

    function cargarDatos() {
      axios.get('Controlador/Usuario/cargar_usuario.php')
      .then(response => {

        //console.log(response.data[0].nombre);
        $("#lbl_nombre").html(response.data[0].nombre);
				$("#txt_nombre").val(response.data[0].nombre);
        $("#lbl_apellido").html(response.data[0].apellido);
				$("#txt_apellido").val(response.data[0].apellido);
        $("#lbl_sexo").html(response.data[0].sexo);
				$("#select_sexo").val(response.data[0].sexo);
        $("#lbl_fecha_nac").html(response.data[0].fecha_nac);
				$("#txt_fecha_nac").val(response.data[0].fecha_nac);
        $("#lbl_correo").html(response.data[0].correo);
				$("#txt_correo").val(response.data[0].correo);

      }).catch(e => {
        alert('Han ocurrido algunos problemas, intente nuevamente más tarde.');
        console.log('Ha ocurrido el siguiete error: '+e);
      });;
    }

		function formatFecha(fecha){
		 return fecha.getFullYear()+"-"+(fecha.getMonth()+1)+"-"+fecha.getDate();
	 	}

		// Validar si los inputs se encuentran vacios
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
