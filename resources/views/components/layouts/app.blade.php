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
    <title>فطين</title>

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
                                <a class="nav-link" href="{{ route('chat.show') }}">تحدث مع فطين</a>
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
