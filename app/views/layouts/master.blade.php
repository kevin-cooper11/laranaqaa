<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>ALNAQAA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

<!--    <link rel="stylesheet" href="bower_components/pace/themes/pace-theme-minimal.css">-->
    <script type="text/javascript">
paceOptions = {
    elements: true
      };
    </script>
<!--    <script src="../app/bower_components/pace/pace.js"></script>-->

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.min.css">

    <!--[if lte IE 8]>
        <style>.main{display:none;} .support-note .note-ie{display:block;}</style>
    <![endif]-->
<!--    <script src="bower_components/modernizr/modernizr.js"></script>-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
    <noscript>
      <style>
      .step {
    width: 100%;
    position: relative;
}
      .step:not(.active) {
    opacity: 1;
    filter: alpha(opacity=99);
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(opacity=99)";
      }
      .step:not(.active) a.jms-link{
    opacity: 1;
    margin-top: 40px;
      }
      </style>
    </noscript>
</head>
<!--[if lt IE 10]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class="row" id="menu-row">
    <a id="menu-button"><i class="fa fa-bars"> Menu</i></a>
</div>

<ul id="main-menu" class="sm sm-clean">
    <li><a href="home"><i class="fa fa-home"></i> ALNAQAA</a></li>
<!--     <li><a href="#"><i class="fa fa-bolt"></i> Services</a>
        <ul>
            <li><a href="pest-control/homes">Homes</a></li>
            <li><a href="pest-control/commercial-properties">Commercial Properties</a></li>
            <li><a href="pest-control/restaurants">Restaurants</a></li>
            <li><a href="pest-control/cafes">Cafes</a></li>
            <li><a href="pest-control/hotels-and-motels">Hotels and Motels</a></li>
            <li><a href="pest-control/government-departments">Government Departments</a></li>
        </ul>
    </li> -->
    <li><a href="procedure"><i class="fa fa-bolt"></i> Our Procedure</a>
    <li><a href="identify-unknown-pest"><i class="fa fa-search-plus"></i> Identify a Pest</a>
        <!--     <ul>
              <li><a href="#">Ants</a></li>
              <li><a href="#">Bed Bugs</a></li>
              <li><a href="#">Cockroaches</a></li>
              <li><a href="#">Termites</a></li>
              <li><a href="#">Roaches</a></li>
              <li><a href="#">Rodents (rats/mice)</a></li>
              <li><a href="#">Bees</a></li>
              <li><a href="#">Spiders</a></li>
              <li><a href="#">Ticks</a></li>
              <li><a href="#">Mosquitoes</a></li>
            </ul> -->
    </li>
    <li><a href="schedule"><i class="fa fa-calendar"></i> Schedule a Visit</a></li>
    <li><a href="free-inspection"><i class="fa fa-gift"></i> Free Inspection</a></li>
    <li><a href="faq"><i class="fa fa-question-circle"></i> FAQs</a></li>
    <li><a href="about"><i class="fa fa-leaf"></i> About Us</a></li>
    <li><a href="contact"><i class="fa fa-comment"></i> Contact us</a></li>
</ul>

@yield('content')

<footer class="row text-center">
    <div class="col-lg-4">
        <h1>ALNAQAA</h1>
    </div>
    <div class="col-lg-4 text-center" style="margin-left:auto;margin-right:auto;">
        <a class="social" id="twitter" href="#" title="">
            <div class="icon"></div>

            <div class="shutter_frame">
                <div class="shutter">
                    <div class="number">1189</div>
                    <div class="bar"></div>
                    <div class="text">Seguir</div>
                </div>
            </div>
        </a>

        <a class="social" id="google" href="#" title="">
            <div class="icon"></div>

            <div class="shutter_frame">
                <div class="shutter">
                    <div class="number">421</div>
                    <div class="bar"></div>
                    <div class="text">+1</div>
                </div>
            </div>
        </a>

        <a class="social" id="facebook" href="#" title="">
            <div class="icon"></div>

            <div class="shutter_frame">
                <div class="shutter">
                    <div class="number">973</div>
                    <div class="bar"></div>
                    <div class="text">Like</div>
                </div>
            </div><!-- / .shutter_frame -->
        </a>
    </div><!-- / .wpr -->
    <div class="col-lg-4">
        <address>
            <strong>ALNAQAA, Inc.</strong><br>
            795 Folsom Ave, Suite 600<br>
            United Arab Emirates, CA 94107<br>
            <abbr title="Phone">Phone:</abbr> 00971509399881
        </address>
    </div>
</footer>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="js/main.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
</body>
</html>