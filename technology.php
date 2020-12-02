<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensor Catalog | Yuktix</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/favicon.ico">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
    <link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsparallaxer.css">
    <link rel="stylesheet" href="assets/vendor/fancybox/dist/jquery.fancybox.min.css">
    <!-- CSS Front Template -->
    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
<?php
        include 'includes/header.php';
        ?>


<!-- Hero Section -->
<div class="container space-3">
  <div class="row justify-content-lg-between align-items-lg-center">
    <div class="col-sm-10 col-lg-5 mb-7 mb-lg-0">
      <img class="img-fluid" src="assets/svg/illustrations/reading.svg" alt="Image Description">
    </div>

    <div class="col-md-6">
      <div class="mb-5">
        <h1 class="display-4 mb-3">
          Our Technology
          <br>
          <span class="text-primary font-weight-bold">
            <span class="js-text-animation"></span>
          </span>
        </h1>
        <p class="lead">Turn your physical assets into digital data sources with the help of Yuktix ankiDB™ cloud. We provide a low code solution to bring data out of silos and on the network for everyone to share and analyze</p>
      </div>

      <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
        <a class="btn btn-primary transition-3d-hover mb-2" href="#">Know More</a>

        <div class="mx-2"></div>

        <!-- Fancybox -->
        <a class="js-fancybox video-player video-player-btn media align-items-center text-dark mb-2" href="javascript:;"
           data-hs-fancybox-options='{
             "src": "//youtube.com/0qisGSwZym4",
             "caption": "Front - Responsive Website Template",
             "speed": 700,
             "buttons": ["fullScreen", "close"],
             "youtube": {
               "autoplay": 1
             }
           }'>
          <span class="video-player-icon shadow-soft mr-3">
            <i class="fa fa-play"></i>
          </span>
          <span class="media-body">
            How it works
          </span>
        </a>
        <!-- End Fancybox -->
      </div>
    </div>
  </div>
</div>
<!-- End Hero Section -->



<?php
        include 'includes/footer.php';
        ?>
     <!-- Global Scripts-->
     <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JS Front-->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/hs.fancybox.js"></script>
    <!-- JS Implementing Plugins -->
    <script src="assets/vendor/hs-header/dist/hs-header.min.js"></script>
    <script src="assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
    <script src="assets/vendor/hs-scroll-nav/dist/hs-scroll-nav.min.js"></script>
    <script src="assets/vendor/appear.js"></script>
    <script src="assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
    <script src="assets/vendor/hs-video-bg/dist/hs-video-bg.min.js"></script>
    <script src="assets/vendor/typed.js/lib/typed.min.js"></script>
    <script src="assets/vendor/aos/dist/aos.js"></script>
    <script src="assets/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
    <!-- JS Implementing Plugins -->

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function () {
            // initialization of header
            var header = new HSHeader($('#header')).init();
            // initialization of scroll nav
            $('.js-scroll-nav').each(function () {
                var scrollNav = new HSScrollNav($(this)).init();
            });
            // initialization of HSMegaMenu component
            var megaMenu = new HSMegaMenu($('.js-mega-menu')).init();

            
        });

        $(document).on('ready', function () {
    // initialization of fancybox
    $('.js-fancybox').each(function () {
      var fancybox = $.HSCore.components.HSFancyBox.init($(this));
    });
  });
    </script>
</body>
</html>