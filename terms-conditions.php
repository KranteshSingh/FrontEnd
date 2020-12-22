<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms & Conditions | Yuktix </title>
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
    <?php include 'includes/tracking.inc'; ?>
</head>

<body>
    <!-- Header -->
    <?php
    include 'includes/header.php';
    ?>
    <!--Header end-->

    <!-- ========== MAIN ========== -->
    <main id="content" role="main">
        <!-- Hero Section -->
        <div class="d-lg-flex">
            <div
                class="container d-lg-flex align-items-lg-center vh-lg-100 space-bottom-1 space-top-3 space-bottom-lg-3 space-lg-0">
                <div class="row justify-content-lg-between align-items-lg-center w-100 mt-lg-9">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <img class="img-fluid" src="assets/svg/illustrations/relaxing-man.svg" alt="SVG Illustration">
                    </div>

                    <div class="col-lg-5">
                        <!-- Title -->
                        <div class="mb-4">
                            <h1>Coming soon.</h1>
                            <p>This page is under construction.</p>
                        </div>
                        <!-- End Title -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero Section -->
    </main>
    <!-- ========== END MAIN ========== -->
    <br><br><br>
    <!-- Header -->
    <?php
    include 'includes/footer.php';
    ?>
    <!--Header end-->
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
    <!-- JS Implementing Plugins -->
    <!-- JS Plugins Init. -->
    <script>
    $(document).on('ready', function() {
        // initialization of header
        var header = new HSHeader($('#header')).init();

        // initialization of mega menu
        var megaMenu = new HSMegaMenu($('.js-mega-menu')).init();
    });
    </script>
</body>

</html>