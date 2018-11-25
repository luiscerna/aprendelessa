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
    <meta charset="utf-8">
    <title>AprendeLessa</title>
    <meta name="description" content="">
    <meta name="author" content="">

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
    <link rel="shortcut icon" href="favicon.png" type="vista/template_principal/image/x-icon">
    <link rel="icon" href="favicon.png" type="vista/template_principal/image/x-icon">

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
                <a class="site-logo"> <img src="vista/template_principal/images/logo.svg" alt="Homepage"></a>
            </div>

            <nav class="header-nav-wrap">
                <ul class="header-nav">
                    <li class="current"><a class="smoothscroll"  href="#home" title="home">Principal</a></li>
                    <li><a class="smoothscroll"  href="#about" title="Acerca">Acerca</a></li>
                    <li><a class="smoothscroll"  href="#services" title="servicios">Servicios</a></li>
                    <li><a class="smoothscroll"  href="#works" title="videos">Videos</a></li>
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

                <div class="home-content__button">
                    <a href="#about" class="smoothscroll btn btn-animatedbg">
                        Más acerca de nosotros
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
                <a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i><span>Twitter</span></a>
            </li>
            <li>
                <a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
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
                Our services are tailored to make your business grow and stand out.
                </h1>
                <p class="lead lead-light">
                Quia iusto totam facilis ut atque quidem quis maiores iure. Facilis mollitia enim illo sed et totam commodi. Velit a recusandae sequi consequatur est dolorum. Eaque accusantium praesentium ut omnis. Laboriosam reprehenderit commodi assumenda.
                </p>
            </div>
        </div>

        <div class="row services-list block-1-3 block-m-1-2 block-tab-full">

            <div class="col-block item-service" data-aos="fade-up">
                <h4>Brand Identity</h4>
                <p>
                Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et
                a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus
                asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                </p>
            </div>

            <div class="col-block item-service" data-aos="fade-up">
                <h4>Illustration</h4>
                <p>
                Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et
                a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus
                asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                </p>
            </div>

            <div class="col-block item-service" data-aos="fade-up">
                <h4>Web Design</h4>
                <p>
                Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et
                a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus
                asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                </p>
            </div>

            <div class="col-block item-service" data-aos="fade-up">
                <h4>Product Strategy</h4>
                <p>
                Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et
                a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus
                asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                </p>
            </div>

            <div class="col-block item-service" data-aos="fade-up">
                <h4>UI/UX Design</h4>
                <p>
                Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et
                a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus
                asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                </p>
            </div>

            <div class="col-block item-service" data-aos="fade-up">
                <h4>Mobile Design</h4>
                <p>
                Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et
                a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus
                asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                </p>
            </div>

        </div> <!-- end services-list -->

    </section> <!-- end s-services -->


    <!-- works
    ================================================== -->
    <section id="works" class="s-works target-section">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 data-num="03" class="subhead">Recent Works</h3>
                <h1 class="display-1">
                Here are some of our favorite projects we have
                done lately. Feel free to check them out.
                </h1>
            </div>
        </div>

        <div class="portfolio block-1-4 block-m-1-3 block-tab-1-2 collapse">

            <div class="col-block item-folio" data-aos="fade-up">

                <div class="item-folio__thumb">
                    <a href="vista/template_principal/images/portfolio/gallery/g-lamp.jpg" class="thumb-link" title="Lamp" data-size="1050x700">
                        <img src="vista/template_principal/images/portfolio/lamp.jpg"
                             srcset="vista/template_principal/images/portfolio/lamp.jpg 1x, vista/template_principal/images/portfolio/lamp@2x.jpg 2x" alt="">
                    </a>
                </div>

                <div class="item-folio__text">
                    <h3 class="item-folio__title">
                        Lamp
                    </h3>
                    <p class="item-folio__cat">
                        Web Design
                    </p>
                </div>

                <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                    Project Link
                </a>

                <div class="item-folio__caption">
                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                </div>

            </div> <!-- end item-folio -->

            <div class="col-block item-folio" data-aos="fade-up">

                <div class="item-folio__thumb">
                    <a href="vista/template_principal/images/portfolio/gallery/g-fuji.jpg" class="thumb-link" title="Fuji" data-size="1050x700">
                        <img src="vista/template_principal/images/portfolio/fuji.jpg"
                             srcset="vista/template_principal/images/portfolio/fuji.jpg 1x, vista/template_principal/images/portfolio/fuji@2x.jpg 2x" alt="">
                    </a>
                </div>

                <div class="item-folio__text">
                    <h3 class="item-folio__title">
                        Fuji
                    </h3>
                    <p class="item-folio__cat">
                        Branding
                    </p>
                </div>

                <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                    Project Link
                </a>

                <div class="item-folio__caption">
                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                </div>

            </div> <!-- end item-folio -->

            <div class="col-block item-folio" data-aos="fade-up">

                <div class="item-folio__thumb">
                    <a href="vista/template_principal/images/portfolio/gallery/g-woodcraft.jpg" class="thumb-link" title="Woodcraft" data-size="1050x700">
                        <img src="vista/template_principal/images/portfolio/woodcraft.jpg"
                             srcset="vista/template_principal/images/portfolio/woodcraft.jpg 1x, vista/template_principal/images/portfolio/woodcraft@2x.jpg 2x" alt="">
                    </a>
                </div>

                <div class="item-folio__text">
                    <h3 class="item-folio__title">
                        Woodcraft
                    </h3>
                    <p class="item-folio__cat">
                        Web Design
                    </p>
                </div>

                <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                    Project Link
                </a>

                <div class="item-folio__caption">
                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                </div>

            </div> <!-- end item-folio -->

            <div class="col-block item-folio" data-aos="fade-up">

                <div class="item-folio__thumb">
                    <a href="vista/template_principal/images/portfolio/gallery/g-droplet.jpg" class="thumb-link" title="Droplet" data-size="1050x700">
                        <img src="vista/template_principal/images/portfolio/droplet.jpg"
                             srcset="vista/template_principal/images/portfolio/droplet.jpg 1x, vista/template_principal/images/portfolio/droplet@2x.jpg 2x" alt="">
                    </a>
                </div>

                <div class="item-folio__text">
                    <h3 class="item-folio__title">
                        Droplet
                    </h3>
                    <p class="item-folio__cat">
                        Web Development
                    </p>
                </div>

                <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                    Project Link
                </a>

                <div class="item-folio__caption">
                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                </div>

            </div> <!-- end item-folio -->

            <div class="col-block item-folio" data-aos="fade-up">

                <div class="item-folio__thumb">
                    <a href="vista/template_principal/images/portfolio/gallery/g-shutterbug.jpg" class="thumb-link" title="Shutterbug" data-size="1050x700">
                        <img src="vista/template_principal/images/portfolio/shutterbug.jpg"
                             srcset="vista/template_principal/images/portfolio/shutterbug.jpg 1x, vista/template_principal/images/portfolio/shutterbug@2x.jpg 2x" alt="">
                    </a>
                </div>

                <div class="item-folio__text">
                    <h3 class="item-folio__title">
                        Shutterbug
                    </h3>
                    <p class="item-folio__cat">
                        Web Design
                    </p>
                </div>

                <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                    Project Link
                </a>

                <div class="item-folio__caption">
                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                </div>

            </div> <!-- end item-folio -->

            <div class="col-block item-folio" data-aos="fade-up">

                <div class="item-folio__thumb">
                    <a href="vista/template_principal/images/portfolio/gallery/g-minimalismo.jpg" class="thumb-link" title="Minimalismo" data-size="1050x700">
                        <img src="vista/template_principal/images/portfolio/minimalismo.jpg"
                             srcset="vista/template_principal/images/portfolio/minimalismo.jpg 1x, vista/template_principal/images/portfolio/minimalismo@2x.jpg 2x" alt="">
                    </a>
                </div>

                <div class="item-folio__text">
                    <h3 class="item-folio__title">
                        Minimalismo
                    </h3>
                    <p class="item-folio__cat">
                        UX Design
                    </p>
                </div>

                <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                    Project Link
                </a>

                <div class="item-folio__caption">
                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                </div>

            </div> <!-- end item-folio -->

            <div class="col-block item-folio" data-aos="fade-up">

                <div class="item-folio__thumb">
                    <a href="vista/template_principal/images/portfolio/gallery/g-film.jpg" class="thumb-link" title="Film" data-size="1050x700">
                        <img src="vista/template_principal/images/portfolio/film.jpg"
                             srcset="vista/template_principal/images/portfolio/film.jpg 1x, vista/template_principal/images/portfolio/film@2x.jpg 2x" alt="">
                    </a>
                </div>

                <div class="item-folio__text">
                    <h3 class="item-folio__title">
                        Film
                    </h3>
                    <p class="item-folio__cat">
                        Branding
                    </p>
                </div>

                <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                    Project Link
                </a>

                <div class="item-folio__caption">
                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                </div>

            </div> <!-- end item-folio -->

            <div class="col-block item-folio" data-aos="fade-up">

                <div class="item-folio__thumb">
                    <a href="vista/template_principal/images/portfolio/gallery/g-skaterboy.jpg" class="thumb-link" title="Skaterboy" data-size="1050x700">
                        <img src="vista/template_principal/images/portfolio/skaterboy.jpg"
                             srcset="vista/template_principal/images/portfolio/skaterboy.jpg 1x, vista/template_principal/images/portfolio/skaterboy@2x.jpg 2x" alt="">
                    </a>
                </div>

                <div class="item-folio__text">
                    <h3 class="item-folio__title">
                        Skaterboy
                    </h3>
                    <p class="item-folio__cat">
                        Web Design
                    </p>
                </div>

                <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                    Project Link
                </a>

                <div class="item-folio__caption">
                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                </div>

            </div> <!-- end item-folio -->

        </div> <!-- end portfolio -->


        <div class="testimonials-wrap" data-aos="fade-up">

            <div class="row">
                <div class="col-full testimonials-header">
                    <h2 class="h1">What Clients Are Saying...</h2>
                </div>
            </div>

            <div class="row testimonials">

                <div class="col-full testimonials__slider">

                    <div class="testimonials__slide">
                        <span class="testimonials__icon"></span>
                        <p>Qui ipsam temporibus quisquam velMaiores eos cumque distinctio nam accusantium ipsum.
                        Laudantium quia consequatur molestias delectus culpa facere hic dolores aperiam. Accusantium praesentium corpori.</p>
                        <div class="testimonials__author">
                            <img src="vista/template_principal/images/avatars/user-01.jpg" alt="Author image" class="testimonials__avatar">
                            <span class="testimonials__name">Tim Cook</span>
                            <span class="testimonials__position">CEO, Apple</span>
                        </div>
                    </div> <!-- end testimonials__slide -->

                    <div class="testimonials__slide">
                        <span class="testimonials__icon"></span>
                        <p>Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
                        Nisi eaque consequatur. Quasi voluptas eius distinctio. Atque eos maxime. Qui ipsam temporibus quisquam vel.</p>
                        <div class="testimonials__author">
                            <img src="vista/template_principal/images/avatars/user-05.jpg" alt="Author image" class="testimonials__avatar">
                            <span class="testimonials__name">Sundar Pichai</span>
                            <span class="testimonials__position">CEO, Google</span>
                        </div>
                    </div> <!-- end testimonials__slide -->

                    <div class="testimonials__slide">
                        <span class="testimonials__icon"></span>
                        <p>Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia nesciunt. Ducimus aut sed ipsam.
                        Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius distinctio.</p>
                        <div class="testimonials__author">
                            <img src="vista/template_principal/images/avatars/user-02.jpg" alt="Author image" class="testimonials__avatar">
                            <span class="testimonials__name">Satya Nadella</span>
                            <span class="testimonials__position">CEO, Microsoft</span>
                        </div>
                    </div> <!-- end testimonials__slide -->

                </div> <!-- end testimonials__slider -->

            </div> <!-- end testimonials -->

        </div> <!-- end testimonials-wrap -->

    </section> <!-- end s-works -->





    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact target-section">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 data-num="05" class="subhead">Get In Touch</h3>
                <h1 class="display-1 display-1--light">Have an idea or an epic project in mind? Talk to
                    us. Let’s work together and make something
                    great. Drop us a line at <a href="mailto:#0">hello@stellar.com</a></h1>
            </div>
        </div>

        <div class="row contact-infos">

            <div class="col-five md-seven tab-full contact-address" data-aos="fade-up">
                <h4>Where to Find Us</h4>

                <p>
                1600 Amphitheatre Parkway <br>
                Mountain View, California <br>
                94043  US
                </p>
            </div>

            <div class="col-three md-five tab-full contact-social" data-aos="fade-up">
                <h4>Follow Us</h4>

                <ul class="contact-list">
                    <li><a href="#0">Facebook</a></li>
                    <li><a href="#0">Twitter</a></li>
                    <li><a href="#0">Instagram</a></li>
                </ul>
            </div>

            <div class="col-four md-six tab-full contact-number" data-aos="fade-up">
                <h4>Contact Us</h4>

                <ul class="contact-list">
                    <li><a href="mailto:#0">info@stellar.com</a></li>
                    <li><a href="tel:197-543-2345">+197 543 2345</a></li>
                    <li><a href="tel:197-123-9876">+197 123 9876</a></li>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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

</body>
