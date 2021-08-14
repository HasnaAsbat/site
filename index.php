<?php
if(isset($_POST['btn'])){
require_once 'mail.php';
    $mail->setFrom('hasnaasbat@gmail.com', ' hasna');
    $mail->addAddress('emailpc062@gmail.com');               //Name is optional
    $mail->Subject = $_POST['name'];
    $mail->Body    = $_POST['name']."<br>".$_POST['email'] ."<br>".$_POST['message'];
 $mail->send();
 header('location: index.php');
}

?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Craft - Startup Landing Page Template.</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />
    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.3.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->
    <!-- Start Header Area -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.php">
                                <img src="assets/images/logo/logo.jpeg" alt="Logo">
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="index.php" aria-label="Toggle navigation">domicile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#about" aria-label="Toggle navigation">à propos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#serv" aria-label="Toggle navigation">services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#cont" aria-label="Toggle navigation">Contacter</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            <div class="button">
                                <a href="signup.html" class="btn">Commencer</a>
                            </div>
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->
    <!-- Start Hero Area -->
    <section class="hero-area opacity-vid">
        <video autoplay muted loop src="assets/video/vid1.mp4" poster="assets/images/hero/hero-image.png" width="100%"
            height="100%"></video>
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-lg-5 col-md-12 col-12 lvid">
                    <div class="hero-content col-lg-7 col-md-12 col-12">
                        <h4 class="wow fadeInUp" data-wow-delay=".2s">LE 1ER</h4>
                        <h1 class="wow fadeInUp" data-wow-delay=".4s">INCUBATEUR ET ACCÉLÉRATEUR</h1>
                        <p class="wow fadeInUp" data-wow-delay=".6s"> DANS LES PROVINCES DU SUD </p>
                        <div class="button wow fadeInUp" data-wow-delay=".8s">
                            <a href="about-us.html" class="btn ">découvrir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="hero-image">
                        <img class="main-image" src="assets/images/hero/hero-image.png" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->
    <!-- Start Services Area -->
    <div id="serv" class="services section">
        <div class="containerr">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Ce que nous offrons</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Nos services</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Générez les status de votre future société dans les
                            meilleurs délais avec notre équipe.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-service">
                        <div class="main-icon">
                            <img src="assets/images/setting2.jpg" alt="">
                        </div>
                        <h4 class="text-title">ACCOMPAGNER<br> LE DÉVELOPPEMENT LOCAL</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-service">
                        <div class="main-icon">
                            <img src="assets/images/sarokh.jpg" alt="">
                        </div>
                        <h4 class="text-title">ÉCOSYSTÉMES<br> D'ENTREPRENARIAT</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-service">
                        <div class="main-icon">
                            <img src="assets/images/ytfi.jpg" alt="">
                        </div>
                        <h4 class="text-title">DIFFÉRENTS ACTEURS <br>DES SECTEURS <br>PRIVÉS ET PUBLIC</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-service">
                        <div class="main-icon">
                            <img src="assets/images/yas9i.jpg" alt="">
                        </div>
                        <h4 class="text-title">ACCROITRE LES <br>CHANCES DE <br>RÉUSSITE</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->
    <!-- Start About Area -->
    <section id="about" class="about section">
        <div class="container">
            <div class="row align-items-center vidvi vidvidd">
                <div class=" align-items-center col-lg-6 col-md-12 col-12 ">
                    <div class="image wow fadeInLeft vidvid" data-wow-delay=".2s">
                        <video controls preload="metadata" poster="assets/images/network.jpg" src="assets/video/5.mp4"
                            width="100%">
                        </video>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="image wow fadeInLeft" data-wow-delay=".2s">
                        <img src="assets/images/2.jpg" alt="#">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="content wow fadeInRight" data-wow-delay=".4s">
                        <h2>innovcubator incubateur de services de gestion d'entreprise</h2>
                        <p> Une entreprise spécialisée dans le domaine de la gestion d'entreprise et du marketing, qui
                            combine une expérience pratique et académique pour appliquer les normes internationales dans
                            un ensemble intégré de services qui soutiennent la spécialisation de l'institution ou de
                            l'activité commerciale.</p>
                        <div class="list">
                            <div class="single-list">
                                <div class="list-icon">
                                    <i class="lni lni-checkmark"></i>
                                </div>
                                <h4>BOOST DES START-UP</h4>
                                <p></p>
                            </div>
                            <div class="single-list">
                                <div class="list-icon">
                                    <i class="lni lni-checkmark"></i>
                                </div>
                                <h4>PORTEURS DE PROJETS</h4>
                                <p></p>
                            </div>
                            <div class="single-list">
                                <div class="list-icon">
                                    <i class="lni lni-checkmark"></i>
                                </div>
                                <h4>OUTIL</h4>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="about section section-a">
        <div class="container">
            <div class="row align-items-center vidvi">
                <div class="col-lg-6 col-12">
                    <div class="content wow fadeInRight fir" data-wow-delay=".4s">
                        <p>A la ville de Laâyoune il a créé la première une innovcubator qui traites et des projets et
                            des offres et egalements un accompagnement et des formations pour la concretisations de
                            leurs ideés de l'entreprenariat</p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="image wow fadeInLeft vidvid" data-wow-delay=".2s">
                        <video controls preload="metadata" poster="" src="assets/video/2.mp4" width="100%">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->
    <!-- Start Call Action Area -->
    <section class="call-action">
        <div class="container">
            <div class="inner-content">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-11 col-12 disp">
                        <div class="text">
                            <h2> <span>Qu'est-ce Qu’un Incubateur D'entreprises ?</span>
                            </h2>
                            <p style="display: block;margin-top: 10px;">Un incubateur d'entreprises est un lieu
                                d'accompagnement pour les créateurs de sociétés. Il est financé par une collectivité
                                publique, mais fait aussi appel à des fonds privés. Certains incubateurs sont intégrés à
                                des grandes écoles ou des universités. Les entreprises accueillies dans des incubateurs
                                sont très jeunes, voire en cours de création. Il s'agit souvent d'entreprises innovantes
                                du secteur des nouvelles technologies, qu'on appelle «jeunes pousses» ou « start-up ».
                                Le but d'un incubateur est d'aider les entreprises à grandir. En plus d'offrir une
                                structure, les incubateurs aident les entrepreneurs à réfléchir à leur projet, à
                                élaborer leur modèle économique. Aussi, l'incubateur propose souvent des formations, une
                                assistance juridique et une mise en relation avec des financeurs. Enfin, un incubateur
                                permet d'échanger avec d'autres entrepreneurs qui pourront éventuellement devenir leurs
                                associés. Une fois passée cette phase d'incubation, les entrepreneurs sont ensuite
                                accucillis dans une « pépinière ».
                                <!-- -------------- aspire à faire une extension dans les autres trois régions du sud du 
                                Maroc.-->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact -->
    <section id="cont" class="contact-section contact-style-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-7 col-12">
                    <div class="section-title text-center mb-50">
                        <h3 class="mb-15">Contacter-Nous</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="">
                    <div class="contact-form-wrapper">
                        <form action="" method="POST">
                            <div class="row cont-h">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-input">
                                        <input type="text" id="name" name="name" class="form-input"
                                            placeholder="Nom Complet ">
                                        <i class="lni lni-user"></i>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-input">
                                        <input type="email" id="email" name="email" class="form-input"
                                            placeholder="E-mail">
                                        <i class="lni lni-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-12">
                                    <div class="single-input">
                                        <textarea name="message" id="message" class="form-input"
                                            placeholder=" Un Message" rows="6"></textarea>
                                        <i class="lni lni-comments-alt"></i>
                                    </div>
                                </div>
                                <div class=" col-lg-8 col-md-12">
                                    <div class="form-button">
                                        <button type="submit" name="btn" class="buttonn"> Envoyer</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call Action Area -->
    <!-- Start Footer Area -->
    <footer class="footer section">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-about">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="assets/images/logo/logo white.jpg" alt="#">
                                    </a>
                                </div>
                                <p>Pour plus d’informations Contactez nous via Facebook,whatsapp,ou sur notre site web
                                    pour plus d’informations.</p>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer s-footer f-link">
                                <h3>Services</h3>
                                <ul>
                                    <li><a href="javascript:void(0)"> Accompagner Le Développement Local</a></li>
                                    <li><a href="javascript:void(0)">Écosystémes D'entreprenariat </a></li>
                                    <li><a href="javascript:void(0)">Différents Acteurs Des Secteurs Privés Et
                                            Public</a></li>
                                    <li><a href="javascript:void(0)">Accroitre Les Chances De Réussite</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer s-footer newsletter">
                                <h3>Contacter</h3>
                                <ul class="social">
                                    <li><a href="https://www.facebook.com/Innovcubator/"><i
                                                class="lni lni-facebook-filled"></i> Innovcubator</a></li>
                                    <li><a href="https://ma.linkedin.com/company/innovcubator"><i
                                                class="lni lni-linkedin-original"></i> INNovCubator</a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-phone"></i> 0528984316</a></li>
                                    <li><a href="contact@Innocubator.ma"><i class="lni lni-google"></i>
                                            contact@Innocubator.ma</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
        <!-- Start Copyright Area -->
        <!-- End Copyright Area -->
    </footer>
    <!--/ End Footer Area -->
    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>
    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
    //========= testimonial 
    tns({
        container: '.testimonial-slider',
        items: 3,
        slideBy: 'page',
        autoplay: false,
        mouseDrag: true,
        gutter: 0,
        nav: true,
        controls: false,
        responsive: {
            0: {
                items: 1,
            },
            540: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 2,
            },
            1170: {
                items: 3,
            }
        }
    });
    //====== counter up 
    var cu = new counterUp({
        start: 0,
        duration: 2000,
        intvalues: true,
        interval: 100,
        append: " ",
    });
    cu.start();
    //========= glightbox
    GLightbox({
        'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
        'type': 'video',
        'source': 'youtube', //vimeo, youtube or local
        'width': 900,
        'autoplayVideos': true,
    });
    //============== isotope masonry js with imagesloaded
    imagesLoaded('#container', function() {
        var elem = document.querySelector('.grid');
        var iso = new Isotope(elem, {
            // options
            itemSelector: '.grid-item',
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: '.grid-item'
            }
        });
        let filterButtons = document.querySelectorAll('.portfolio-btn-wrapper button');
        filterButtons.forEach(e => e.addEventListener('click', () => {
            let filterValue = event.target.getAttribute('data-filter');
            iso.arrange({
                filter: filterValue
            });
        }));
    });
    </script>
</body>

</html>