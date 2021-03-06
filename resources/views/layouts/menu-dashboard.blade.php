<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Rikudo Technologies">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Tableau de bord Utilisateur | Oui Patron!</title>

  <!-- Favicons -->
  <link href="/dashboard/img/image-profil.png" rel="icon">
  <link href="/dashboard/img/image-profil.png" rel="image-profil">

  <!-- Bootstrap core CSS -->
  <link href="/dashboard/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="/dashboard/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="/dashboard/css/style.css" rel="stylesheet">
  <link href="/dashboard/css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header>
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="{{url('/')}}" class="logo"><img width="100" src="/dashboard/img/thumbnail.png"></a>
      <!--logo end-->

      <div class="top-menu">

        <ul class="nav pull-right top-menu">

          <li>

            <a class="logout" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Se déconnecter') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

          </li>

        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="{{url('home')}}"><img src="/avatars/users/{{Auth::user()->photo}}" class="img-circle" width="80"></a></p>
          <h5 class="centered">{{Auth::user()->name}}</h5>
          <li class="mt">
            <a href="{{url('home')}}">
              <i class="fa fa-laptop"></i>
              <span>Profil</span>
              </a>
          </li>
          @auth
          @if(Auth::user()->isAdmin())
          <li>

            <a  style="border-radius:8px; color: red; background-color: transparent;" class="logout" href="{{ route('jobs.create') }}">
                Ajouter un métier
            </a>

          </li>
          <li>

            <a  style="border-radius:8px; color: #967ADC; background-color: transparent;" class="logout" href="{{ route('demandes.index') }}">
                Voir les demandes
            </a>

          </li>
          @endif
          @endauth
          <!--li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li-->
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->


    @yield('content')

    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong></strong> 2018-2019. Oui Patron!. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          ->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>-->
        </div>
        <a href="profile.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="/dashboard/lib/jquery/jquery.min.js"></script>
  <script src="/dashboard/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="/dashboard/lib/jquery.scrollTo.min.js"></script>
  <script src="/dashboard/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="/dashboard/lib/common-scripts.js"></script>
  <!--script for this page-->
  <!-- MAP SCRIPT - ALL CONFIGURATION IS PLACED HERE - VIEW OUR DOCUMENTATION FOR FURTHER INFORMATION -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
  <script>
    $('.contact-map').click(function() {

      //google map in tab click initialize
      function initialize() {
        var myLatlng = new google.maps.LatLng(40.6700, -73.9400);
        var mapOptions = {
          zoom: 11,
          scrollwheel: false,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Oui Patron !'
        });
      }
      google.maps.event.addDomListener(window, 'click', initialize);
    });
  </script>
</body>

</html>
