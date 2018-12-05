<div id="sidebar-nav" class="sidebar">
  <style media="screen">
    .visto {
      display: none;
    }
  </style>
  <div class="sidebar-scroll">
    <nav>
      <ul class="nav">
        <li><a href="video.php?video=0"><i class="lnr lnr-home<?php echo ($seleccionar_navbar == "Introducción") ? "active": ""; ?>"></i> <span>Introducción</span>&nbsp;&nbsp;<span class="lnr lnr-chevron-down-circle text-success visto" val="0"></span></a></li>
        <li>
          <a href="#leccion1" data-toggle="collapse" class="collapse<?php echo ($seleccionar_navbar == "Alfabeto" || $seleccionar_navbar == "Los Numeros" || $seleccionar_navbar == "Números Ordinales y símbolos") ? " active": ""; ?>"><i class="lnr lnr-file-empty"></i> <span>Lección 1</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
          <div id="leccion1" class="collapse<?php echo ($seleccionar_navbar == "Alfabeto" || $seleccionar_navbar == "Los Numeros" || $seleccionar_navbar == "Números Ordinales y símbolos") ? " in": ""; ?>">
            <ul class="nav">
              <li><a href="video.php?video=1" class="<?php echo ($seleccionar_navbar == "Alfabeto") ? "active": ""; ?>">Alfabeto&nbsp;&nbsp;<span class="lnr lnr-chevron-down-circle text-success visto" val="1"></span></a></li>
              <li><a href="video.php?video=4" class="<?php echo ($seleccionar_navbar == "Los Numeros") ? "active": ""; ?>">Los números&nbsp;&nbsp;<span class="lnr lnr-chevron-down-circle text-success visto" val="4"></a></li>
              <li><a href="video.php?video=12" class="<?php echo ($seleccionar_navbar == "Números Ordinales y símbolos") ? "active": ""; ?>">Números ordinales y símbolos&nbsp;&nbsp;<span class="lnr lnr-chevron-down-circle text-success visto" val="12"></a></li>
            </ul>
          </div>
        </li>
        <li>
          <a href="#leccion2" data-toggle="collapse" class="collapsed<?php echo ($seleccionar_navbar == "Normas de Cortesía Parte 1" || $seleccionar_navbar == "Normas de Cortesía Parte 2") ? " active": ""; ?>"><i class="lnr lnr-file-empty"></i> <span>Lección 2</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
          <div id="leccion2" class="collapse<?php echo ($seleccionar_navbar == "Normas de Cortesía Parte 1" || $seleccionar_navbar == "Normas de Cortesía Parte 2") ? " in": ""; ?>">
            <ul class="nav">
              <li><a href="video.php?video=11" class="<?php echo ($seleccionar_navbar == "Normas de Cortesía Parte 1") ? "active": ""; ?>">Normas de cortesía - Parte 1&nbsp;&nbsp;<span class="lnr lnr-chevron-down-circle text-success visto" val="11"></a></li>
              <li><a href="video.php?video=8" class="<?php echo ($seleccionar_navbar == "Normas de Cortesía Parte 2") ? "active": ""; ?>">Normas de cortesía - Parte 2&nbsp;&nbsp;<span class="lnr lnr-chevron-down-circle text-success visto" val="8"></a></li>
            </ul>
          </div>
        </li>
        <li>
          <a href="#leccion3" data-toggle="collapse" class="collapsed<?php echo ($seleccionar_navbar == "Los Colores" || $seleccionar_navbar == "Palabras de uso común") ? " active": ""; ?>"><i class="lnr lnr-file-empty"></i> <span>Lección 3</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
          <div id="leccion3" class="collapse<?php echo ($seleccionar_navbar == "Los Colores" || $seleccionar_navbar == "Palabras de uso común") ? " in": ""; ?>">
            <ul class="nav">
              <li><a href="video.php?video=2" class="<?php echo ($seleccionar_navbar == "Los Colores") ? "active": ""; ?>">Los colores&nbsp;&nbsp;<span class="lnr lnr-chevron-down-circle text-success visto" val="2"></a></li>
              <li><a href="video.php?video=10" class="<?php echo ($seleccionar_navbar == "Palabras de uso común") ? "active": ""; ?>">Palabras de uso común&nbsp;&nbsp;<span class="lnr lnr-chevron-down-circle text-success visto" val="10"></a></li>
            </ul>
          </div>
        </li>
        <li>
          <a href="#leccion4" data-toggle="collapse" class="collapsed<?php echo ($seleccionar_navbar == "Naturaleza" || $seleccionar_navbar == "Adjetivos") ? " active": ""; ?>"><i class="lnr lnr-file-empty"></i> <span>Lección 4</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
          <div id="leccion4" class="collapse<?php echo ($seleccionar_navbar == "Naturaleza" || $seleccionar_navbar == "Adjetivos") ? " in": ""; ?>">
            <ul class="nav">
              <li><a href="video.php?video=5" class="<?php echo ($seleccionar_navbar == "Naturaleza") ? "active": ""; ?>">La naturaleza&nbsp;&nbsp;<span class="lnr lnr-chevron-down-circle text-success visto" val="5"></a></li>
              <li><a href="video.php?video=13" class="<?php echo ($seleccionar_navbar == "Adjetivos") ? "active": ""; ?>">Los adjetivos&nbsp;&nbsp;<span class="lnr lnr-chevron-down-circle text-success visto" val="13"></a></li>
            </ul>
          </div>
        </li>
        <li>
          <a href="#leccion5" data-toggle="collapse" class="collapsed<?php echo ($seleccionar_navbar == "Prendas de vestir" || $seleccionar_navbar == "Relaciones Personales" || $seleccionar_navbar == "Partes del Cuerpo") ? " active": ""; ?>"><i class="lnr lnr-file-empty"></i> <span>Lección 5</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
          <div id="leccion5" class="collapse<?php echo ($seleccionar_navbar == "Prendas de vestir" || $seleccionar_navbar == "Relaciones Personales" || $seleccionar_navbar == "Partes del Cuerpo") ? " in": ""; ?>">
            <ul class="nav">
              <li><a href="video.php?video=7" class="<?php echo ($seleccionar_navbar == "Prendas de vestir") ? "active": ""; ?>">Prendas de vestir&nbsp;&nbsp;<span class="lnr lnr-chevron-down-circle text-success visto" val="7"></a></li>
              <li><a href="video.php?video=6" class="<?php echo ($seleccionar_navbar == "Relaciones Personales") ? "active": ""; ?>">Relaciones personales&nbsp;&nbsp;<span class="lnr lnr-chevron-down-circle text-success visto" val="6"></a></li>
              <li><a href="video.php?video=3" class="<?php echo ($seleccionar_navbar == "Partes del Cuerpo") ? "active": ""; ?>">Partes del cuerpo&nbsp;&nbsp;<span class="lnr lnr-chevron-down-circle text-success visto" val="3"></a></li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){

      cargarYaVistos();

    });

    function cargarYaVistos(){
        //console.log($(".visto").toArray().innerHTML);
        //console.log($(".visto:eq("+0+")").attr("val"));
        //$(".visto:eq("+0+")").show();
        /*for(var i=0;i<response.data.length;i++){

        }*/
  			axios.get("Controlador/Reproduccion/cargar_videosyavistos.php")
        .then(response => {
          //console.log(response);
  				if(response.data == null){
  					//console.log("Lo siento bra");
  				} else {
  					//console.log(response.data);
  					for(var i = 0; i < $(".visto").toArray().length; i++){
              for(var g = 0; g < response.data.length; g++){
                if(response.data[g]["Video_codVideo"] == $(".visto:eq("+i+")").attr("val")){
                  $(".visto:eq("+i+")").show();
                }
              }
              //console.log("bd: "+response.data[i]["Video_codVideo"]+" dentro:"+$(".visto:eq("+i+")").attr("val"));
              /*if(response.data[i]["Video_codVideo"] == $(".visto:eq("+i+")").attr("val")){
                //console.log(response.data[i]["Video_codVideo"]);
                $(".visto:eq("+i+")").show();
              }*/
              //$("response.data[i]["Video_codVideo"]
              //$("#video0").class("display","block");
              //console.log(response.data[i]["Video_codVideo"]);
              //$("#video"+response.data[i]["Video_codVideo"]).show();
  					}
  					//
  					//console.log(response);
  				}
  			}).catch(e => {
  				alert('Han ocurrido algunos problemas, intente nuevamente más tarde.');
  				console.log('Ha ocurrido el siguiete error: '+e);
  			});
    }

  </script>
</div>
