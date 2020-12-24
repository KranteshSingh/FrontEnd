<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Testing Header</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/favicon.ico">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
    <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsparallaxer.css">
    <link rel="stylesheet" href="assets/vendor/hs-video-bg/dist/hs-video-bg.min.css">
    <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
    <!-- CSS Front Template -->
    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <?php include 'includes/tracking.inc'; ?>
</head>

<body>
    <!-- ========== HEADER ========== -->
    <header id="header" class="header header-box-shadow-on-scroll header-sticky-top header-show-hide"
        data-hs-header-options='{
            "fixMoment": 1000,
            "fixEffect": "slide"
          }'>
        <div class="header-section">
            <div id="logoAndNav" class="container">
                <!-- Nav -->
                <nav class="js-mega-menu navbar navbar-expand-lg">
                    <!-- Logo -->
                    <a class="navbar-brand" href="index.html" aria-label="Yuktix">
                        <img width="40px" height="40px" src="assets/svg/logos/yuktix-logo.svg" alt="Yuktix Logo">
                    </a>
                    <!-- End Logo -->
                    <!-- Responsive Toggle Button -->
                    <button type="button" class="navbar-toggler btn btn-icon btn-sm rounded-circle"
                        aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar"
                        data-toggle="collapse" data-target="#navBar">
                        <span class="navbar-toggler-default">
                            <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor"
                                    d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z" />
                            </svg>
                        </span>
                        <span class="navbar-toggler-toggled">
                            <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor"
                                    d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                            </svg>
                        </span>
                    </button>
                    <!-- End Responsive Toggle Button -->
                    <!-- Navigation -->
                    <div id="navBar" class="collapse navbar-collapse">
                        <div class="navbar-body header-sticky-top-inner">
                            <ul class="navbar-nav">
                                <!-- Blog -->
                                <li class="hs-has-sub-menu navbar-nav-item">
                                    <a id="blogMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle"
                                        href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                        aria-labelledby="blogSubMenu">Products</a>
                                    <!-- Blog - Submenu -->
                                    <div id="blogSubMenu" class="hs-sub-menu dropdown-menu"
                                        aria-labelledby="blogMegaMenu" style="min-width: 230px;">
                                        <a class="dropdown-item" href="greensense.php">Greensense</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="automatic-weather-station.php">Weather
                                            Station</a>
                                        <a class="dropdown-item" href="smart-irrigation.php">Smart Irrigation</a>

                                        <a class="dropdown-item" href="digital-rain-gauge.php">Digital Rain Gauge</a>
                                        <a class="dropdown-item" href="greenhouse-logger.php">Greenhouse Logger</a>
                                    </div>
                                    <!-- End Submenu -->
                                </li>
                                <!-- End Blog -->
                                <li class="navbar-nav-item">
                                    <a class="nav-link" href="agriculture.php">Agriculture</a>
                                </li>
                                <li class="navbar-nav-item">
                                    <a class="nav-link" href="technology.php">Technology</a>
                                </li>
                                <li class="navbar-nav-item">
                                    <a class="nav-link" href="about.php">About</a>
                                </li>
                                <li class="navbar-nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                                <!-- Button -->
                                <li class="navbar-nav-last-item">
                                    <a class="btn btn-sm btn-primary transition-3d-hover"
                                        href="http://webm01-dev.yuktix.com:8001/login/green.php" target="_blank">
                                        Greensense Login
                                    </a>
                                </li>
                                <!-- End Button -->
                            </ul>
                        </div>
                    </div>
                    <!-- End Navigation -->
                </nav>
                <!-- End Nav -->
            </div>
        </div>
    </header>
    <!-- ========== END HEADER ========== -->
    <main id="content" role="main">
        <!-- Hero Section -->
        <div class="bg-primary bg-img-hero" style="background-image: url(assets/svg/components/abstract-shapes-5.svg);">
            <div class="container space-2 space-lg-3">
                <div class="w-lg-65 text-center mx-lg-auto">
                    <span class="badge badge-soft-light badge-pill font-size-1 py-3 px-4 mb-3">YUKTIX Technologies PVT.
                        LTD.</span>
                    <h1 class="text-white mb-0">TESTING HEADER</h1>
                </div>
            </div>
        </div>
        <!-- End Hero Section -->
    </main>
    <?php
    include 'includes/footer.php';
    ?>
    <!-- JS Global Compulsory -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JS Implementing Plugins -->
    <script src="assets/vendor/hs-header/dist/hs-header.min.js"></script>
    <script src="assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
    <script src="assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
    <script src="assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
    <script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <!-- JS Front -->
    <script src="assets/js/hs.core.js"></script>
    <!-- JS Plugins Init. -->
    <script>
    $(document).on('ready', function() {
        // initialization of header
        var header = new HSHeader($('#header')).init();

        // initialization of mega menu
        var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
            desktop: {
                position: 'left'
            }
        }).init();
        // initialization of aos
    });
    </script>
    <!-- IE Support -->
    <script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write(
        '<script src="assets/vendor/polifills.js"><\/script>');
    </script>
</body>

</html>