<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us | Yuktix</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/favicon.ico">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
    <link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsparallaxer.css">
    <link rel="stylesheet" href="assets/vendor/fancybox/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/vendor/leaflet/dist/leaflet.css">
    <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
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

    <!-- Contact Form Section -->
    <div class="container space-top-3">
        <div class="row">
            <div class="col-lg-6 mb-9 mb-lg-0">
                <div class="mb-5">
                    <h1 class="display-4">Get in touch</h1>
                    <p>We'd love to talk about how we can help you.</p>
                </div>
                <!-- Leaflet -->
                <div id="mapExample2" class="min-h-300rem mb-5" data-hs-leaflet-options='{
               "map": {
                 "scrollWheelZoom": true,
                 "coords": [12.905176784044777, 77.64459732787259]
               },
               "marker": [
                 {
                    "coords": [12.905176784044777, 77.64459732787259],
                   "icon": {
                     "iconUrl": "assets/svg/components/map-pin.svg",
                     "iconSize": [50, 45]
                   },
                   "popup": {
                     "text": "Yuktix Technologies Pvt Ltd"
                   }
                 }
               ]
              }'></div>
                <!-- End Leaflet -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <span class="d-block h5 mb-1">Address:</span>
                            <span class="d-block text-body font-size-1"><b>Yuktix Technologies</b><BR>
                                No. 1713, Floor-2, 19 Main
                                Sector-2, HSR Layout
                                Bangalore, Karnataka, 560102</span>
                            <a class="font-size-14" target="_blank" href="https://goo.gl/maps/yKmwCpsxWD3kPAut9">View on
                                Google map ></a>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <span class="d-block h5 mb-1">Call us:</span>
                            <span class="d-block text-body font-size-1">+91-80 2572 9456</span>
                            <span class="d-block text-body font-size-1">+91-888 431 5300</span>
                        </div>

                        <div class="mb-3">
                            <span class="d-block h5 mb-1">Email us:</span>
                            <span class="d-block text-body font-size-1">support@yuktix.com</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ml-lg-5">
                    <!-- Form -->
                    <form class="js-validate card shadow-lg mb-4" method="post" action="includes/mailer.php">
                        <div class="card-header border-0 bg-light text-center py-4 px-4 px-md-6">
                            <h2 class="h4 mb-0">Enquiries</h2>
                        </div>
                        <div class="card-body p-4 p-md-6">
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Form Group -->
                                    <div class="js-form-message form-group">
                                        <label for="firstNameExample1" class="input-label">Your name</label>
                                        <input type="text" class="form-control" name="visitorName"
                                            id="firstNameExample1" placeholder="Enter Your Name Here"
                                            aria-label="Nataly" required data-msg="Please enter your name">
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                                <div class="col-sm-12">
                                    <!-- Form Group -->
                                    <div class="js-form-message form-group">
                                        <label for="emailAddressExample1" class="input-label">Email address</label>
                                        <input type="email" class="form-control" name="visitorEmail"
                                            id="emailAddressExample1" placeholder="Enter Your Email Here"
                                            aria-label="alex@pixeel.com" required
                                            data-msg="Please enter a valid email address">
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                                <div class="col-sm-12">
                                    <!-- Form Group -->
                                    <div class="js-form-message form-group">
                                        <label for="phoneNumber" class="input-label">Phone Number</label>
                                        <input type="number" class="form-control" name="visitorPhone"
                                            id="emailAddressExample1" placeholder="Enter Phone Number Here"
                                            aria-label="alex@pixeel.com" required
                                            data-msg="Please enter a valid phone number">
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                                <div class="col-sm-12">
                                    <!-- Form Group -->
                                    <div class="js-form-message form-group">
                                        <label for="phoneNumber" class="input-label">Subject</label>
                                        <input type="text" class="form-control" name="visitorSubject"
                                            id="emailAddressExample1" placeholder="Your Subject Here"
                                            aria-label="alex@pixeel.com" required
                                            data-msg="Please enter a valid Subject">
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                                <div class="col-sm-12">
                                    <!-- Form Group -->
                                    <div class="js-form-message form-group">
                                        <label for="message" class="input-label">Your Message</label>
                                        <div class="input-group">
                                            <textarea class="form-control" rows="4" name="visitorMessage" id="message"
                                                placeholder="Hi there, I would like to ..."
                                                aria-label="Hi there, I would like to ..." required
                                                data-msg="Please enter your message"></textarea>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary transition-3d-hover">Submit</button>
                        </div>
                    </form>
                    <!-- End Form -->
                    <div class="text-center">
                        <p class="small">We'll get back to you in 12 Hours</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Form Section -->
    <?php
    include 'includes/footer.php';
    ?>
    <!-- Global Scripts-->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JS Front -->
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
    <script src="assets/vendor/leaflet/dist/leaflet.js"></script>
    <script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <!-- JS Front -->
    <script src="assets/js/hs.leaflet.js"></script>
    <script src="assets/js/hs.validation.js"></script>
    <!-- JS Implementing Plugins -->
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

    });
    </script>
    <script>
    $(document).on('ready', function() {
        // initialization of leaflet
        $('#mapExample2').each(function() {
            var leaflet = $.HSCore.components.HSLeaflet.init($(this)[0]);

            L.tileLayer(
                'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    id: 'mapbox/light-v9'
                }).addTo(leaflet);
        });

        // initialization of form validation
        $('.js-validate').each(function() {
            var validation = $.HSCore.components.HSValidation.init($(this));
        });
    });
    </script>
    <script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write(
        '<script src="assets/vendor/polifills.js"><\/script>');
    </script>
</body>

</html>