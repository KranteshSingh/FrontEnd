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
    <?php include 'includes/tracking.inc'; ?>
</head>

<body>
    <?php
    include 'includes/header.php';
    ?>
    <!-- Hero Section -->
    <div class="bg-primary bg-img-hero" style="background-image: url(assets/svg/components/abstract-shapes-5.svg);">
        <div class="container space-2 space-lg-3">
            <div class="w-lg-65 text-center mx-lg-auto">
                <span class="badge badge-soft-light badge-pill font-size-1 py-3 px-4 mb-3">Sensor Catalog</span>
                <h1 class="text-white mb-0">Automatic Weather Station</h1>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->
    <br><br><br>
    <div class="position-relative u-gradient-half-primary-v3">
        <div class="container u-space-1-top u-space-1-top--md u-space-1-top--lg u-space-2-bottom">
            <div class="w-md-80 w-lg-50 text-center mx-auto mb-9">
                <h2 class="text-primary mt-2"><span class="font-weight-bold">Technical Specifications</span></h2>
            </div>
            <dl class="row u-bg-light-blue-50 border py-5 ">
                <dt class="col-sm-3 px-5 py-3">Rain</dt>
                <dd class="col-sm-9 px-5 py-3">
                    <p>
                        Tipping Bucket mechanism with Magnetic reed switch.<br>
                        Output is contact closure on 4-conductor 26 AWG cable.<br>
                        Collection area is 214 square cm.<br>
                        Accuracy: +/- 4% of total or one tip of the bucket (whichever is greater) for rain rates upto 2
                        inch/hour.<br>
                        For rain rates from 2 inch/hour to 4 inch/hour , +/- 5% of total or one tip of the bucket.<br>
                        Resolution: of 0.01 inch or 0.1 mm (adjustable).
                    </p>
                </dd>
                <dt class="col-sm-3 px-5 py-3">Pressure</dt>
                <dd class="col-sm-9 px-5 py-3">
                    <p>
                        Range is 300-1100 hPa,<br>
                        Resolution is 0.06 hPa to 0.02hPa.<br>
                        Operating range is -40C to 85C. Best results in 0C to 65C range.<br>
                        Long term stability is +/- 1 hPa/year.
                    </p>
                </dd>
                <dt class="col-sm-3 px-5 py-3">Temperature</dt>
                <dd class="col-sm-9 px-5 py-3">
                    <p>
                        Resolution is +/- 0.04 (min) to max +/- 0.01.<br>
                        Typical accuracy is +/- 0.3 (maximal is +/- 1.5) .<br>
                        Repeatability is (+/-) 0.1 celsius.<br>
                        Operating Range -40 to 123 Celsius.<br>
                        Long term drift is < 0.04 Celsius/year. </p>
                </dd>
                <dt class="col-sm-3 px-5 py-3">Relative Humidity</dt>
                <dd class="col-sm-9 px-5 py-3">
                    <p>
                        Resolution is 0.4 (min), 0.05 (typical) and 0.05 (max) in percentage.<br>
                        Accuracy is (+/-) 2% (typical) to maximal +/- 4%.<br>
                        Repeatability is +/- 0.1%.<br>
                        Response time is 8 seconds.<br>
                        Operating Range 0-100% RH.<br>
                        Long term drift is < 0.5 RH%/year. </p>
                </dd>
                <dt class="col-sm-3 px-5 py-3">Wind Speed</dt>
                <dd class="col-sm-9 px-5 py-3">
                    <p>
                        Range: 1 to 200 mph, 1 to 173 knots ,0.5 to 89m/s, 1 to 322 km/h.<br>
                        Accuracy: ±2mph ( 3km/h, 1m/s) or ±5 %,whichever is greater.<br>
                        Resolution is 1mph (1knot, 0.1m/s, 1km/hr)
                    </p>
                </dd>
                <dt class="col-sm-3 px-5 py-3">Wind Direction</dt>
                <dd class="col-sm-9 px-5 py-3">
                    <p>
                        Range: 0°to 360°or 16 compass points.<br>
                        Accuracy: +/- 7 degrees.<br>
                        Resolution: 1 degree. 22.5 degrees between compass points.
                    </p>
                </dd>
                <dt class="col-sm-3 px-5 py-3">Solar Radiation Sensor</dt>
                <dd class="col-sm-9 px-5 py-3">
                    <p>
                        Range: 0-1800 W/m^2<br>
                        Drift: upto +/- 2% /year<br>
                        Accuracy: +/- 5% of Full scale<br>
                        Operating Temperature: -40 -65C<br>
                        Spectral response: 400-1100 nm
                    </p>
                </dd>
                <dt class="col-sm-3 px-5 py-3">Leaf wetness</dt>
                <dd class="col-sm-9 px-5 py-3">
                    <p>
                        Measurement time 10 ms<br>
                        Operating environment: -10°C to 60°C<br>
                        No Painting required<br>
                        Detects presence or absence of wetness
                    </p>
                </dd>
                <dt class="col-sm-3 px-5 py-3">Soil Moisture and Temperature</dt>
                <dd class="col-sm-9 px-5 py-3">
                    <p>
                        Range: Dielectric permittivity 1-80<br>
                        can be calibrated for mineral soil, Potting soil, Rockwool and perlite<br>
                        Temperature -40 to 50C with resolution 0.1C<br>
                        50-110C with resolution 0.5C<br>
                        Accuracy: +/- 1 from 1-40, +/- 15% from 40-80<br>
                        Resolution: dielectric permittivity : 0.1 from 1-20, < 0.75 from 20-80<br>
                            temperature: 0.1C
                    </p>
                </dd>
                <dt class="col-sm-3 px-5 py-3">CO sensor SKU YCOA</dt>
                <dd class="col-sm-9 px-5 py-3">
                    <p>
                        CO sensor<br>
                        Range: 0-300 ppm<br>
                        Accuracy: +/- 3ppm<br>
                        Repeatability: +/- 3% of reading
                        Long term output drift: <5% signal loss/year <br>
                            Response: t(90) < 50 seconds<br>
                                Operating:
                                -10C to 50C
                                Mounting 1.5m-1.8, above floor<br>
                                Humidity: 15-90% non-condensing
                    </p>
                </dd>
                <dt class="col-sm-3 px-5 py-3">CO sensor SKU YCOB</dt>
                <dd class="col-sm-9 px-5 py-3">
                    <p>
                        YCO2 CO sensor<br>
                        Range: 0-1000 ppm<br>
                        Repeatability: +/- 1% of reading<br>
                        Response time: < 15 seconds<br>
                            Accuracy: +/- 1ppm<br>
                            Operating environment:
                            -40C to 70C
                            0-100% RH
                    </p>
                </dd>
                <dt class="col-sm-3 px-5 py-3">CO2 sensor</dt>
                <dd class="col-sm-9 px-5 py-3">
                    <p>
                        NDIR sensor<br>
                        Range: 0-2000ppm<br>
                        Repeatability: +/- 1% of reading<br>
                        Accuracy: +/- 3% reading<br>
                        Long term drift: < +/- 10ppm/year <br>
                            Response time: < 10 sec<br>
                                Operating environment: 0-50C
                    </p>
                </dd>
                <dt class="col-sm-3 px-5 py-3">Suspended Particles (PM) or Dust sensor</dt>
                <dd class="col-sm-9 px-5 py-3">
                    <p>
                        particle size: approx. 1um (min.) - 10 um,<br>
                        Range: concentration 0-28000 pcs/Litre or 8000 pcs/ 0.01CF<br>
                        Operating condition: 0-45C, < 95% RH Max </p>
                </dd>
                <dt class="col-sm-3 px-5 py-3">Ambient Noise</dt>
                <dd class="col-sm-9 px-5 py-3">
                    <p>
                        A-weighted average & Peak output<br>
                        Bandwidth: 20Hz - 20Khz ( -3db BANDWIDTH )<br>
                        S/N Ratio : -90 db<br>
                        Distortion : 0.01%
                    </p>
                </dd>
                <dt class="col-sm-3 px-5 py-3">NO2 (Nitrogen Dioxide) Sensor</dt>
                <dd class="col-sm-9 px-5 py-3">
                    <p>
                        Range: 0-20 ppm<br>
                        Repeatability: +/- 3% of reading<br>
                        Response: < 15s typical<br>
                            Operating range: -40 to 50C, 0-100% RH
                    </p>
                </dd>
                <dt class="col-sm-3 px-5 py-3">SO2 (Sulphur Dioxide) Sensor</dt>
                <dd class="col-sm-9 px-5 py-3">
                    <p>
                        Range: 0-20 ppm<br>
                        Repeatability: +/- 3% of reading<br>
                        Response: < 15s typical<br>
                            Operating range: -30 to 50C, 0-100% RH
                    </p>
                </dd>
                <dt class="col-sm-3 px-5 py-3">Ozone (O3) Sensor</dt>
                <dd class="col-sm-9 px-5 py-3">
                    <p>
                        Range: 0-20 ppm<br>
                        Repeatability: +/- 3% of reading<br>
                        Response: < 15s typical<br>
                            Operating range: -30 to 50C, 0-100% RH
                    </p>
                </dd>
            </dl>
        </div>
    </div>
    <br><br><br>
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