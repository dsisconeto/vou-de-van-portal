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
@include('header', ['scroll'=>false])
<!-- END HEADER -->


  <section id="contacts-1" class="bg-fixed bg-lightgrey wide-30 contacts-section division">
    <div class="container" style="min-height: 500px">
      <!-- SECTION TITLE -->
      <div class="row">
        <div class="col-md-10 offset-md-1 section-title">
          <!-- Title 	-->
          <h2 class="h2-lg">Obrigado pelo pré cadastro 😍</h2>
          <p>
            Logo enviaremos mais informações sobre nosso aplicativo.
          </p>
          <!-- Text -->

        </div>
      </div>

    </div>
    <!-- End container -->
  </section>
@if(request()->has('passenger'))
  @include('company')
@endif
<!-- END CONTACTS-1 -->

  <!-- END FEATURES-3 -->


  @include('footer')

</div>

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
