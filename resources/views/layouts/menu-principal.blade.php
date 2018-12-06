<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/WebPage" lang="en">

<head>
  <meta charset="utf-8">

  <meta name="theme-color" content="#3C7DC0" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5.0, minimum-scale=1.0, user-scalable=yes">

  <style>
    :root {
      --theme-primary-bg: #ecf1f9;
      --theme-primary-light: #a1bbd5;
      --theme-primary: #3c7dc0;
      --theme-primary-dark: #3364AA;
    }
  </style>


  <link rel="stylesheet" type="text/css" href="/css/hackr.css">
  <!-- CSS --

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <title>Oui Patron! | @yield('title')</title>
  <meta name="description" content="Nous résolvons vos problèmes les plus teigneux">
  <meta itemprop="name" content="Oui! Patron | Nous résolvons vos problèmes les plus teigneux">
  <meta itemprop="description" content="Nous résolvons vos problèmes les plus teigneux">
  <meta itemprop="image" content="https://hackr.io/assets/images/code-images/code-logo-120.png">

  <meta name="csrf-token" content="lpdr45sh6CANKvxJNhj9RwfiwgSVIzxefKeSOjA7">


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <script type="text/javascript">

  function toggle() {
    var x = document.getElementById("menu");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

  </script>




</head>

<body class="
      hacknlearn
          desktop
            signin">

  <nav class="navbar navbar-fixed-top scrolled" role="navigation">
    <div class="container no-padding">
      <div class="navbar-holder">
        <div class="nav-main">
          <div class="left">
            <div class="navbar-header">
              <a class="navbar-brand" href="/">
                <img src="https://code.oschool.ci/new/images/logo.png" alt="">
              </a>
              <div onclick="toggle()" class="site-toggle marginleft-xs"><i class="ion-arrow-down-b"></i></div>
              <div class="dropdown site-toggle-dropdown">
                <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                </button>
              </div>

            </div>
            <div class="navbar-subnav">
              <ul class="nav navbar-nav">
                <li><span style="height: 6px; width: 6px; background-color: red; border-radius: 4px; position: absolute; top: 0; right: 0;"></span><a target="_blank" href="https://calendly.com/oschool_e-learning/demo-oschool-code" class="navbar-subnav-links  site-navigation">Nos services</a></li>
              </ul>
            </div>
          </div>
          <div class="right">
            <button class="nav-btn visible-xs btn btn-primary btn-as-link mob-signup open-signup-modal"> <a href="{{route('login')}}">Dites nous votre besoin</a></button>
            <div class="navbar-collapse collapse" id="navbarCollapse">
              <ul class="nav navbar-nav">
                <li>
                  <a href="{{route('login')}}" class="home_button">Dites nous votre besoin</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="mobile-search visible-xs">
          <div class="mobile-navbar-search search-bar">
            <div class="form-holder">
              <div class="navbarSearch">
                <input class="typeahead form-control nav-input js-navbar-search-input" type="text" placeholder="Search for Python, AngularJS, ...">
              </div>
              <i class="icon ion-ios-search-strong"></i>
            </div>
          </div>
        </div>

      </div>
      <div id="menu" class="site-toggle-dropdown">
        <p>Voir</p>
        <a href="/#schools" class="site-navigation">
          <img class="emoji-png" src="https://d1eq8vvyuam4eq.cloudfront.net/assets/images/programming.png" alt="programming">Nos services
        </a>

      </div>
    </div>
  </nav>

  @yield('content')


  <footer>
    <div class="container alt">
      <div class="row">
        <div class="col-xs-12">
          <div class="footer-holder">
            <div class="links">
              <ul class="fx-links">
                <li><a href="https://code.oschool.ci/cours">Nos parcours</a></li>
                <li><a href="https://oschool.ci/blog/">Blog</a></li>
                <li><a href="http://oschool.ci/questions-courantes/">Des questions ?</a></li>
                <li>
                  <a data-toggle="modal" data-target="#modalFeedback" href="javascript:void(0)">
                    Nous vous <img class="emoji-png" src="https://d1eq8vvyuam4eq.cloudfront.net/assets/images/heart.svg" alt="heart-icon">beaucoup</a></li>
              </ul>
            </div>
            <div class="social-links links">
              <ul class="fx-links">
                <li><a href="https://www.facebook.com/Oschool.ci/" target="_blank" rel="noopener" class="facebook"><i class="fa fa-facebook"></i>Facebook</a></li>
                <li><a href="https://www.linkedin.com/school/oschool/" target="_blank" rel="noopener" class="twitter"><i class="fa fa-twitter"></i>LinkedIn</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>


  </body>

  </html>
