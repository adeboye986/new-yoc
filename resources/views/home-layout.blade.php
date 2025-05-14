<!DOCTYPE html>
<html lang="zxx" class="theme-light">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/dark-style.css') }}">

        <title>@yield('title')</title>

        <meta name="keywords" content="Premium Laundry Services, Dry Cleaning Services, Fabric Care Nigeria, Clothing Care Nigeria, Garment Care Experts, Professional Laundry Nigeria, Fabric Cleaning Solutions, High-Quality Laundry Services, Specialized Clothing Care, Delicate Fabric Cleaning, Stain Removal Services, Eco-Friendly Laundry, Premium Dry Cleaning, Laundry Pickup and Delivery, Fresh and Clean Garments">

        <link rel="icon" type="image/svg" href="{{ asset('assets/img/favicon.png') }}">
    </head>

    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="shadow"></div>
            <div class="box"></div>
        </div>
    </div>

    <body>

        <header>
         <!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="luvion-responsive-nav">
        <div class="container">
            <div class="luvion-responsive-menu">
                <div class="logo">
                    <a href="index-4.html">
                        <img src="assets/img/logoo.png" alt="logo">
                        <img src="assets/img/logoo.png" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="luvion-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index-6.html">
                    <img src="assets/img/logoo.png" alt="logo">
                    <img src="assets/img/logoo.png" alt="logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>

                        <li class="nav-item"><a href="/about" class="nav-link">About Us</a></li>

                        <!-- <li class="nav-item"><a href="#" class="nav-link">Products<i class="fas fa-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="features-1.html" class="nav-link">Loans</a></li>

                                        <li class="nav-item"><a href="features-2.html" class="nav-link">Savings & Investments</a></li>

                                        <li class="nav-item"><a href="features-2.html" class="nav-link">Bills Payment</a></li>
                                    </ul>
                                </li> -->

                        <li class="nav-item"><a href="/services" class="nav-link">Services</a>
                            <!-- <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="features-1.html" class="nav-link">Business as a Service</a></li>
                                    </ul> -->
                        </li>

                        <li class="nav-item"><a href="#" class="nav-link">Resources <i
                                    class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">

                                <li class="nav-item"><a href="/team" class="nav-link">Team</a></li>

                                <li class="nav-item"><a href="/faq" class="nav-link">FAQs</a></li>

                                <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a href="/contact" class="nav-link">Contact Us</a></li>
                    </ul>

                    <!-- <div class="others-options">
                                <a href="login.html" class="login-btn"><i class="flaticon-user"></i> Log In</a>
                            </div> -->
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->
        </header>
        <main>
            @yield('content')
        </main>

         <!-- Start Footer Area -->
<footer class="footer-area footer-style-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-footer-widget">
                    <div class="logo">
                        <a href="index.html" class="white-logo"><img src="assets/img/logoo.png" alt="logo"></a>
                        <p>Trusted advisors in accounting, tax, assurance, and data protection compliance.</p>
                    </div>

                    <ul class="social-links">
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com/" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-footer-widget">
                    <h3>Company</h3>

                    <ul class="list">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="blog.html">Latest News</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-footer-widget">
                    <h3>Support</h3>

                    <ul class="list">
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-footer-widget">
                    <h3>Address</h3>

                    <ul class="footer-contact-info">
                        <li><span>Location:</span> Elewura, SW9/780A PDOA House, Baale Street, Challenge, Oluyole,
                            Ibadan 200273, Oyo</li>
                        <li><span>Email:</span> <a href="mailto:hello@luvion.com">hello@gap-finance.com</a></li>
                        <li><span>Phone:</span> <a href="tel:+321984754">+ (321) 984 754</a></li>
                        <li><span>Fax:</span> <a href="tel:+12129876543">+1-212-9876543</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="copyright-area">
            <p>Copyright @
                <script>document.write(new Date().getFullYear())</script> <a href="https://yocn.ng/" target="_blank">
                    Yemi Odebunmi & Co.</a>
            </p>
        </div>
    </div>

    <div class="map-image"><img src="assets/img/map.png" alt="map"></div>
</footer>
<!-- End Footer Area -->

<!--=== Start Go Top Button ===-->
<div class="go-top">
    <i class="fas fa-arrow-up"></i>
</div>
<!--=== End Go Top Button ===-->

<!-- Dark/Light Toggle -->
<div class="dark-version">
    <label id="switch" class="switch">
        <input type="checkbox" onchange="toggleTheme()" id="slider">
        <span class="slider round"></span>
    </label>
</div>

    <!-- Links of JS files -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/appear.min.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
