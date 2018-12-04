<?php
  session_start();

  if(array_key_exists("cerrar", $_GET)){
    session_unset();
  }

  if(array_key_exists("codUsuario", $_SESSION)){
    header("Location: principal.php");
  }

?>

<!DOCTYPE html>
<html class="no-js" lang="es">
<head>

    <!--- basic page needs
    ================================================== -->

    <!--Meta informacion-->
    <meta charset="utf-8">
    <title>AprendeLessa</title>
    <meta name="copyright" content="Aprendelessa.com">
    <meta name="topic" content="Curso de Lenguaje de Señas Salvadoreñas">
    <meta name="country" content="El Salvador">
    <meta name="robots" content="index,follow">
    <meta name="revised" content="Lunes, 03 de diciembre, 2018, 22:50">
    <meta name="language" content="ES">
    <meta name="description" content="Sitio dedicado a la educación de lenguaje de señas   salvadoreñas online y gratis.">
    <meta name="author" content="Equipo Aprendelessa.com, Estudiantes de Ingeniería de Sistemas Informáticos, Universidad de El Salvador, UES">
    <meta name="keywords" content="aprendelessa, aprendelessa.com, aprende, lessa, lenguaje de señas salvadoreñas, El Salvador, LESSA, APRENDELESSA, Lenguaje de Señas">;

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="vista/template_principal/css/base.css">
    <link rel="stylesheet" href="vista/template_principal/css/vendor.css">
    <link rel="stylesheet" href="vista/template_principal/css/main.css">

    <!-- script
    ================================================== -->
    <script src="vista/template_principal/js/modernizr.js"></script>
    <script src="vista/template_principal/js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link rel="icon" href="logo.png" type="image/x-icon">


    <!--OpenGraph-->
    <meta property="og:title" content="aprendelessa">
    <meta property="og:site_name" content="aprendelessa">
    <meta property="og:url" content="http://aprendelessa.com/">
    <meta property="og:description" content="Sitio dedicado a la educacion de lenguaje de señas salvadoreñas">
    <meta property="og:type" content="website">
    <meta property="og:image" content="http://aprendelessa.com/vista/template_principal/images/logo1.png">

    <!--Twitter card-->
    <meta name="twitter:card" content="sumary">
    <meta name="twitter:site" content="@aprendelessa">
    <meta name="twitter:creator" content="@paoaguilar09 ">
    <meta name="twitter:url" content="http://www.aprendelessa.com/">
    <meta name="twitter:title" content="AprendeLESSA">
    <meta name="twitter:description" content="Sitio dedicado a la educacion de lenguaje de señas salvadoreñas">
    <meta name="twitter:image" content="http://aprendelessa.com/vista/template_principal/images/logo1.png">

</head>


<body id="top">

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-jump">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="row">

            <div class="header-logo">
                <a class="site-logo"> <img src="vista/template_principal/images/logo1.png" alt="aprendelessa"></a>
            </div>

            <nav class="header-nav-wrap">
                <ul class="header-nav">
                    <li class="current"><a class="smoothscroll"  href="#home" title="home">Principal</a></li>
                    <li><a class="smoothscroll"  href="#about" title="Acerca">Acerca</a></li>
                    <li><a class="smoothscroll"  href="#services" title="servicios">Servicios</a></li>
                    <li><a class="smoothscroll"  href="#contact" title="contactanos">Contactanos</a></li>
                    <li><a href="registrar.php" title="registrar">Registrate</a></li>
                    <li><a href="login.php"  title="iniciar">Iniciar Sesion</a></li>
                </ul>
            </nav> <!-- end header-nav-wrap -->

            <a class="header-menu-toggle" href="#0">
                <span class="header-menu-icon"></span>
            </a>

        </div> <!-- end row -->

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home page-hero target-section" data-parallax="scroll" data-image-src="vista/template_principal/images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h1>
                Creemos en una novedosa<br>
                forma de aprendizaje de<br>
                LESSA.
                </h1>

                <div>
                    <a href="login.php" class="btn btn"> <!--clas="smoothscroll btn btn-animatedbg"-->
                        Iniciar Curso
                    </a>
                </div>

                <div class="home-content__video">
                    <a class="video-link" href="https://www.youtube.com/watch?v=mhi6g_0Nfn8" data-lity>
                        <span class="video-icon"></span>
                        <span class="video-text">Play Video</span>
                    </a>
                </div>

            </div> <!-- end home-content__main -->

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    Scroll
                </a>
            </div>

        </div> <!-- end home-content -->

        <ul class="home-social">
            <li>
                <a href="https://www.facebook.com/Aprende-LESSA-407376560027922/?modal=admin_todo_tour"><i class="fab fa-facebook-f" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="https://twitter.com/AprendeLessa"><i class="fab fa-twitter" aria-hidden="true"></i><span>Twitter</span></a>
            </li>
            <li>
                <a href="https://www.instagram.com/aprende.lessa/"><i class="fab fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
        </ul> <!-- end home-social -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id="about" class="s-about target-section">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 data-num="01" class="subhead">Quienes Somos</h3>
                <h1 class="display-1">
                AprendeLessa es el sitio ideal para poder iniciar tus estudios de Lengua de Señas Salvadoreña  y poder construir una mejor sociedad.
                </h1>
                <p class="lead">
               	Construir una mejor sociedad en la cual se pueda facilitar la comunicación con las personas sordas, facilitando la integración de ellas a la sociedad.
                </p>
            </div>
        </div>

        <div class="row about-process block-1-2 block-tab-full">

            <div class="col-block item-process" data-aos="fade-up">
                <div class="item-process__header item-process__header--planning">
                    <h3>Significado</h3>
                </div>
                <p>
                    La lengua de señas o lengua de signos es una lengua natural de expresión y percepción visual gracias a la cual, los sordos pueden establecer un canal de comunicación con su entorno social, ya sea conformado por otros sordos o por cualquier persona que conozca la lengua de señas empleada.
                </p>
            </div>
            <div class="col-block item-process" data-aos="fade-up">
                <div class="item-process__header item-process__header--branding">
                    <h3>Importancia</h3>
                </div>
                <p>
                    Enseñar, conocer y entenderse con soltura en lengua de señas es fundamental para la inclusión, pues sin ella, las personas con discapacidad auditiva pierden el acceso a la información y a la interacción diaria con amigos o seres queridos.
            </div>
            <div class="col-block item-process" data-aos="fade-up">
                <div class="item-process__header item-process__header--implementation">
                    <h3>Implementación</h3>
                </div>
                <p>
                    Aprender este lenguaje basado en el uso de manos y gestos para describir conceptos y elaborar oraciones, ya ofrece una gran oportunidad para generar un mundo más incluyente y accesible y para crear puentes con más personas.
                </p>
            </div>
            <div class="col-block item-process" data-aos="fade-up">
                <div class="item-process__header item-process__header--documentation">
                    <h3>Dato Curioso</h3>
                </div>
                <p>
                    Se dice que si las personas sordas estuvieran reunidas en un solo lugar, formarían la cuarta nación más grande ¡del mundo! Solo en España, en 2014, el Instituto Nacional de Estadística y Geografía (INEGI) que de el 6% del país, unos siete millones de personas poseen diversidad funcional auditiva.
                </p>
            </div>

        </div>  <!-- end about-process -->

    </section> <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id="services" class="s-services target-section">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 data-num="02" class="subhead">Lo que hacemos</h3>
                <h1 class="display-1 display-1--light">
                Este curso de lenguaje de señas está dirigido a personas con o sin conocimientos previos en lenguaje de señas, que deseen aprender a comunicarse con el lenguaje de señas salvadorañas.
                </h1>
                <p class="lead lead-light">
                Este curso de lessa tiene como objetivo que aprendas: El vocabulario básico e intermedio del lenguaje de señas, Los principios de la comunicación en lenguaje de señas, A comunicarte en las situaciones comunes, etc.
                </p>
            </div>
        </div>

        <div class="row services-list block-1-3 block-m-1-2 block-tab-full">

            <div class="col-block item-service" data-aos="fade-up">
                <h4>"Escuchar" a traves de la Observación</h4>
                <p>
                Esto puede ayudarnos a conocer mejor a nuestro interlocutor, ya que los gestos nos permiten notar, por ejemplo,
                los estados  de ánimo, la sinceridad de lo expresado e incluso los sentimientos que a veces ni siquiera necesitamos transmitir mediante palabras.
                </p>
            </div>

            <div class="col-block item-service" data-aos="fade-up">
                <h4>Alfabeto Manual</h4>
                <p>
                Las personas sordas instruidas (que sepan leer y escribir) de casi todo el mundo usan un grupo de señas para representar las letras del alfabeto con el que se escribe la lengua oral del país. Es esto lo que se denomina alfabeto manual o alfabeto dactilológico.
                </p>
            </div>

            <div class="col-block item-service" data-aos="fade-up">
                <h4>Comunicación con los niños</h4>
                <p>
                A los pequeños les encanta imitar a los demás y a ello se suma que sus habilidades motoras se desarrollan más rápidamente que su capacidad de hablar, por lo que no les resulta nada difícil aprender el lenguaje de señas.
                </p>
            </div>

            <div class="col-block item-service" data-aos="fade-up">
                <h4>Vocabulario y Gramática</h4>
                <p>
                Un vocabulario incluye todo tipo de conceptos; pero éstos permanecen aislados si falta la gramática. Tiene  que  haber  un  sistema  formal  de  normas  que  permita  elaborar expresiones coherentes, es decir, frases, proposiciones, etc.
                </p>
            </div>

            <div class="col-block item-service" data-aos="fade-up">
                <h4>Tabú</h4>
                <p>
                Muchos padres podrían pensar que este tipo de comunicación interfiere con el desarrollo natural del lenguaje hablado, pero tan solo lo complementa, a fin de que el proceso comunicativo sea más claro.
                </p>
            </div>

            <div class="col-block item-service" data-aos="fade-up">
                <h4>Señas Básicas</h4>
                <p>
                Aprender algunas señas básicas es de suma importancia para las personas que estan iniciando en la cultura sorda, puesto que les ayuda a genera mayor confianza al hablar con personas sordas.
                </p>
            </div>

        </div> <!-- end services-list -->

    </section> <!-- end s-services -->


        <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact target-section">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 data-num="04" class="subhead">Sugerencias</h3>
                <h1 class="display-1 display-1--light">Si tienes alguna idea que te gustaría que implementemos dejanoslo saber en nuestro correo, estaremos encantados de mejorar nuestro sitio.
                    Dejanos tu comentario o sugerencia en <a href="mailto:#0">aprendelessa@gmail.com</a></h1>
            </div>
        </div>

        <div class="row contact-infos">

            <div class="col-five md-seven tab-full contact-address" data-aos="fade-up">
                <h4>Donde encontrarnos</h4>

                <p>
                Ciudad Universitara <br>
                Final 25 Av. Norte <br>
                San Salvador
                </p>
            </div>

            <div class="col-three md-five tab-full contact-social" data-aos="fade-up">
                <h4>Siguenos</h4>

                <ul class="contact-list">
                    <li><a href="https://www.facebook.com/Aprende-LESSA-407376560027922/?modal=admin_todo_tour">Facebook</a></li>
                    <li><a href="https://twitter.com/AprendeLessa">Twitter</a></li>
                    <li><a href="https://www.instagram.com/aprende.lessa/">Instagram</a></li>
                </ul>
            </div>

            <div class="col-four md-six tab-full contact-number" data-aos="fade-up">
                <h4>Contactanos</h4>

                <ul class="contact-list">
                    <li><a href="mailto:#0">aprendelessa@gmail.com</a></li>
                </ul>
            </div>

        </div> <!-- end contact-infos -->

        <div class="row contact-bottom">
            <div class="col-five tab-full contact-button" data-aos="fade-up">
                <a href="#about" class="smoothscroll btn btn-animatedbg">
                    Mas acerca de nosotros
                </a>
            </div>
        </div> <!-- end contact-button -->

    </section> <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer>
        <div class="row">
            <div class="col-full cl-copyright">
                <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Aprendelessa <i class="fa fa-heart" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</span>
            </div>
        </div>

        <div class="cl-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"></a>
        </div>
    </footer>


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div><!-- end photoSwipe background -->


    <!-- Java Script
    ================================================== -->
    <script src="vista/template_principal/js/jquery-3.2.1.min.js"></script>
    <script src="vista/template_principal/js/plugins.js"></script>
    <script src="vista/template_principal/js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129777927-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129777927-1');
</script>

<!-- JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "url": "http://www.aprendelessa.com",
      "address":{
        "@type":"PostalAddress",
        "addressLocality":"San Salvador",
        "addressRegion":"El Salvador",
        "postalCode":"1101",
        "streetAddres":"Blvr de los Heroes, 25 avenida norte"
      },
      "sameAs":[
        "https://www.facebook.com/aprendelessa",
        "https://twitter.com/AprendeLessa",
        "https://www.instagram.com/aprende.lessa/"
      ]
    }
    </script>
</body>
