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
    <title>Megabot</title>

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
                <a href="index.html" class="logo-icon d-none d-md-flex">
                    <img src="{{ asset('assets/svg/logo-icon.svg') }}" class="img-fluid">
                </a>
                <ul class="nav nav-tabs menu-wrapper" id="myTab" role="tablist">
                    <li data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Chat" class="nav-item"
                        role="presentation">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#chat" type="button"
                                role="tab" aria-controls="chat" aria-selected="true"><i class="iconsax"
                                                                                        data-icon="messages-2"></i>
                            <span>Chat</span> </button>
                    </li>
                    <li data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="History" class="nav-item"
                        role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#history" type="button"
                                role="tab" aria-controls="history" aria-selected="false"><i class="iconsax"
                                                                                            data-icon="refresh-circle"></i>
                            <span>History</span> </button>
                    </li>
                    <li data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Subscription"
                        class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#subscription" type="button"
                                role="tab" aria-controls="subscription" aria-selected="false"><i class="iconsax"
                                                                                                 data-icon="crown-2"></i> <span>Subscription</span></button>
                    </li>
                    <li data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Help" class="nav-item"
                        role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#help" type="button"
                                role="tab" aria-controls="help" aria-selected="false"><i class="iconsax" data-icon="question-message
                                "></i> <span>Help</span> </button>
                    </li>
                    <li data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Ratings" class="nav-item"
                        role="presentation">
                        <button type="button" class="btn btn-primary nav-link" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop"><i class="iconsax" data-icon="star"></i> <span>
                                    Rating
                                </span>
                        </button>
                    </li>
                    <li data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Settings" class="nav-item"
                        role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#settings" type="button"
                                role="tab" aria-controls="settings" aria-selected="false"><i class="iconsax"
                                                                                             data-icon="setting-1"></i><span>Setting</span></button>
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
        <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history" tabindex="0">
            <div class="main-wrapper p-0">
                <div class="fixed-header">
                    <div class="d-flex align-items-center gap-2">
                        <button class="navbar-toggler d-md-none d-block" type="button" data-bs-toggle="collapse"
                                data-bs-target="#mainnavbarNav" aria-controls="mainnavbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <i class="iconsax" data-icon="text-align-justify"></i>
                        </button>
                        <a href="index.html" class="logo-icon d-flex d-md-none">
                            <img src="{{ asset('assets/svg/logo-icon.svg') }}" class="img-fluid">
                        </a>
                        <h3>History</h3>
                    </div>
                    <a class="premium-btn" data-cursor="pointer" href="chat.html"><i class="iconsax" data-icon="crown-2"></i>
                        Get
                        <span>premium</span></a>
                </div>
                <div class="main-section">
                    <div class="container card p-0">
                        <div class="card-header">
                            <h3 class="text-white">Detailed History</h3>
                            <form class="auth-form d-none d-md-block">
                                <div class="form-group">
                                    <i class="iconsax" data-icon="search-normal-2"></i>
                                    <input type="search" class="form-control" placeholder="Search here">
                                </div>
                            </form>
                        </div>
                        <div class="card-body px-sm-4 px-3">
                            <ul class="history-sec">
                                <li class="history-main">
                                    <div class="history-detail text-truncate">
                                        <i class="iconsax" data-icon="message-text"></i>
                                        <div>
                                            <p>What is app development ?</p>
                                            <p class="d-sm-none d-inline-block">2 min ago</p>
                                        </div>
                                    </div>
                                    <div class="history-time d-sm-flex d-none">
                                        <ul>
                                            <li>Chat</li>
                                            <li>2 min ago</li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="history-main">
                                    <div class="history-detail text-truncate">
                                        <i class="iconsax" data-icon="message-text"></i>
                                        <div>
                                            <p>Dino has sent you message.</p>
                                            <p class="d-sm-none d-inline-block">50 min ago</p>
                                        </div>
                                    </div>
                                    <div class="history-time d-sm-flex d-none">
                                        <ul>
                                            <li>Image</li>
                                            <li>50 min ago</li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="history-main">
                                    <div class="history-detail text-truncate">
                                        <i class="iconsax" data-icon="message-text"></i>
                                        <div>
                                            <p>Marvel has sent you an image.</p>
                                            <p class="d-sm-none d-inline-block">Yesterday</p>
                                        </div>
                                    </div>
                                    <div class="history-time d-sm-flex d-none">
                                        <ul>
                                            <li>Personal</li>
                                            <li>Yesterday</li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="history-main">
                                    <div class="history-detail text-truncate">
                                        <i class="iconsax" data-icon="message-text"></i>
                                        <div>
                                            <p>Wishes of father’s day</p>
                                            <p class="d-sm-none d-inline-block">26 Mar, 2023</p>
                                        </div>
                                    </div>
                                    <div class="history-time d-sm-flex d-none">
                                        <ul>
                                            <li>Translation</li>
                                            <li>26 Mar, 2023</li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="history-main">
                                    <div class="history-detail text-truncate">
                                        <i class="iconsax" data-icon="message-text"></i>
                                        <div>
                                            <p>Marvel has sent you an image.</p>
                                            <p class="d-sm-none d-inline-block">25 Mar, 2023</p>
                                        </div>
                                    </div>
                                    <div class="history-time d-sm-flex d-none">
                                        <ul>
                                            <li>Social media</li>
                                            <li>25 Mar, 2023</li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="history-main">
                                    <div class="history-detail text-truncate">
                                        <i class="iconsax" data-icon="message-text"></i>
                                        <div>
                                            <p>“How are you ?” Translate it</p>
                                            <p class="d-sm-none d-inline-block"> 25 Mar, 2023</p>
                                        </div>
                                    </div>
                                    <div class="history-time d-sm-flex d-none">
                                        <ul>
                                            <li>Essay writing</li>
                                            <li> 25 Mar, 2023</li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="history-main">
                                    <div class="history-detail text-truncate">
                                        <i class="iconsax" data-icon="message-text"></i>
                                        <div>
                                            <p>Include a hashtag in your caption for the goa photo and some music
                                                suggestions.</p>
                                            <p class="d-sm-none d-inline-block">25 Mar, 2023</p>
                                        </div>
                                    </div>
                                    <div class="history-time d-sm-flex d-none">
                                        <ul>
                                            <li>Chat</li>
                                            <li>25 Mar, 2023</li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="history-main">
                                    <div class="history-detail text-truncate">
                                        <i class="iconsax" data-icon="message-text"></i>
                                        <div>
                                            <p>Write essay about “Cow”</p>
                                            <p class="d-sm-none d-inline-block">23 Mar, 2023</p>
                                        </div>
                                    </div>
                                    <div class="history-time d-sm-flex d-none">
                                        <ul>
                                            <li>Image</li>
                                            <li>23 Mar, 2023</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="subscription" role="tabpanel" aria-labelledby="subscription" tabindex="0">
            <div class="main-wrapper p-0">
                <div class="fixed-header">
                    <div class="d-flex align-items-center gap-2">
                        <button class="navbar-toggler d-md-none d-block" type="button" data-bs-toggle="collapse"
                                data-bs-target="#mainnavbarNav" aria-controls="mainnavbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <i class="iconsax" data-icon="text-align-justify"></i>
                        </button>
                        <a href="index.html" class="logo-icon d-flex d-md-none">
                            <img src="{{ asset('assets/svg/logo-icon.svg') }}" class="img-fluid">
                        </a>
                        <h3>Subscription</h3>
                    </div>
                    <a class="premium-btn" data-cursor="pointer" href="chat.html"><i class="iconsax" data-icon="crown-2"></i>
                        Get
                        <span>premium</span></a>
                </div>
                <div class="main-section">
                    <div class="container card p-0">
                        <div class="card-header">
                            <h3 class="text-white">Choose Period of Plan :</h3>
                            <div class="header-option d-none d-md-flex">
                                <label for="currency" class="form-label text-white">Currency :</label>
                                <select class="form-select" aria-label="Default select example" id="currency">
                                    <option selected>Us Dollar</option>
                                    <option value="1">Euro</option>
                                    <option value="2">Yuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-body px-sm-4 px-3">
                            <div class="row justify-content-center">
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="card inner-card">
                                        <div class="card-header">
                                            <img src="{{ asset('assets/svg/pricing/weekly.svg') }}" class="img-fluid" alt="">
                                            <h4 class="text-white mb-0">Weekly Plan</h4>
                                        </div>
                                        <div class="card-body">
                                            <h3>$3.99 only/-</h3>
                                            <ul>
                                                <li>Intelligent AI chatbot</li>
                                                <li>Unlimited answer of question</li>
                                                <li>Avoid buying coin forever</li>
                                                <li>No ad in background</li>
                                                <li>Early access to new features</li>
                                            </ul>
                                            <button class="select-plan ">
                                                <i class="iconsax" data-icon="thick-arrow-right"></i>
                                                Select this plan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="card inner-card">
                                        <div class="card-header">
                                            <img src="{{ asset('assets/svg/pricing/monthly.svg') }}" class="img-fluid" alt="">
                                            <h4 class="text-white mb-0">Monthly Plan</h4>
                                        </div>
                                        <div class="card-body">
                                            <h3>$3.99 only/-</h3>
                                            <ul>
                                                <li>Intelligent AI chatbot</li>
                                                <li>Unlimited answer of question</li>
                                                <li>Avoid buying coin forever</li>
                                                <li>No ad in background</li>
                                                <li>Early access to new features</li>
                                            </ul>
                                            <button class="no-select-plan select-plan">
                                                <i class="iconsax" data-icon="thick-arrow-right"></i>
                                                Select this plan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="card inner-card">
                                        <div class="card-header">
                                            <img src="{{ asset('assets/svg/pricing/yearly.svg') }}" class="img-fluid" alt="">
                                            <h4 class="text-white mb-0">Lifetime Plan</h4>
                                        </div>
                                        <div class="card-body">
                                            <h3>$3.99 only/-</h3>
                                            <ul>
                                                <li>Intelligent AI chatbot</li>
                                                <li>Unlimited answer of question</li>
                                                <li>Avoid buying coin forever</li>
                                                <li>No ad in background</li>
                                                <li>Early access to new features</li>
                                            </ul>
                                            <button class="no-select-plan select-plan">
                                                <i class="iconsax" data-icon="thick-arrow-right"></i>
                                                Select this plan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="subscription-continue">
                                <button class="no-select-plan select-plan">Continue</button>
                                <a href="chat.html#" class="text-white">
                                    Continue with limited version
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="help" role="tabpanel" aria-labelledby="help" tabindex="0">
            <div class="main-wrapper p-0">
                <div class="fixed-header">
                    <div class="d-flex align-items-center gap-2">
                        <button class="navbar-toggler d-md-none d-block" type="button" data-bs-toggle="collapse"
                                data-bs-target="#mainnavbarNav" aria-controls="mainnavbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <i class="iconsax" data-icon="text-align-justify"></i>
                        </button>
                        <a href="index.html" class="logo-icon d-flex d-md-none">
                            <img src="{{ asset('assets/svg/logo-icon.svg') }}" class="img-fluid">
                        </a>
                        <h3>FAQ</h3>
                    </div>
                    <a class="premium-btn" data-cursor="pointer" href="chat.html"><i class="iconsax" data-icon="crown-2"></i>
                        Get
                        <span>premium</span></a>
                </div>
                <div class="faq-section main-section">
                    <div class="container card p-0">
                        <div class="card-header">
                            <h3 class="text-white title-basic aos-init aos-animate" data-aos="fade-up"
                                data-aos-duration="1000" data-aos-delay="100">FAQ</h3>
                        </div>
                        <div class="card-body px-sm-4 px-3">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item aos-init aos-animate" data-aos="fade-up"
                                     data-aos-duration="1000" data-aos-delay="200">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                        <button data-cursor="pointer" class="accordion-button" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                                                aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                            Is the content unique?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                         aria-labelledby="panelsStayOpen-headingOne">
                                        <div class="accordion-body">
                                            <p>Yes. The AI generates 95% of the material, which is unique and
                                                creative.
                                                We also give a
                                                uniqueness score for longer form material created, so you can be
                                                assured
                                                that the stuff
                                                you got is unique.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item aos-init aos-animate" data-aos="fade-up"
                                     data-aos-duration="1000" data-aos-delay="300">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                        <button data-cursor="pointer" class="accordion-button collapsed"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                                aria-controls="panelsStayOpen-collapseTwo">
                                            How can I boost my traffic with Copy matic?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                         aria-labelledby="panelsStayOpen-headingTwo">
                                        <div class="accordion-body">
                                            <strong>This is the second item's accordion body.</strong> It is hidden
                                            by
                                            default, until
                                            the collapse plugin adds the appropriate classes that we use to style
                                            each
                                            element. These
                                            classes control the overall appearance, as well as the showing and
                                            hiding
                                            via CSS
                                            transitions. You can modify any of this with custom CSS or overriding
                                            our
                                            default variables.
                                            It's also worth noting that just about any HTML can go within the
                                            <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item aos-init aos-animate" data-aos="fade-up"
                                     data-aos-duration="1000" data-aos-delay="400">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                        <button data-cursor="pointer" class="accordion-button collapsed"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                                aria-controls="panelsStayOpen-collapseThree">
                                            How long would it take to write an article with AI?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                         aria-labelledby="panelsStayOpen-headingThree">
                                        <div class="accordion-body">
                                            <strong>This is the third item's accordion body.</strong> It is hidden
                                            by
                                            default, until the
                                            collapse plugin adds the appropriate classes that we use to style each
                                            element. These
                                            classes control the overall appearance, as well as the showing and
                                            hiding
                                            via CSS
                                            transitions. You can modify any of this with custom CSS or overriding
                                            our
                                            default variables.
                                            It's also worth noting that just about any HTML can go within the
                                            <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item aos-init aos-animate" data-aos="fade-up"
                                     data-aos-duration="1000" data-aos-delay="500">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                        <button data-cursor="pointer" class="accordion-button collapsed"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                                aria-controls="panelsStayOpen-collapseFour">
                                            Is it beneficial to a digital marketer or a content writer?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                                         aria-labelledby="panelsStayOpen-headingFour">
                                        <div class="accordion-body">
                                            <strong>This is the third item's accordion body.</strong> It is hidden
                                            by
                                            default, until the
                                            collapse plugin adds the appropriate classes that we use to style each
                                            element. These
                                            classes control the overall appearance, as well as the showing and
                                            hiding
                                            via CSS
                                            transitions. You can modify any of this with custom CSS or overriding
                                            our
                                            default variables.
                                            It's also worth noting that just about any HTML can go within the
                                            <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item aos-init aos-animate" data-aos="fade-up"
                                     data-aos-duration="1000" data-aos-delay="600">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                                        <button data-cursor="pointer" class="accordion-button collapsed"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                                                aria-controls="panelsStayOpen-collapseFive">
                                            What languages do you support?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                                         aria-labelledby="panelsStayOpen-headingFive">
                                        <div class="accordion-body">
                                            <strong>This is the third item's accordion body.</strong> It is hidden
                                            by
                                            default, until the
                                            collapse plugin adds the appropriate classes that we use to style each
                                            element. These
                                            classes control the overall appearance, as well as the showing and
                                            hiding
                                            via CSS
                                            transitions. You can modify any of this with custom CSS or overriding
                                            our
                                            default variables.
                                            It's also worth noting that just about any HTML can go within the
                                            <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item aos-init aos-animate" data-aos="fade-up"
                                     data-aos-duration="1000" data-aos-delay="700">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                                        <button data-cursor="pointer" class="accordion-button collapsed"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                                                aria-controls="panelsStayOpen-collapseSix">
                                            Is there a limit to the amount of stuff I can create?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse"
                                         aria-labelledby="panelsStayOpen-headingSix">
                                        <div class="accordion-body">
                                            <strong>This is the third item's accordion body.</strong> It is hidden
                                            by
                                            default, until the
                                            collapse plugin adds the appropriate classes that we use to style each
                                            element. These
                                            classes control the overall appearance, as well as the showing and
                                            hiding
                                            via CSS
                                            transitions. You can modify any of this with custom CSS or overriding
                                            our
                                            default variables.
                                            It's also worth noting that just about any HTML can go within the
                                            <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings" tabindex="0">
            <div class="main-wrapper p-0">
                <div class="fixed-header">
                    <div class="d-flex align-items-center gap-2">
                        <button class="navbar-toggler d-md-none d-block" type="button" data-bs-toggle="collapse"
                                data-bs-target="#mainnavbarNav" aria-controls="mainnavbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <i class="iconsax" data-icon="text-align-justify"></i>
                        </button>
                        <a href="index.html" class="logo-icon d-flex d-md-none">
                            <img src="{{ asset('assets/svg/logo-icon.svg') }}" class="img-fluid">
                        </a>
                        <h3>Settings</h3>
                    </div>
                    <a class="premium-btn" data-cursor="pointer" href="chat.html"><i class="iconsax" data-icon="crown-2"></i>
                        Get
                        <span>premium</span></a>
                </div>
                <div class="main-section d-flex gap-4 flex-column">
                    <div class="container card p-0">
                        <div class="card-header">
                            <h3 class="text-white">My account</h3>
                        </div>
                        <div class="card-body px-sm-4 px-3">
                            <div class="my-account">
                                <div class="user-detail"></div>
                                <div class="user-main">
                                    <div class="user-profile">
                                        <img src="{{ asset('assets/images/user/4.jpg') }}" class="img-fluid">
                                        <i class="iconsax" data-icon="camera"></i>
                                    </div>
                                    <div class="user-option">
                                        <h4>Shanaya John</h4>
                                        <p>shanayajohn@gmail.com</p>
                                    </div>
                                </div>

                                <form class="msger-inputarea mb-0">
                                    <div class="row">
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">First
                                                    Name</label>
                                                <input type="email" class="msger-input" id="firstname"
                                                       placeholder="firstname@example.com">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label for="lastname" class="form-label">Last
                                                    Name</label>
                                                <input type="email" class="msger-input" id="lastname"
                                                       placeholder="lastname@example.com">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label for="emailid" class="form-label">Email
                                                    address</label>
                                                <input type="email" class="msger-input" id="emailid"
                                                       placeholder="emailid@example.com">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="setting-btn">
                                <button class="select-plan ">Update
                                </button>
                                <button class="no-select-plan select-plan">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="container card p-0">
                        <div class="card-header">
                            <h3 class="text-white">Change password</h3>
                        </div>
                        <div class="card-body px-sm-4 px-3">
                            <div class="my-account">
                                <form class="msger-inputarea mb-0">
                                    <div class="row">
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">New Password</label>
                                                <input type="email" class="msger-input" id="firstname"
                                                       placeholder="firstname@example.com">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label for="lastname" class="form-label">Confirm password</label>
                                                <input type="email" class="msger-input" id="lastname"
                                                       placeholder="lastname@example.com">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="setting-btn">
                                <button class="select-plan ">Update password
                                </button>
                                <button class="no-select-plan select-plan">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal rating-modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Your Rating</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="iconsax" data-icon="close-square"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="auth-form">
                    <div class="form-group">
                        <label for="comment" class="form-label text-white">Type Something</label>
                        <textarea type="search" class="form-control" placeholder="Write your review here"
                                  id="comment"></textarea>
                    </div>
                </form>
                <ul data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" class="star-rating">
                    <li><i class="ri-star-fill"></i></li>
                    <li><i class="ri-star-fill"></i></li>
                    <li><i class="ri-star-fill"></i></li>
                    <li><i class="ri-star-fill"></i></li>
                    <li><i class="ri-star-fill"></i></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="modal-submit m-0" data-bs-dismiss="modal">Send</button>
            </div>
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
