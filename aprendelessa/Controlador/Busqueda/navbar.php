<nav class="navbar navbar-default navbar-fixed-top">
  <div class="brand">
    <a href="../../principal.php"><img src="../../vista/template_contenido/assets/img/logolessa1.png" alt="Klorofil Logo" class="img-responsive logo"></a>
  </div>
  <div class="container-fluid">
    <div class="navbar-btn">
      
    </div>
    <form class="navbar-form navbar-left" id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
      <div class="input-group">
        <input id="buscar" name="buscar" type="search" class="form-control" placeholder="Buscar palabra en LESSA">
        <span class="input-group-btn"><input type="submit" name="buscador" class="btn btn-primary" value="buscar"></span>
      </div>
    </form>
    <div id="navbar-menu">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>
            <span id="nombre-desplegable"><?php echo $_SESSION["nombre"]; ?></span> <span id="apellido-desplegable"><?php echo $_SESSION["apellido"]; ?></span>
          </span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="../../perfil.php"><i class="lnr lnr-user"></i> <span>Mi perfil</span></a></li>
            <li><a href="../../index.php?cerrar=true"><i class="lnr lnr-exit"></i> <span>Salir</span></a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
