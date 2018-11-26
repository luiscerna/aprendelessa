<div id="sidebar-nav" class="sidebar">
  <div class="sidebar-scroll">
    <nav>
      <ul class="nav">
        <li><a href="video.php?video=0"><i class="lnr lnr-home<?php echo ($seleccionar_navbar == "Introducción") ? "active": ""; ?>"></i> <span>Introducción</span></a></li>
        <li>
          <a href="#leccion1" data-toggle="collapse" class="collapse<?php echo ($seleccionar_navbar == "Alfabeto" || $seleccionar_navbar == "Los Numeros" || $seleccionar_navbar == "Números Ordinales y símbolos") ? " active": ""; ?>"><i class="lnr lnr-file-empty"></i> <span>Lección 1</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
          <div id="leccion1" class="collapse<?php echo ($seleccionar_navbar == "Alfabeto" || $seleccionar_navbar == "Los Numeros" || $seleccionar_navbar == "Números Ordinales y símbolos") ? " in": ""; ?>">
            <ul class="nav">
              <li><a href="video.php?video=1" class="<?php echo ($seleccionar_navbar == "Alfabeto") ? "active": ""; ?>">Alfabeto</a></li>
              <li><a href="video.php?video=4" class="<?php echo ($seleccionar_navbar == "Los Numeros") ? "active": ""; ?>">Los números</a></li>
              <li><a href="video.php?video=12" class="<?php echo ($seleccionar_navbar == "Números Ordinales y símbolos") ? "active": ""; ?>">Números ordinales y símbolos</a></li>
            </ul>
          </div>
        </li>
        <li>
          <a href="#leccion2" data-toggle="collapse" class="collapsed<?php echo ($seleccionar_navbar == "Normas de Cortesía Parte 1" || $seleccionar_navbar == "Normas de Cortesía Parte 2") ? " active": ""; ?>"><i class="lnr lnr-file-empty"></i> <span>Lección 2</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
          <div id="leccion2" class="collapse<?php echo ($seleccionar_navbar == "Normas de Cortesía Parte 1" || $seleccionar_navbar == "Normas de Cortesía Parte 2") ? " in": ""; ?>">
            <ul class="nav">
              <li><a href="video.php?video=11" class="<?php echo ($seleccionar_navbar == "Normas de Cortesía Parte 1") ? "active": ""; ?>">Normas de cortesía - Parte 1</a></li>
              <li><a href="video.php?video=8" class="<?php echo ($seleccionar_navbar == "Normas de Cortesía Parte 2") ? "active": ""; ?>">Normas de cortesía - Parte 2</a></li>
            </ul>
          </div>
        </li>
        <li>
          <a href="#leccion3" data-toggle="collapse" class="collapsed<?php echo ($seleccionar_navbar == "Los Colores" || $seleccionar_navbar == "Palabras de uso común") ? " active": ""; ?>"><i class="lnr lnr-file-empty"></i> <span>Lección 3</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
          <div id="leccion3" class="collapse<?php echo ($seleccionar_navbar == "Los Colores" || $seleccionar_navbar == "Palabras de uso común") ? " in": ""; ?>">
            <ul class="nav">
              <li><a href="video.php?video=2" class="<?php echo ($seleccionar_navbar == "Los Colores") ? "active": ""; ?>">Los colores</a></li>
              <li><a href="video.php?video=10" class="<?php echo ($seleccionar_navbar == "Palabras de uso común") ? "active": ""; ?>">Palabras de uso común</a></li>
            </ul>
          </div>
        </li>
        <li>
          <a href="#leccion4" data-toggle="collapse" class="collapsed<?php echo ($seleccionar_navbar == "Naturaleza" || $seleccionar_navbar == "Adjetivos") ? " active": ""; ?>"><i class="lnr lnr-file-empty"></i> <span>Lección 4</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
          <div id="leccion4" class="collapse<?php echo ($seleccionar_navbar == "Naturaleza" || $seleccionar_navbar == "Adjetivos") ? " in": ""; ?>">
            <ul class="nav">
              <li><a href="video.php?video=5" class="<?php echo ($seleccionar_navbar == "Naturaleza") ? "active": ""; ?>">La naturaleza</a></li>
              <li><a href="video.php?video=13" class="<?php echo ($seleccionar_navbar == "Adjetivos") ? "active": ""; ?>">Los adjetivos</a></li>
            </ul>
          </div>
        </li>
        <li>
          <a href="#leccion5" data-toggle="collapse" class="collapsed<?php echo ($seleccionar_navbar == "Prendas de vestir" || $seleccionar_navbar == "Relaciones Personales" || $seleccionar_navbar == "Partes del Cuerpo") ? " active": ""; ?>"><i class="lnr lnr-file-empty"></i> <span>Lección 5</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
          <div id="leccion5" class="collapse<?php echo ($seleccionar_navbar == "Prendas de vestir" || $seleccionar_navbar == "Relaciones Personales" || $seleccionar_navbar == "Partes del Cuerpo") ? " in": ""; ?>">
            <ul class="nav">
              <li><a href="video.php?video=7" class="<?php echo ($seleccionar_navbar == "Prendas de vestir") ? "active": ""; ?>">Prendas de vestir</a></li>
              <li><a href="video.php?video=6" class="<?php echo ($seleccionar_navbar == "Relaciones Personales") ? "active": ""; ?>">Relaciones personales</a></li>
              <li><a href="video.php?video=3" class="<?php echo ($seleccionar_navbar == "Partes del Cuerpo") ? "active": ""; ?>">Partes del cuerpo</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>
  </div>
</div>
