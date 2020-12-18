<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Studies | Yuktix </title>
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
    <!-- Articles Section -->
    <div class="container space-3">
        <!-- Title -->
        <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
            <h2 class="h1">Read our case studies</h2>
            <p>We've helped some great companies, famers, organisation in agriculture domain</p>
        </div>
        <!-- End Title -->
        <div class="row mx-n2 mb-5 mb-md-9">
            <div class="col-sm-6 col-lg-3 px-2 mb-3 mb-lg-0">
                <!-- Card -->
                <a class="card h-100 transition-3d-hover" href="agriculture-farm-management-co.php">
                    <img class="card-img-top" src="assets/media/images/img7.jpg" alt="Image Description">
                    <div class="card-body">
                        <span class="d-block small font-weight-bold text-cap mb-2">CASE STUDY</span>
                        <h5 class="mb-0">Agriculture Farm Management Company</h5>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <div class="col-sm-6 col-lg-3 px-2 mb-3 mb-lg-0">
                <!-- Card -->
                <a class="card h-100 transition-3d-hover" href="commodities-trader-company.php">
                    <img class="card-img-top" src="assets/media/images/img7.jpg" alt="Image Description">
                    <div class="card-body">
                        <span class="d-block small font-weight-bold text-cap mb-2">CASE STUDY</span>
                        <h5 class="mb-0">Commodities Trader Company</h5>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <div class="col-sm-6 col-lg-3 px-2 mb-3 mb-sm-0">
                <!-- Card -->
                <a class="card h-100 transition-3d-hover" href="food-fmcg-company.php">
                    <img class="card-img-top" src="assets/media/images/img7.jpg" alt="Image Description">
                    <div class="card-body">
                        <span class="d-block small font-weight-bold text-cap mb-2">CASE STUDY</span>
                        <h5 class="mb-0">Food FMCG Company</h5>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <div class="col-sm-6 col-lg-3 px-2">
                <!-- Card -->
                <a class="card h-100 transition-3d-hover" href="research-institutes-and-ngo.php">
                    <img class="card-img-top" src="assets/media/images/img7.jpg" alt="Image Description">
                    <div class="card-body">
                        <span class="d-block small font-weight-bold text-cap mb-2">CASE STUDY</span>
                        <h5 class="mb-0">Research Institutes and NGO</h5>
                    </div>
                </a>
                <!-- End Card -->
            </div>
        </div>
        <div class="row mx-n2 mb-5 mb-md-9">
            <div class="col-sm-6 col-lg-3 px-2 mb-3 mb-lg-0">
                <!-- Card -->
                <a class="card h-100 transition-3d-hover" href="table-grape-grower-in-karnataka.php">
                    <img class="card-img-top" src="assets/media/images/img7.jpg" alt="Image Description">
                    <div class="card-body">
                        <span class="d-block small font-weight-bold text-cap mb-2">CASE STUDY</span>
                        <h5 class="mb-0">Table Grape Growers in Karnataka</h5>
                    </div>
                </a>
                <!-- End Card -->
            </div>
        </div>
        <!-- End Articles Section -->
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
        <script src="assets/vendor/appear.js"></script>
        <script src="assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
        <script src="assets/vendor/hs-video-bg/dist/hs-video-bg.min.js"></script>
        <script src="assets/vendor/typed.js/lib/typed.min.js"></script>
        <script src="assets/vendor/aos/dist/aos.js"></script>
        <!-- JS Implementing Plugins -->
        <script src="assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
        <!-- JS Header -->
        <script src="assets/vendor/hs-header/dist/hs-header.min.js"></script>
        <script src="assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
        <script src="assets/vendor/hs-scroll-nav/dist/hs-scroll-nav.min.js"></script>
        <script src="assets/vendor/appear.js"></script>
        <!-- JS Plugins Init. -->
        <script>
        $(document).on('ready', function() {
            // initialization of header
            var header = new HSHeader($('#header')).init();

            // initialization of scroll nav
            $('.js-scroll-nav').each(function() {
                var scrollNav = new HSScrollNav($(this)).init();
            });
            // initialization of HSMegaMenu component
            var megaMenu = new HSMegaMenu($('.js-mega-menu')).init();
        });
        </script>
</body>

</html>