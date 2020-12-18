<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greensense | Yuktix</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/favicon.ico">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
    <link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsparallaxer.css">
    <link rel="stylesheet" href="assets/vendor/fancybox/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
    <!-- CSS Front Template -->
    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Header -->
    <?php
    include 'includes/header.php';
    ?>
    <!--Header end-->.
    <!-- Hero Section -->
    <div class="container space-top-2 space-top-md-4 space-top-lg-3">
        <div class="border-bottom">
            <div class="w-lg-75 text-center mx-lg-auto">
                <div class="mb-9">
                    <h1 class="display-4 mb-4">A better way to Monitor Your Farms</h1>
                    <p class="lead">Using Next Generation IoT Devices, Increase Yield & Reduce Losses</p>
                    <p>Become a Next Generation Farmer</p>
                </div>

                <div class="w-lg-75 mx-lg-auto">
                    <img class="img-fluid" src="assets/svg/illustrations/communicating-men.svg" alt="Image Description">
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->
    <!-- Features Section -->
    <div class="container space-2 text-center">
        <div class="mb-9">
            <h2 class="h1">What can you do with Greensense Devices?</h2>
        </div>

        <div class="position-relative pt-5 pb-3 pt-md-11 pb-md-7">
            <div class="position-relative z-index-2 p-2 p-sm-0">
                <!-- News Carousel -->
                <div class="js-slick-carousel slick slick-equal-height slick-gutters-3 mb-5"
                    data-hs-slick-carousel-options='{
             "slidesToShow": 3,
             "dots": true,
             "dotsClass": "slick-pagination slick-pagination-white d-lg-none mt-5",
             "responsive": [{
               "breakpoint": 1200,
                 "settings": {
                   "slidesToShow": 3
                 }
               }, {
               "breakpoint": 992,
               "settings": {
                 "slidesToShow": 2
                }
               }, {
               "breakpoint": 768,
               "settings": {
                 "slidesToShow": 2
                }
               }, {
               "breakpoint": 554,
               "settings": {
                 "slidesToShow": 1
               }
             }]
           }'>
                    <!-- Card Block -->
                    <div class="js-slide mt-1 mb-3">
                        <div class="card flex-wrap flex-row">
                            <div class="card-body py-6">
                                <h3 class="mb-5">40% Reduction in Water</h3>
                                <figure class="max-w-27rem w-100 mx-auto mb-4">
                                    <img class="img-fluid" src="assets/svg/illustrations/server-woman.svg"
                                        alt="Image Description">
                                </figure>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card Block -->
                    <!-- Card Block -->
                    <div class="js-slide mt-1 mb-3">
                        <div class="card flex-wrap flex-row">
                            <div class="card-body py-6">
                                <h3 class="mb-5">25% reduction in Pesticides</h3>
                                <figure class="max-w-27rem w-100 mx-auto mb-4">
                                    <img class="img-fluid" src="assets/svg/illustrations/full-stack.svg"
                                        alt="Image Description">
                                </figure>
                                <p> </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card Block -->
                    <!-- Card Block -->
                    <div class="js-slide mt-1 mb-3">
                        <div class="card flex-wrap flex-row">
                            <div class="card-body py-6">
                                <h3 class="mb-5">15-20% increase in Yield</h3>
                                <figure class="max-w-27rem w-100 mx-auto mb-4">
                                    <img class="img-fluid" src="assets/svg/illustrations/business-woman.svg"
                                        alt="Image Description">
                                </figure>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card Block -->
                </div>
                <!-- Info -->
                <p class="text-white">
                    See Yuktix Device in action.
                    <a class="text-white font-weight-bold" href="contact.php">
                        Get a Demo
                        <span class="btn btn-xs btn-icon btn-light rounded-circle ml-2">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </a>
                </p>
                <!-- End Info -->
            </div>
            <!-- Background -->
            <div class="bg-navy position-absolute top-0 right-0 bottom-0 left-0 rounded-lg mx-sm-7"
                style="background-image: url(assets/svg/components/abstract-shapes-20.svg);"></div>
        </div>
    </div>
    <!-- End Features Section -->
    <!-- Features Section -->
    <div class="container space-2">
        <div class="row align-items-lg-start">
            <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                <div class="mb-5">
                    <h2 class="mb-3">How Greensense Works</h2>
                    <p>Yuktix GreenSense is a collection of hardware and next generation AI based software to provide
                        user actionable data about his farm like</p>
                </div>
                <!-- Info -->
                <div class="media pt-3">
                    <span class="icon icon-xs icon-soft-indigo icon-circle mr-3">
                        <i class="fas fa-check"></i>
                    </span>
                    <div class="media-body">
                        <p class="text-dark mb-0">Irrigation Advisory</p>
                    </div>
                </div>
                <div class="media pt-3">
                    <span class="icon icon-xs icon-soft-indigo icon-circle mr-3">
                        <i class="fas fa-check"></i>
                    </span>
                    <div class="media-body">
                        <p class="text-dark mb-0">Disease Prediction</p>
                    </div>
                </div>
                <div class="media pt-3">
                    <span class="icon icon-xs icon-soft-indigo icon-circle mr-3">
                        <i class="fas fa-check"></i>
                    </span>
                    <div class="media-body">
                        <p class="text-dark mb-0">Weather Forecast</p>
                    </div>
                </div>
                <div class="media pt-3">
                    <span class="icon icon-xs icon-soft-indigo icon-circle mr-3">
                        <i class="fas fa-check"></i>
                    </span>
                    <div class="media-body">
                        <p class="text-dark mb-0">Fertilizer Recommendation</p>
                    </div>
                </div>
                <div class="media pt-3">
                    <span class="icon icon-xs icon-soft-indigo icon-circle mr-3">
                        <i class="fas fa-check"></i>
                    </span>
                    <div class="media-body">
                        <p class="text-dark mb-0">Image Analysis</p>
                    </div>
                </div>
                <!-- End Info -->
            </div>
            <div class="col-lg-7 order-lg-1">
                <!-- Card Block -->
                <img class="img-fluid rounded" src="assets/media/images/yuktixgreensense.jpg" alt="Image Description">

            </div>
        </div>
        <!-- End Card Block -->
    </div>
    <!-- End Features Section -->
    <!-- Features Section -->
    <div class="container space-2">
        <!-- Title -->
        <div class="w-lg-70 text-center mx-lg-auto mb-5">
            <h2 class="d-block font-weight-bold text-cap mb-2">What Information You will get about your
                farm?</h2>
        </div>
        <!-- End Title -->
        <!-- Features -->
        <div class="w-lg-60 mx-lg-auto mb-2">
            <div class="row mx-n2">
                <div class="col-sm-4 px-2 mb-3 mb-sm-0">
                    <!-- Icon Block -->
                    <div class="border-dashed text-center rounded p-4">
                        <figure class="w-100 max-w-8rem mx-auto mb-3">
                            <img class="img-fluid" src="assets/svg/icons/icon-37.svg" alt="SVG">
                        </figure>
                        <h2 class="h3 mb-1">Micro-Weather</h2>

                        <p class="font-size-1">Get micro-weather data and soil data from your farm in real time. </p>
                    </div>
                    <!-- End Icon Block -->
                </div>
                <div class="col-sm-4 px-2 mb-3 mb-sm-0">
                    <!-- Icon Block -->
                    <div class="border-dashed text-center rounded p-4">
                        <figure class="w-100 max-w-8rem mx-auto mb-3">
                            <img class="img-fluid" src="assets/svg/icons/icon-37.svg" alt="SVG">
                        </figure>
                        <h3 class="mb-1">Weather Forecast</h3>

                        <p class="font-size-1">Farm level and block level forecast delivered on your phone</p>
                    </div>
                    <!-- End Icon Block -->
                </div>
                <div class="col-sm-4 px-2">
                    <!-- Icon Block -->
                    <div class="border-dashed text-center rounded p-4">
                        <figure class="w-100 max-w-8rem mx-auto mb-3">
                            <img class="img-fluid" src="assets/svg/icons/icon-37.svg" alt="SVG">
                        </figure>
                        <h3 class="mb-1">Disease Prediction</h3>
                        <p class="font-size-1">Get advance notification about crop disease before they happen</p>
                    </div>
                    <!-- End Icon Block -->
                </div>
            </div>
            <div class="w-lg-60 mx-lg-auto mb-5 mt-2">
                <div class="row mx-n2">
                    <div class="col-sm-6 px-2 mb-3 mb-sm-0">
                        <!-- Icon Block -->
                        <div class="border-dashed text-center rounded p-4">
                            <figure class="w-100 max-w-8rem mx-auto mb-3">
                                <img class="img-fluid" src="assets/svg/icons/icon-37.svg" alt="SVG">
                            </figure>
                            <h2 class="h3 mb-1">Micro-Weather</h2>

                            <p class="font-size-1">Get micro-weather and soil data from your farm in real time. </p>
                        </div>
                        <!-- End Icon Block -->
                    </div>
                    <div class="col-sm-6 px-2 mb-3 mb-sm-0">
                        <!-- Icon Block -->
                        <div class="border-dashed text-center rounded p-4">
                            <figure class="w-100 max-w-8rem mx-auto mb-3">
                                <img class="img-fluid" src="assets/svg/icons/icon-37.svg" alt="SVG">
                            </figure>
                            <h3 class="mb-1">Weather Forecast</h3>

                            <p class="font-size-1">Farm level and block level forecast delivered on your phone</p>
                        </div>
                        <!-- End Icon Block -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Features -->
    </div>
    <!-- End Features Section -->
    <!-- Testimonials Section -->
    <div class="container space-1">
        <!-- Title -->
        <div class="w-md-100 w-lg-100 mb-5 mb-md-9 text-center">
            <h2 class="h1">Farmers, growers and plantations have trusted us.</h2>
        </div>
        <!-- End Title -->
        <!-- Testimonials Section -->
        <div class="row">
            <!-- Testimonials -->
            <div class="col-md-6 col-lg-4 mb-3 mb-md-5 mb-lg-0">
                <div class="card h-100">
                    <div class="card-body">
                        <ul class="list-inline text-warning">
                            <li class="list-inline-item mx-0">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="list-inline-item mx-0">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="list-inline-item mx-0">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="list-inline-item mx-0">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="list-inline-item mx-0">
                                <i class="fas fa-star"></i>
                            </li>
                        </ul>
                        <div class="mb-auto">
                            <p class="text-dark mb-0">“With Yuktix now i am able to monitor micro-weather, soil. I also
                                get weather updates in real time, irrigation advisory. Have reduced water usage in each
                                farm by 30% and production have improved by almost 50%. ”</p>
                        </div>
                    </div>

                    <div class="card-footer border-0 bg-transparent pt-0 px-5 pb-5">
                        <div class="media align-items-center">
                            <div class="avatar avatar-circle mr-3">
                                <img class="avatar-img" src="assets/media/images/manavatar.jpg" alt="Image Description">
                            </div>
                            <div class="media-body">
                                <h4 class="mb-0">Aruna Urs</h4>
                                <small class="d-block text-body">Farmer, Sakleshpur</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Testimonials -->
            <!-- Testimonials -->
            <div class="col-md-6 col-lg-4 mb-3 mb-md-5 mb-lg-0">
                <div class="card h-100">
                    <div class="card-body">
                        <ul class="list-inline text-warning">
                            <li class="list-inline-item mx-0">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="list-inline-item mx-0">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="list-inline-item mx-0">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="list-inline-item mx-0">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="list-inline-item mx-0">
                                <i class="fas fa-star"></i>
                            </li>
                        </ul>
                        <div class="mb-auto">
                            <p class="text-dark mb-0">“Earlier i didn't have a clue about when to irrigate. Irrigation
                                and rain play a important role in Guava cultivation. With Yuktix now i can monitor soil
                                moisture in multiple location as well as weather forecats.”</p>
                        </div>
                    </div>
                    <div class="card-footer border-0 bg-transparent pt-0 px-5 pb-5">
                        <div class="media align-items-center">
                            <div class="avatar avatar-circle mr-3">
                                <img class="avatar-img" src="assets/media/images/manavatar.jpg" alt="Image Description">
                            </div>
                            <div class="media-body">
                                <h4 class="mb-0">Shankar</h4>
                                <small class="d-block text-body">CEO - NTR Farms & KGF</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Testimonials -->
            <!-- Testimonials -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <ul class="list-inline text-warning">
                            <li class="list-inline-item mx-0">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="list-inline-item mx-0">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="list-inline-item mx-0">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="list-inline-item mx-0">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="list-inline-item mx-0">
                                <i class="fas fa-star"></i>
                            </li>
                        </ul>
                        <div class="mb-auto">
                            <p class="text-dark mb-0">"Yuktix GreenSense for Greenhouse allowed me to monitor
                                micro-weather inside my Greenhouse in COVID time, share it with my agronomist, get
                                advisory from him. It got the advisory implemented and saved my plants from Downy
                                Mildew" </p>
                        </div>
                    </div>
                    <div class="card-footer border-0 bg-transparent pt-0 px-5 pb-5">
                        <div class="media align-items-center">
                            <div class="avatar avatar-circle mr-3">
                                <img class="avatar-img" src="assets/media/images/manavatar.jpg" alt="Image Description">
                            </div>
                            <div class="media-body">
                                <h4 class="mb-0">Nitin Kumar</h4>
                                <small class="d-block text-body">Owner, NT Farms, Dodballapur</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Testimonials -->
        </div>
    </div>
    <!-- End Testimonials Section -->
    <!-- Gallery Section -->
    <div class="container">
        <!-- Title -->
        <div class="w-md-100 w-lg-100 mb-5 mb-md-9 text-center">
            <h2 class="h1">Crops we provide advisory for</h2>
        </div>
        <div class="row mx-n2">
            <div class="col-4 col-md px-2 mb-3">
                <div class="h-250rem bg-img-hero rounded" style="background-image: url(assets/media/images/1.jpg);">
                </div>
                <figcaption class="figure-caption text-center mt-2">Potato</figcaption>
            </div>
            <div class="col-md-4 d-md-block px-2 mb-3">
                <div class="h-250rem bg-img-hero rounded" style="background-image: url(assets/media/images/2.jpg);">
                </div>
                <figcaption class="figure-caption text-center mt-2">Tomato</figcaption>
            </div>
            <div class="col-4 col-md px-2 mb-3">
                <div class="h-250rem bg-img-hero rounded" style="background-image: url(assets/media/images/3.jpg);">
                </div>
                <figcaption class="figure-caption text-center mt-2">Capcicum</figcaption>
            </div>
            <div class="w-100"></div>
            <div class="col-6 col-md px-2 mb-3 mb-md-0">
                <div class="h-250rem bg-img-hero rounded" style="background-image: url(assets/media/images/4.jpg);">
                </div>
                <figcaption class="figure-caption text-center mt-2">Mango</figcaption>
            </div>
            <div class="col-md-4 d-md-block px-2 mb-3 mb-md-0">
                <div class="h-250rem bg-img-hero rounded" style="background-image: url(assets/media/images/5.jpg);">
                </div>
                <figcaption class="figure-caption text-center mt-2">Pomegranate</figcaption>
            </div>
            <div class="col-6 col-md px-2">
                <div class="h-250rem bg-img-hero rounded" style="background-image: url(assets/media/images/6.jpg);">
                </div>
                <figcaption class="figure-caption text-center mt-2">Tea</figcaption>
            </div>
            <div class="w-100"></div><br>
            <div class="col-md-4 d-md-block px-2 mb-3 mb-md-0">
                <div class="h-250rem bg-img-hero rounded" style="background-image: url(assets/media/images/8.jpg);">
                </div>
                <figcaption class="figure-caption text-center mt-2">Coffee</figcaption>
            </div>
            <div class="col-6 col-md px-2 mb-3 mb-md-0">
                <div class="h-250rem bg-img-hero rounded" style="background-image: url(assets/media/images/7.jpg);">
                </div>
                <figcaption class="figure-caption text-center mt-2">Guava</figcaption>
            </div>
            <div class="col-6 col-md px-2">
                <div class="h-250rem bg-img-hero rounded" style="background-image: url(assets/media/images/9.jpg);">
                </div>
                <figcaption class="figure-caption text-center mt-2">Coconut</figcaption>
            </div>
        </div>
    </div>
    <!-- End Gallery Section -->
    <div class="container space-2">
        <div class="w-md-100 w-lg-100 mb-5 mb-md-9 text-center">
            <h2 class="h1">Our Products</h2>
            <!-- Gallery Section -->
        </div>
        <div class="row mx-n2">
            <div class="col-4 col-md px-2 mb-3">
                <div class="h-250rem bg-img-hero rounded" style="background-image: url(assets/media/images/qw.jpg);">
                </div>
            </div>
            <div class="col-md-4 d-md-block px-2 mb-3">
                <div class="h-250rem bg-img-hero rounded" style="background-image: url(assets/media/images/qw1.png);">
                </div>
            </div>
            <div class="col-4 col-md px-2 mb-3">
                <div class="h-250rem bg-img-hero rounded" style="background-image: url(assets/media/images/qw2.jpg);">
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col-6 col-md px-2 mb-3 mb-md-0">
                <div class="h-250rem bg-img-hero rounded" style="background-image: url(assets/media/images/qw3.jpg);">
                </div>
            </div>
            <div class="col-md-4 d-md-block px-2 mb-3 mb-md-0">
                <div class="h-250rem bg-img-hero rounded" style="background-image: url(assets/media/images/qw4.png);">
                </div>
            </div>
            <div class="col-6 col-md px-2">
                <div class="h-250rem bg-img-hero rounded" style="background-image: url(assets/media/images/qw5.jpg);">
                </div>
            </div>
            <div class="w-100"></div>
            <br>
            <div class="col-6 col-md px-2 mb-3 mb-md-0">
                <div class="h-250rem bg-img-hero rounded" style="background-image: url(assets/media/images/qw6.jpg);">
                </div>
            </div>
            <div class="col-md-4 d-md-block px-2 mb-3 mb-md-0">
                <div class="h-250rem bg-img-hero rounded" style="background-image: url(assets/media/images/qw7.jpeg);">
                </div>
            </div>
            <div class="col-6 col-md px-2">
                <div class="h-250rem bg-img-hero rounded" style="background-image: url(assets/media/images/qw8.jpeg);">
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery Section -->
    </div>
    <!-- CTA Section -->
    <div class="container space-2">
        <div class="text-center py-6"
            style="background: url(assets/svg/components/abstract-shapes-19.svg) center no-repeat;">
            <h2>Find the right solution for your farm</h2>
            <p>Reach out to our Agriculture Specialist for Free Consultation</p>
            <span class="d-block mt-5">
                <a class="btn btn-primary transition-3d-hover" href="contact.php">Contact Now</a>
            </span>
        </div>
    </div>
    <!-- End CTA Section -->
    <!-- Footer -->
    <?php
    include 'includes/footer.php';
    ?>
    <!--Footer end-->
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
    <!-- JS Implementing Plugins -->
    <script src="assets/vendor/slick-carousel/slick/slick.js"></script>
    <!-- JS Front -->
    <script src="assets/js/hs.slick-carousel.js"></script>
    <!-- JS Plugins Init. -->
    <script>
    $(document).on('ready', function() {
        // initialization of slick carousel
        $('.js-slick-carousel').each(function() {
            var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
        });
    });
    </script>
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