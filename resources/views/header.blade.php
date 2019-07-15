<header id="header" class="header">
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-tra @isset($scroll) no-scroll @endif">
    <div class="container">
      <!-- LOGO IMAGE -->
      <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 260 x 60 pixels) -->
      <a href="{{route('home')}}" class="navbar-brand logo-white"><img src="images/logo-white.png" height="30"
                                                               alt="header-logo"></a>
      <a href="{{route('home')}}" class="navbar-brand logo-black"><img src="images/logo.png" height="30"
                                                               alt="header-logo"></a>
      <!-- Responsive Menu Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse"
              data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
              aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Navigation Menu -->
      <div id="navbarSupportedContent" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <!-- Dropdown Link >
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      About
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="#">Why MobiCom</a>
       <a class="dropdown-item" href="#">How It Works</a>
        <div class="dropdown-divider"></div>
       <a class="dropdown-item" href="#">Watch Video</a>
    </div>
</li>-->
        {{--            <li class="nav-item nl-simple"><a class="nav-link" href="#features-3">Sobre</a></li>--}}
        {{--            <li class="nav-item nl-simple"><a class="nav-link" href="#content-7">Empresas</a></li>--}}
        {{--            <li class="nav-item nl-simple"><a class="nav-link" href="#reviews-1">Depoimentos</a></li>--}}
        {{--            <li class="nav-item nl-simple"><a class="nav-link" href="#contacts-1">Contato</a></li>--}}
        <!-- AppStore Badge -->
          <li class="nav-item">
            <a href="#download" class="header-store btn-download" title="Em Breve na Google Play">
              <img class="googleplay-button" src="images/store_badges/googleplay.png" width="141"
                   height="44" alt="googleplay-logo">
            </a>
          </li>
          <li class="nav-item">
            <a href="#download" class="header-store btn-download" title="Em Breve na App Store">
              <img class="appstore-button" src="images/store_badges/header-appstore.png"
                   width="141" height="44" alt="appstore-logo">
            </a>
          </li>
          <!-- Google Play Badge
<li class="nav-item">
<a href="#" class="header-store">
  <img class="googleplay-button" src="images/store_badges/header-googleplay.png" width="151" height="44" alt="googleplay-logo">
</a>
</li>  -->
        </ul>
      </div>
      <!-- End Navigation Menu -->
    </div>
    <!-- End container -->
  </nav>
  <!-- End navbar  -->
</header>
