<nav class="navbar navbar-default navbar-fixed-top">
  <div class="brand">
    <a href="principal.php"><img src="vista/template_contenido/assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
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
            <span id="nombre-desplegable"><?php echo $_SESSION["nombre"]; ?></span> <span id="apellido-desplegable"><?php echo $_SESSION["apellido"]; ?></span>
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
