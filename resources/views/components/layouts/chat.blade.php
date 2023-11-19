<!DOCTYPE html>
<html lang="ar" dir="rtl">

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
<section class="chatting-wrapper pt-0">
    <nav class="navbar navbar-expand-md p-0">
        <button class="navbar-toggler d-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#mainnavbarNav" aria-controls="mainnavbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
            <i class="iconsax" data-icon="text-align-justify"></i>
        </button>
        <div class="collapse navbar-collapse" id="mainnavbarNav">
            <div class="menu-panel">
                <button data-bs-toggle="collapse" data-bs-target="#mainnavbarNav"
                        class="mainnav-close d-block d-md-none"><i class="iconsax" data-icon="close-circle"></i>
                </button>
                <a href="{{ route('home') }}" class="logo-icon d-none d-md-flex">
                    <img src="{{ asset('assets/images/fateen-white.png') }}" class="img-fluid w-50">
                </a>
                <ul class="nav nav-tabs menu-wrapper" id="myTab" role="tablist">
                    <li data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Chat" class="nav-item"
                        role="presentation">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#chat" type="button"
                                role="tab" aria-controls="chat" aria-selected="true"><i class="iconsax"
                                                                                        data-icon="messages-2"></i>
                            <span>Chat</span> </button>
                    </li>
                    <li data-bs-toggle="tooltip" data-bs-placement="right" >
                        <a class="nav-link" href="{{ route('home') }}" >
                            <i class="iconsax" data-icon="refresh-circle"></i>
                            <span>رجوع</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="chat" role="tabpanel" aria-labelledby="chat" tabindex="0">
            <div class="main-wrapper">
        {{ $slot }}
            </div>
        </div>
    </div>

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

<!-- iconsax js -->
<script src="{{ asset('assets/js/iconsax.js') }}"></script>

<!-- chat page js -->
<script src="{{ asset('assets/js/chat-page.js') }}"></script>

<!-- iconsax js -->
<script src="{{ asset('assets/js/chatting.js') }}"></script>

<!-- Theme js-->
<script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>
