<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="author" content="DSAThemes"/>
  <meta name="description" content="VouDeVan - O App para Vans intermunicipais"/>
  <meta name="keywords" content="VouDeVan, Van, App, Transporte, Movit, MeuBusao, Busao, Palmas, Viagem">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!-- SITE TITLE -->
  <title>VouDeVan - O App para Vans intermunicipais</title>
  <!-- FAVICON AND TOUCH ICONS  -->
  <link rel="apple-touch-icon" sizes="180x180" href="./images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon/favicon-16x16.png">
  <link rel="manifest" href="./images/favicon/site.webmanifest">
  <link rel="mask-icon" href="./images/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
  <!-- BOOTSTRAP CSS -->
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <!-- FONT ICONS -->
  <link href="./css/fa-svg-with-js.css" rel="stylesheet">
  <link href="./css/pe-icon-7-stroke.css" rel="stylesheet">
  <!-- PLUGINS STYLESHEET -->
  <link href="./css/magnific-popup.css" rel="stylesheet">
  <link href="./css/slick.css" rel="stylesheet">
  <link href="./css/slick-theme.css" rel="stylesheet">
  <!-- On Scroll Animations -->
  <link href="./css/animate.css" rel="stylesheet">
  <!-- TEMPLATE CSS -->
  <link href="./css/style.css" rel="stylesheet">
  <!-- RESPONSIVE CSS -->
  <link href="./css/responsive.css" rel="stylesheet">
</head>

<body>
<!-- PRELOADER
============================================= -->
<div id="loader-wrapper">
  <div id="loader">
    <ul class="cssload-flex-container">
      <li><span class="cssload-loading"></span></li>
    </ul>
  </div>
</div>
<!-- PAGE CONTENT
============================================= -->
<div id="page" class="page">
  <!-- HEADER
============================================= -->
@include('header')
<!-- END HEADER -->
  <!-- download
============================================= -->
  <section id="download" class="bg-fixed hero-section division">
    <div class="container">
      <div class="row d-flex align-items-center">
        <!-- HERO IMAGE -->
        <div class="col-md-5 col-lg-5 animated" data-animation="fadeInLeft" data-animation-delay="400">
          <div class="hero-img">
            <img class="img-fluid" src="images/hero-2-img.png" alt="hero-image">
          </div>
        </div>
        <!-- HERO TEXT -->
        <div class="col-md-7 col-lg-6 offset-lg-1">
          <div class="hero-txt white-color">
            <!-- Title -->
            <h2 class="h2-lg animated" data-animation="fadeInUp" data-animation-delay="300">
              O App para quem vai de Van
            </h2>
            <!-- Text -->
            <p class="p-lg animated mb-5" data-animation="fadeInUp" data-animation-delay="400">
              Visualize as <strong>rotas e horários</strong> de vans intermunicipais em seu celular!
            </p>
            <!-- HERO LINKS -->
            <div class="hero-links animated" data-animation="fadeInUp" data-animation-delay="600">
              <span>*Fique por dentro ao receber atualizações.<br>Prometemos não mandar spam 😉</span>
            </div>
            <!-- HERO NEWSLETTER FORM -->
            <form action="{{route('passenger')}}"
                  class="newsletter-form animated" method="POST"
                  data-animation="fadeInUp" data-animation-delay="500">
              @csrf
              <div class="input-group">
                <input type="email" class="form-control" placeholder="Seu endereço de e-mail*"
                       required maxlength="191" name="email">
                <span class="input-group-btn" title="Enviar">
                                        <button type="submit" class="btn"><i class="fas fa-arrow-right"></i></button>
                                    </span>
              </div>
              <!-- Newsletter Form Notification -->
              <label for="s-email" class="form-notification"></label>
            </form>
            <!-- HERO LINKS -->
            <div class="hero-links animated" data-animation="fadeInUp" data-animation-delay="600">

            </div>
          </div>
        </div>
        <!-- END HERO TEXT -->
      </div>
      <!-- End row -->
    </div>
    <!-- End container -->
  </section>
  <!-- END download -->
  <!-- FEATURES-3

          ============================================= -->
@include('company')
<!-- END CONTACTS-1 -->
  <section id="features-3" class="p-top-30 p-bottom-70 featuress-section division">
    <div class="container">
      <!-- SECTION TITLE 	-->
      <div class="row">
        <div class="col-md-10 offset-md-1 section-title">
          <!-- Title 	-->
          <h2 class="h2-lg">Sobre o App</h2>
          <!-- Text -->
          <!-- <p>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor
              posuere ligula varius
          </p> -->
        </div>
      </div>
      <!-- END SECTION TITLE -->
      <div class="row">
        <!-- FEATURE BOX #1 -->
        <div class="col-md-6 col-lg-3 animated" data-animation="fadeInUp" data-animation-delay="50">
          <div class="fbox-3 box-icon-lg skyblue-hover">
            <div class="box-line"></div>
            <!-- Icon -->
            <span class="pe-7s-piggy"></span>
            <!-- Title -->
            <h5 class="h5-md">É Grátis!</h5>
            <!-- Text -->
            <p class="grey-color">Você não paga nada por usar o <strong>VouDeVan</strong></p>
          </div>
        </div>
        <!-- FEATURE BOX #3 -->
        <div class="col-md-6 col-lg-3 animated" data-animation="fadeInUp" data-animation-delay="150">
          <div class="fbox-3 box-icon-lg skyblue-hover">
            <div class="box-line"></div>
            <!-- Icon -->
            <span class="pe-7s-target"></span>
            <!-- Title -->
            <h5 class="h5-md">Multiplataforma</h5>
            <!-- Text -->
            <p class="grey-color">Disponível tanto para Android quanto para iOS</p>
          </div>
        </div>
        <!-- FEATURE BOX #4 -->
        <div class="col-md-6 col-lg-3 animated" data-animation="fadeInUp" data-animation-delay="200">
          <div class="fbox-3 box-icon-lg skyblue-hover">
            <div class="box-line"></div>
            <!-- Icon -->
            <span class="pe-7s-edit"></span>
            <!-- Title -->
            <h5 class="h5-md">Amigável</h5>
            <!-- Text -->
            <p class="grey-color">Funcionalidades intuitivas e de fácil acesso</p>
          </div>
        </div>
        <!-- FEATURE BOX #2 -->
        <div class="col-md-6 col-lg-3 animated" data-animation="fadeInUp" data-animation-delay="100">
          <div class="fbox-3 box-icon-lg skyblue-hover">
            <div class="box-line"></div>
            <!-- Icon -->
            <span class="pe-7s-vector"></span>
            <!-- Title -->
            <h5 class="h5-md">Design</h5>
            <!-- Text -->
            <p class="grey-color">Experiência moderna e agradável</p>
          </div>
        </div>
        <!-- FEATURE BOX #6 -->
        <div class="col-md-6 col-lg-3 animated" data-animation="fadeInUp" data-animation-delay="300">
          <div class="fbox-3 box-icon-lg skyblue-hover">
            <div class="box-line"></div>
            <!-- Icon -->
            <span class="pe-7s-bell"></span>
            <!-- Title -->
            <h5 class="h5-md">Notificações</h5>
            <!-- Text -->
            <p class="grey-color">Seja notificado da alteração de rotas/horários</p>
          </div>
        </div>
        <!-- FEATURE BOX #5 -->
        <div class="col-md-6 col-lg-3 animated" data-animation="fadeInUp" data-animation-delay="250">
          <div class="fbox-3 box-icon-lg skyblue-hover">
            <div class="box-line"></div>
            <!-- Icon -->
            <span class="pe-7s-mail-open-file"></span>
            <!-- Title -->
            <h5 class="h5-md">Email</h5>
            <!-- Text -->
            <p class="grey-color">Informações atualizadas diretamente para você</p>
          </div>
        </div>
        <!-- FEATURE BOX #7 -->
        <div class="col-md-6 col-lg-3 animated" data-animation="fadeInUp" data-animation-delay="350">
          <div class="fbox-3 box-icon-lg skyblue-hover">
            <div class="box-line"></div>
            <!-- Icon -->
            <span class="pe-7s-refresh-2"></span>
            <!-- Title -->
            <h5 class="h5-md">Atualizações</h5>
            <!-- Text -->
            <p class="grey-color">O App melhora e sua experiência também</p>
          </div>
        </div>
        <!-- FEATURE BOX #8 -->
        <div class="col-md-6 col-lg-3 animated" data-animation="fadeInUp" data-animation-delay="400">
          <div class="fbox-3 box-icon-lg skyblue-hover">
            <div class="box-line"></div>
            <!-- Icon -->
            <span class="pe-7s-help2"></span>
            <!-- Title -->
            <h5 class="h5-md">Suporte Rápido</h5>
            <!-- Text -->
            <p class="grey-color">Estamos disponíveis para lhe atender</p>
          </div>
        </div>
      </div>
      <!-- End row -->
    </div>
    <!-- End container -->
  </section>
  <!-- END FEATURES-3 -->
  <!-- CONTENT-5
          ============================================= -->
  <section id="content-5" class="p-bottom-80 content-section">
    <div class="bg-scroll p-top-100 bg-inner bg-lightgrey division">
      <div class="container">
        <div class="row d-flex align-items-center">
          <!-- CONTENT TXT -->
          <div class="col-md-6">
            <div class="content-txt ind-45">
              <!-- Title -->
              <h2 class="h2-xs animated" data-animation="fadeInRight" data-animation-delay="100">
                Disponível em seu celular
              </h2>
              <!-- Text -->
              <p class="animated" data-animation="fadeInRight" data-animation-delay="200">
                Utilize o <strong>VouDeVan</strong> em suas próximas viagens e não tenha mais
                problemas ao encontrar Vans e Companhias de transporte.
              </p>
              <p class="animated" data-animation="fadeInRight" data-animation-delay="300">
                Tenha em mãos os horários de saída/chegada, rotas, pontos de paradas e <strong>muito
                  mais</strong>!
              </p>
            </div>
          </div>
          <!-- END CONTENT TXT -->
          <!-- CONTENT IMAGE -->
          <div class="col-md-6 animated" data-animation="fadeInLeft" data-animation-delay="400">
            <div class="content-5-img ind-15">
              <img class="img-fluid" src="images/image-03.png" alt="content-image">
            </div>
          </div>
        </div>
        <!-- End row -->
      </div>
      <!-- End container -->
    </div>
    <!-- End Inner Background -->
  </section>
  <!-- END CONTENT-5 -->
  <!-- CONTENT-7
          ============================================= -->
  <section id="content-7" class="p-top-100 content-section">
    <!-- SECTION TITLE 	-->
    <div class="container division">
      <div class="row">
        <div class="col-md-10 offset-md-1 section-title">
          <!-- Title 	-->
          <h2 class="h2-lg">Facilidade para as Empresas</h2>
          <!-- Text -->
          <p>Gerencie os <strong>horários e rotas</strong> dos serviços de sua companhia de transporte
          </p>
        </div>
      </div>
    </div>
    <!-- END SECTION TITLE -->
    <!-- CONTENT IMAGE -->
    <div class="bg-fixed content-7-image division">
      <div class="container white-color">
        <div class="row">
          <div class="col-md-12">
            <!-- Image -->
            <div class="content-img">
              <img class="img-fluid" src="images/content-7-img.png" alt="content-image"/>
            </div>
            <div class="row">
              <!-- FEATURE BOX #1 -->
              <div class="col-md-4 animated" data-animation="fadeInUp" data-animation-delay="300">
                <div class="fbox-1 box-icon-lg">
                  <!-- Icon -->
                  <span class="pe-7s-target"></span>
                  <!-- Title -->
                  <h5 class="h5-md">Acesso Rápido</h5>
                  <!-- Text -->
                  <p class="grey-color">Utilize a administração do VouDeVan de onde estiver.
                  </p>
                </div>
              </div>
              <!-- FEATURE BOX #2 -->
              <div class="col-md-4 animated" data-animation="fadeInUp" data-animation-delay="400">
                <div class="fbox-1 box-icon-lg">
                  <!-- Icon -->
                  <span class="pe-7s-mail-open-file"></span>
                  <!-- Title -->
                  <h5 class="h5-md">Ferramenta de Email</h5>
                  <!-- Text -->
                  <p class="grey-color">Receba informações importantes e dados atualizados
                    regularmente.
                  </p>
                </div>
              </div>
              <!-- FEATURE BOX #3 -->
              <div class="col-md-4 animated" data-animation="fadeInUp" data-animation-delay="500">
                <div class="fbox-1 box-icon-lg">
                  <!-- Icon -->
                  <span class="pe-7s-shield"></span>
                  <!-- Title -->
                  <h5 class="h5-md">Segurança</h5>
                  <!-- Text -->
                  <p class="grey-color">Seus dados estão seguros conosco. Mostre aos seus clientes
                    apenas o essencial.
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- End row -->
      </div>
      <!-- End container -->
    </div>
    <!-- END CONTENT IMAGE -->
  </section>
  <!-- END CONTENT-7 -->

  <!-- DOWNLOAD-3
          ============================================= -->
  <section id="download-3" class="wide-50 download-section">
    <div class="bg-scroll bg-inner bg-dark division" style="background-image: url(./images/palmas.jpg);">
      <div class="container white-color">
        <div class="row d-flex align-items-center">
          <!-- DOWNLOAD IMAGE -->
          <div class="col-md-5 col-lg-4 animated" data-animation="fadeInRight" data-animation-delay="500">
            <div class="download-3-img text-center ind-15">
              <img class="img-fluid" src="images/image-05.png" alt="download-image">
            </div>
          </div>
          <!-- DOWNLOAD TXT -->
          <div class="col-md-7 col-lg-7 offset-lg-1">
            <div class="download-txt ind-30">
              <!-- Title -->
              <h2 class="h2-xs animated" data-animation="fadeInLeft" data-animation-delay="300">
                Viaje tranquilamente
              </h2>
              <!-- Text -->
              <p class="p-lg animated" data-animation="fadeInLeft" data-animation-delay="400">
                Se cadastre para receber o App em primeira mão, e aguarde as novidades!
              </p>
              <!-- HERO STORE BADGES -->
              <div class="stores-badge animated" data-animation="fadeInLeft"
                   data-animation-delay="500">
                <!-- AppStore -->
                <a href="#download" class="store btn-download">
                  <img class="appstore-grey" src="images/store_badges/appstore-grey.png"
                       width="158" height="50" alt="appstore-logo">
                </a>
                <!-- Google Play -->
                <a href="#download" class="store btn-download">
                  <img class="googleplay-grey" src="images/store_badges/googleplay-grey.png"
                       width="168" height="50" alt="googleplay-logo">
                </a>
              </div>
            </div>
          </div>
          <!-- END DOWNLOAD TXT -->
        </div>
        <!-- End row -->
      </div>
      <!-- End container -->
    </div>
    <!-- End Inner Background -->
  </section>
  <!-- END DOWNLOAD-3 -->

  <!-- FOOTER-1
          ============================================= -->
@include('footer')
<!-- END FOOTER-1 -->
</div>
<!-- END PAGE CONTENT -->
<!-- EXTERNAL SCRIPTS
============================================= -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery.mask.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/fontawesome-all.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/retina.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.scrollto.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/contact-form.js"></script>
<script src="js/quick-form.js"></script>
<script src="js/comment-form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<!-- Custom Script -->
<script src="js/custom.js"></script>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!-- [if lt IE 9]>
<script src="js/html5shiv.js" type="text/javascript"></script>
<script src="js/respond.min.js" type="text/javascript"></script>


<![endif] -->
<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
<!--
<script>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXX-X']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
-->
</body>

</html>
