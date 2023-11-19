<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="megabot">
    <meta name="keywords" content="megabot">
    <meta name="author" content="megabot">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon" />
    <title>Megabot</title>

    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">


    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/remixicon.css') }}">

    <!-- iconsax css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/iconsax.css') }}" />

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/aos.css') }}">

    <!-- swiper slider css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/swiper-bundle.min.css') }}" />

    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">



</head>

<body>

<!-- header start -->
<header class="align-content-center">

    <button class="navbar-toggler d-xl-none navbar-menu-button" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#primaryMenu">
            <span class="navbar-toggler-icon">
                <i class="iconsax" data-icon="text-align-justify"></i>
            </span>
    </button>
    <div class="d-flex justify-content-between">
        <a href="index.html">
            <img src="{{ asset('assets/images/fateen-white.png') }}" class="img-fluid" alt="logo">
        </a>
        <nav class="header-nav-middle  ">
            <div class="main-nav navbar navbar-expand-xl me-5 navbar-light navbar-sticky">
                <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
                    <div class="offcanvas-header navbar-shadow">
                        <h5 class="mb-0">الرجوع</h5>
                        <button class="btn-close lead "  style="color: white;"  type="button" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('home') }}">الرئيسية</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('chat.show') }}" wire:navigate>Chat</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="service.html">service</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="pricing.html">pricing</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact-us.html">contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>

</header>
<!-- header end -->

{{ $slot }}

<!-- footer section start-->
<footer>
    <div class="container">
        <div class="footer-row">
            <div class="footer-main">
                <a href="index.html#" class="footer-logo"><img src="{{ asset('assets/images/logo.svg') }}" class="img-fluid" alt=""></a>
                <h3>SUBSCRIBE TO OUR NEWSLETTER</h3>
                <form>
                    <div class="input-group">
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                               placeholder="Enter your mail">
                        <a href="index.html" data-cursor="pointer" class="btn-basic">Subscribe</a>
                    </div>
                </form>
                <ul class="social-links">
                    <li><a data-cursor="pointer" href="https://www.facebook.com/"><img
                                src="{{ asset('assets/svg/social/fb.svg') }}" class="img-fluid" alt="facebook"></a></li>
                    <li><a data-cursor="pointer" href="https://in.linkedin.com/"><img
                                src="{{ asset('assets/svg/social/linkedin.svg') }}" class="img-fluid" alt="linkedin"></a></li>
                    <li><a data-cursor="pointer" href="https://www.instagram.com/"><img
                                src="{{ asset('assets/svg/social/insta.svg') }}" class="img-fluid" alt="insta"></a></li>
                    <li><a data-cursor="pointer" href="https://twitter.com/login"><img
                                src="{{ asset('assets/svg/social/twitter.svg') }}" class="img-fluid" alt="twitter"></a></li>
                </ul>
            </div>
            <div class="link-section">
                <div class="footer-title">
                    <img src="{{ asset('assets/svg/star.svg') }}" class="img-fluid" alt="star">
                    Quick Link
                </div>
                <div class="footer-content">
                    <ul>
                        <li><a data-cursor="pointer" href="index.html">Home</a></li>
                        <li><a data-cursor="pointer" href="service.html">Service</a></li>
                        <li><a data-cursor="pointer" href="pricing.html">Pricing</a></li>
                        <li><a data-cursor="pointer" href="contact-us.html">Contact us</a></li>
                    </ul>
                </div>
            </div>
            <div class="link-section">
                <div class="footer-title">
                    <img src="{{ asset('assets/svg/star.svg') }}" class="img-fluid" alt="star">
                    Our service
                </div>
                <div class="footer-content">
                    <ul>
                        <li><a data-cursor="pointer" href="chat.html">Generate</a></li>
                        <li><a data-cursor="pointer" href="chat.html">Find Image</a></li>
                        <li><a data-cursor="pointer" href="chat.html">Email writer</a></li>
                        <li><a data-cursor="pointer" href="chat.html">Social media</a></li>
                    </ul>
                </div>
            </div>
            <div class="link-section">
                <div class="footer-title">
                    <img src="{{ asset('assets/svg/star.svg') }}" class="img-fluid" alt="star">
                    Our company
                </div>
                <div class="footer-content">
                    <ul>
                        <li><a data-cursor="pointer" href="login.html">Login</a></li>
                        <li><a data-cursor="pointer" href="blog-listing.html">Blog listing</a></li>
                        <li><a data-cursor="pointer" href="blog-grid.html">Blog Grid</a></li>
                        <li><a data-cursor="pointer" href="blog-details.html">Blog Details</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <h4>@2023 All the Copyright Reserved.</h4>
            <ul class="footer-links">
                <li><a href="terms.html">Privacy Policy </a></li>
                <li><a href="terms.html">Terms & Condition </a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- footer section end-->


<!-- Tap To Top Button Start -->
<div class="tap-to-top-box hide">
    <button class="tap-to-top-button"><i class="iconsax" data-icon="chevron-up"></i></button>
</div>
<!-- Tap To Top Button End -->


<!--custom cursor start  -->
<div id="cursor"></div>
<div id="cursor-border"></div>
<!--custom cursor start  -->


<!-- Bootstrap js-->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<!-- slider js-->
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/custom-slider.js') }}"></script>

<!-- custom cursor -->
<script src="{{ asset('assets/js/custom-cursor.js') }}"></script>

<!-- aos animation -->
<script src="{{ asset('assets/js/aos.js') }}"></script>
<script src="{{ asset('assets/js/custom-aos.js') }}"></script>

<!-- iconsax js -->
<script src="{{ asset('assets/js/iconsax.js') }}"></script>

<!-- laptop animation js -->
<script src="{{ asset('assets/js/home-animation.js') }}"></script>

<!-- header sticky js -->
<script src="{{ asset('assets/js/header_sticky.js') }}"></script>

<!-- pricing js -->
<script src="{{ asset('assets/js/pricing-table.js') }}"></script>

<!-- Theme js-->
<script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>
