<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ProCRM</title>
    <meta name="theme-color" content="#ffffff" />
    <script src="{{ assetWithCDN('vendors/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ assetWithCDN('js/config.js') }}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link href="{{ assetWithCDN('vendors/simplebar/simplebar.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
    <link href="{{ assetWithCDN('css/theme-rtl.css') }}" type="text/css" rel="stylesheet" id="style-rtl" />
    <link href="{{ assetWithCDN('css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default" />
    <link href="{{ assetWithCDN('user-rtl.min.css') }}" type="text/css" rel="stylesheet" id="user-style-rtl" />
    <link href="{{ assetWithCDN('css/user.min.css') }}" type="text/css" rel="stylesheet" id="user-style-default" />
    <script>
        var phoenixIsRTL = window.config.config.phoenixIsRTL;
        if (phoenixIsRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
    <style>
        .context {
            width: 100%;
            position: absolute;
            /* top: 50vh; */
        }

        .area {
            position: absolute;
            /* background: #bdbed5; */
            background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);
            width: 100%;
            height: 100vh;
        }

        .circles {
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .circles li {
            position: absolute;
            display: block;
            list-style: none;
            width: 20px;
            height: 20px;
            background: rgba(29, 143, 195, 0.2);
            animation: animate 25s linear infinite;
            bottom: -150px;
        }

        .circles li:nth-child(1) {
            left: 25%;
            width: 80px;
            height: 80px;
            animation-delay: 0s;
        }

        .circles li:nth-child(2) {
            left: 10%;
            width: 20px;
            height: 20px;
            animation-delay: 2s;
            animation-duration: 12s;
        }

        .circles li:nth-child(3) {
            left: 70%;
            width: 20px;
            height: 20px;
            animation-delay: 4s;
        }

        .circles li:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 60px;
            animation-delay: 0s;
            animation-duration: 18s;
        }

        .circles li:nth-child(5) {
            left: 65%;
            width: 20px;
            height: 20px;
            animation-delay: 0s;
        }

        .circles li:nth-child(6) {
            left: 75%;
            width: 110px;
            height: 110px;
            animation-delay: 3s;
        }

        .circles li:nth-child(7) {
            left: 35%;
            width: 150px;
            height: 150px;
            animation-delay: 7s;
        }

        .circles li:nth-child(8) {
            left: 50%;
            width: 25px;
            height: 25px;
            animation-delay: 15s;
            animation-duration: 45s;
        }

        .circles li:nth-child(9) {
            left: 20%;
            width: 15px;
            height: 15px;
            animation-delay: 2s;
            animation-duration: 35s;
        }

        .circles li:nth-child(10) {
            left: 85%;
            width: 150px;
            height: 150px;
            animation-delay: 0s;
            animation-duration: 11s;
        }

        @keyframes animate {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
                border-radius: 0;
            }

            100% {
                transform: translateY(-1000px) rotate(720deg);
                opacity: 0;
                border-radius: 50%;
            }
        }

        @keyframes appear {
            from {
                opacity: 0;
                clip-path: inset(100% 0 100% 0);
                /* transform: translateX(-100px); */
            }

            to {
                opacity: 1;
                clip-path: inset(0 0 0 0);
                /* transform: translateX(0px); */
            }
        }

        @keyframes appear1 {
            from {
                opacity: 0;
                /* clip-path: inset(100% 0 100% 0); */
                transform: translateX(-100px);
            }

            to {
                opacity: 1;
                /* clip-path: inset(0 0 0 0); */
                transform: translateX(0px);
            }
        }

        .feature {
            animation: appear linear;
            animation-timeline: view();
            animation-range: entry 0% cover 45%;
        }
        .pricing {
            animation: appear linear;
            animation-timeline: view();
            animation-range: entry 0% cover 20%;
        }
        .footer {
            animation: appear linear;
            animation-timeline: view();
            animation-range: entry 0% cover 5%;
        }

        .rotating-earth-container {
            animation: appear1 linear;
            animation-timeline: view();
            animation-range: entry 0% cover 40%;
        }
    </style>
</head>
<body class="bg-body-emphasis" style="--phoenix-scroll-margin-top: 1.2rem">
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main context" id="top">
        <div class="bg-body-emphasis sticky-top" data-navbar-shadow-on-scroll="data-navbar-shadow-on-scroll">
            <nav class="navbar navbar-expand-lg container-small px-3 px-lg-7 px-xxl-3">
                <a class="navbar-brand flex-1 flex-lg-grow-0" href="../../index.html">
                    <div class="d-flex align-items-center">
                        {{-- <img src="../../assets/img/icons/logo.png" alt="phoenix" width="27" /> --}}
                        <h5 class="logo-text ms-2">SAARCCRM</h5>
                    </div>
                </a>
                <div class="d-lg-none">
                    <div class="theme-control-toggle fa-icon-wait px-2">
                        <input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                            data-theme-control="phoenixTheme" value="dark" id="themeControlToggleSm" />
                        <label class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                            for="themeControlToggleSm" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-title="Switch theme" style="height: 32px; width: 32px"><span class="icon"
                                data-feather="moon"></span></label>
                        <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                            for="themeControlToggleSm" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-title="Switch theme" style="height: 32px; width: 32px"><span class="icon"
                                data-feather="sun"></span></label>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="border-bottom border-translucent border-bottom-lg-0 mb-2">
                        <div class="search-box d-inline d-lg-none">
                            <form class="position-relative">
                                <input class="form-control search-input search rounded-pill my-4" type="search"
                                    placeholder="Search" aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                            </form>
                        </div>
                    </div>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item border-bottom border-translucent border-bottom-lg-0">
                            <a class="nav-link lh-1 py-0 fs-9 fw-bold py-3" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item border-bottom border-translucent border-bottom-lg-0">
                            <a class="nav-link lh-1 py-0 fs-9 fw-bold py-3" href="#feature">Features</a>
                        </li>
                        <li class="nav-item border-bottom border-translucent border-bottom-lg-0">
                            <a class="nav-link lh-1 py-0 fs-9 fw-bold py-3" href="#contact_us">Contact Us</a>
                        </li>
                    </ul>
                    <div class="d-grid d-lg-flex align-items-center">
                        <a class="btn btn-link text-body order-1 order-lg-0 ps-4 me-lg-2"
                            href="{{ route('login') }}">Sign in</a>
                    </div>
                </div>
            </nav>
        </div>
        <section class="pb-8 overflow-hidden" id="home">
            <div class="hero-header-container-alternate position-relative">
                <div class="container-small px-lg-7 px-xxl-3">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-7 pt-8 pb-6 position-relative z-5 text-center text-lg-start">
                            <h3 class="fs-4 fs-md-3 text-white fw-normal mb-6 overflow-hidden">
                                <span class="typed-text text-primary"
                                    data-typed-text="[&quot;&lt;span class=text-primary&gt;Engage Customer&lt;/span&gt;&quot;,&quot;&lt;span class=text-warning&gt;Drive Growth Effortlessly&lt;/span&gt;&quot;, &quot;&lt;span class=text-info&gt;Enhance Relationships&lt;/span&gt;&quot;, &quot;&lt;span class=text-warning&gt;Maximize Impact&lt;/span&gt;&quot;]"></span>
                            </h3>

                            {{-- <h1 class="fs-3 fs-md-2 fs-xl-2 fw-black mb-4">
                                Your<br />your web app
                            </h1> --}}
                            <p class="mb-5 pe-xl-10">
                                The bridge that connects your business to your customers, fostering loyalty and growth,
                                is built on a foundation of trust, exceptional service, and consistent engagement.
                            </p>
                            <a class="btn btn-lg btn-primary rounded-pill me-3" href="#!" role="button">Sign
                                up</a>

                        </div>
                        <div class="col-12 col-lg-auto d-none d-lg-block">
                            <div class="hero-image-container position-absolute h-100 end-0 d-flex align-items-center">
                                <div class="position-relative">
                                    <div class="position-absolute end-0 hero-image-container-overlay"
                                        style="transform: skewY(-8deg) ."></div>
                                    <img class="position-absolute end-0 hero-image-container-bg"
                                        src="{{ asset('assets/images/bg-36.png') }}" alt="" /><img
                                        class="w-100  rounded-2 hero-image-shadow"
                                        src="{{ asset('assets/images/bg-34.png') }}" alt="hero-header" /><img
                                        class="w-100 d-light-none rounded-2 hero-image-shadow"
                                        src="../../assets/img/bg/bg-35.png" alt="hero-header" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-small px-md-8 mb-8 d-lg-none">
                    <div class="position-relative">
                        <div class="position-absolute end-0 hero-image-container-overlay"></div>
                        <img class="position-absolute top-50 hero-image-container-bg"
                            src="{{ asset('assets/images/bg-39.png') }}" alt="" /><img
                            class="img-fluid ms-auto  rounded-2 hero-image-shadow"
                            src="{{ asset('assets/images/bg-34.png') }}" alt="hero-header" /><img
                            class="img-fluid ms-auto d-light-none rounded-2 hero-image-shadow"
                            src="../../assets/img/bg/bg-35.png" alt="hero-header" />
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-13 pb-10">
            <div class="container-small px-lg-7 px-xxl-3 ">
                <div class="text-center mb-10 mb-md-5 feature">
                    <h5 class="text-info mb-3">Features</h5>
                    <h2 class="mb-3 lh-base">
                        Tracking for Wholesale and Retail Business
                    </h2>
                    <p class="mb-0">
                        To provide a comprehensive solution for manageing the inventory and tracking of customer orders
                        for both wholesale and retail opreations.
                    </p>
                    <div class="text-center mt-5">
                        <a class="btn btn-outline-primary" href="#!">See more<span
                                class="fa-solid fa-angle-right ms-2"></span></a>
                    </div>
                </div>
                <div class="row flex-between-center px-xl-11  mb-md-9 feature">
                    <div class="col-md-6 order-1 order-md-0 text-center text-md-start">
                        <h4 class="mb-3">Centralized Inventory Management</h4>
                        <p class="mb-1">
                            To maintain a centralized system for tracking inventory levels,orders,sales and deliveries
                            across multiple branches.
                        </p>
                        {{-- <a class="btn btn-link me-2 p-0 fs-9" href="#!" role="button">Check Demo<i
                                class="fa-solid fa-angle-right ms-2"></i></a> --}}
                    </div>
                    <div class="col-md-5 mb-5 mb-md-0 text-center">
                        <img class="w-75 w-md-100 " src="{{ asset('assets/images/svg-1.svg') }}"
                            alt="" />
                    </div>
                </div>
                <div class="row flex-between-center px-xl-11 mb-10 mb-md-9 feature">
                    <div class="col-md-6 order-1 order-md-0 text-center text-md-start">
                        <h4 class="mb-3">Real-Time Stock Monitoring</h4>
                        <p class="mb-5">
                            Monitoring of Stock levels to prevent overstocking or stockouts, ensuring optimal inventory
                            levels at all times.
                        </p>
                        {{-- <a class="btn btn-link me-2 p-0 fs-9" href="#!" role="button">Check Demo<i
                                class="fa-solid fa-angle-right ms-2"></i></a> --}}
                    </div>
                    <div class="col-md-5 mb-5 mb-md-0 text-center">
                        <img class="w-75 w-md-100 " src="{{ asset('assets/images/svg-3.svg') }}"
                            alt="" />
                    </div>
                </div>
                <div class="row flex-between-center px-xl-11 false feature">
                    <div class="col-md-6 order-1 order-md-0 text-center text-md-start">
                        <h4 class="mb-3">Security and Compliance</h4>
                        <p class="mb-5">
                            To ensure te security of inventory data and compliance with relevant industry standards and
                            regulstions.
                        </p>
                    </div>
                    <div class="col-md-5 mb-5 mb-md-0 text-center">
                        <img class="w-75 w-md-100 " src="{{ asset('assets/images/svg-2.jpg') }}"
                            alt="" />
                    </div>
                </div>
            </div>
            <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        {{-- <section class="pb-14 overflow-x-hidden">
            <div class="container-small px-lg-7 px-xxl-3">
                <div class="text-center mb-5 position-relative">
                    <h5 class="text-info mb-3">Testimonial</h5>
                    <h2 class="mb-2 lh-base">What our customers has to say about us</h2>
                </div>
                <div class="carousel testimonial-carousel slide position-relative dark__bg-gray-1100"
                    id="carouselExampleIndicators" data-bs-ride="carousel">
                    <div class="bg-holder d-none d-xl-block"
                        style="
                background-image: url(../../assets/img/bg/39.png);
                background-size: 186px;
                background-position: top 20px right 20px;
              ">
                    </div>
                    <!--/.bg-holder-->
                    <img class="position-absolute d-none d-lg-block" src="../../assets/img/bg/bg-left-22.png"
                        width="150" alt="" style="top: -100px; left: -70px" /><img
                        class="position-absolute d-none d-lg-block" src="../../assets/img/bg/bg-right-22.png"
                        width="150" alt="" style="bottom: -80px; right: -80px" />
                    <div class="carousel-inner">
                        <div class="carousel-item text-center py-8 px-5 px-xl-15 active">
                            <span class="fa fa-star text-warning"></span><span
                                class="fa fa-star text-warning"></span><span
                                class="fa fa-star text-warning"></span><span
                                class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span>
                            <h3 class="fw-semibold fst-italic mt-3 mb-8 w-xl-70 mx-auto lh-base">
                                Amazing theme, excellent support from ThemeWagon with really
                                fast reaction time! Thank you!
                            </h3>
                            <div class="d-flex align-items-center justify-content-center gap-3 mx-auto">
                                <div class="avatar avatar-3xl">
                                    <img class="rounded-circle border border-2 border-primary"
                                        src="../../assets/img/team/12.webp" alt="" />
                                </div>
                                <div class="text-start">
                                    <h5>Johna Austin</h5>
                                    <p class="mb-0">CEO</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item text-center py-8 px-5 px-xl-15 false">
                            <span class="fa fa-star text-warning"></span><span
                                class="fa fa-star text-warning"></span><span
                                class="fa fa-star text-warning"></span><span
                                class="fa fa-star text-warning"></span><span
                                class="fa fa-star-half-alt star-icon text-warning"></span>
                            <h3 class="fw-semibold fst-italic mt-3 mb-8 w-xl-70 mx-auto lh-base">
                                An excellent theme with fast support team to aid the
                                development process! Thanks team Phoenix!
                            </h3>
                            <div class="d-flex align-items-center justify-content-center gap-3 mx-auto">
                                <div class="avatar avatar-3xl">
                                    <img class="rounded-circle border border-2 border-primary"
                                        src="../../assets/img/team/13.webp" alt="" />
                                </div>
                                <div class="text-start">
                                    <h5>Monica Gomez</h5>
                                    <p class="mb-0">Founder</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item text-center py-8 px-5 px-xl-15 false">
                            <span class="fa fa-star text-warning"></span><span
                                class="fa fa-star text-warning"></span><span
                                class="fa fa-star text-warning"></span><span
                                class="fa fa-star text-warning"></span><span
                                class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span>
                            <h3 class="fw-semibold fst-italic mt-3 mb-8 w-xl-70 mx-auto lh-base">
                                Amazing support system with quickest reply and steady
                                communication of the concerned.
                            </h3>
                            <div class="d-flex align-items-center justify-content-center gap-3 mx-auto">
                                <div class="avatar avatar-3xl">
                                    <img class="rounded-circle border border-2 border-primary"
                                        src="../../assets/img/team/14.webp" alt="" />
                                </div>
                                <div class="text-start">
                                    <h5>Marc Chiasson</h5>
                                    <p class="mb-0">CTO</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-indicators">
                        <button class="active" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                </div>
            </div>
            <!-- end of .container-->
        </section> --}}
        <!-- <section> close ============================-->
        <!-- ============================================-->

        {{-- <section class="gallery">
            <div class="gallery-overlay position-absolute left-0 w-100"></div>
            <div class="bg-holder d-none d-xl-block"
                style="
            background-image: url(../../assets/img/bg/bg-left-26.png);
            background-size: auto;
            background-position: left 65%;
          ">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder d-none d-xl-block"
                style="
            background-image: url(../../assets/img/bg/bg-right-26.png);
            background-size: auto;
            background-position: right 62%;
          ">
            </div>
            <!--/.bg-holder-->

            <div class="container-small position-relative px-lg-7 px-xxl-3">
                <div class="text-center mb-7">
                    <h5 class="text-info mb-3">Gallery</h5>
                    <h2 class="mb-2">Our best works</h2>
                </div>
                <ul class="nav mb-6 w-max-content mx-auto" data-filter-nav="data-filter-nav">
                    <li class="nav-item">
                        <a class="isotope-nav cursor-pointer active" data-filter="*">First</a>
                    </li>
                    <li class="nav-item">
                        <a class="isotope-nav cursor-pointer" data-filter=".second">Second</a>
                    </li>
                    <li class="nav-item">
                        <a class="isotope-nav cursor-pointer" data-filter=".third">Third</a>
                    </li>
                    <li class="nav-item">
                        <a class="isotope-nav cursor-pointer" data-filter=".fourth">Fourth</a>
                    </li>
                </ul>
                <div class="row g-3" id="image_gallery" data-sl-isotope='{"layoutMode":"packery"}'>
                    <div class="col-6 col-md-4 px-2 isotope-item fourth">
                        <a href="#!" data-bigpicture='{"gallery":"#image_gallery"}'
                            data-bp="../../assets/img/gallery/27.png"><img class="rounded img-fluid w-100"
                                src="../../assets/img/gallery/27.png" alt="" /></a>
                    </div>
                    <div class="col-6 col-md-4 px-2 isotope-item third">
                        <a href="#!" data-bigpicture='{"gallery":"#image_gallery"}'
                            data-bp="../../assets/img/gallery/28.png"><img class="rounded img-fluid w-100"
                                src="../../assets/img/gallery/28.png" alt="" /></a>
                    </div>
                    <div class="col-6 col-md-4 px-2 isotope-item second">
                        <a href="#!" data-bigpicture='{"gallery":"#image_gallery"}'
                            data-bp="../../assets/img/gallery/29.png"><img class="rounded img-fluid w-100"
                                src="../../assets/img/gallery/29.png" alt="" /></a>
                    </div>
                    <div class="col-6 col-md-4 px-2 isotope-item third">
                        <a href="#!" data-bigpicture='{"gallery":"#image_gallery"}'
                            data-bp="../../assets/img/gallery/30.png"><img class="rounded img-fluid w-100"
                                src="../../assets/img/gallery/30.png" alt="" /></a>
                    </div>
                    <div class="col-6 col-md-4 px-2 isotope-item third">
                        <a href="#!" data-bigpicture='{"gallery":"#image_gallery"}'
                            data-bp="../../assets/img/gallery/31.png"><img class="rounded img-fluid w-100"
                                src="../../assets/img/gallery/31.png" alt="" /></a>
                    </div>
                    <div class="col-6 col-md-4 px-2 isotope-item second">
                        <a href="#!" data-bigpicture='{"gallery":"#image_gallery"}'
                            data-bp="../../assets/img/gallery/32.png"><img class="rounded img-fluid w-100"
                                src="../../assets/img/gallery/32.png" alt="" /></a>
                    </div>
                    <div class="col-6 col-md-4 px-2 isotope-item fourth">
                        <a href="#!" data-bigpicture='{"gallery":"#image_gallery"}'
                            data-bp="../../assets/img/gallery/33.png"><img class="rounded img-fluid w-100"
                                src="../../assets/img/gallery/33.png" alt="" /></a>
                    </div>
                    <div class="col-6 col-md-4 px-2 isotope-item third">
                        <a href="#!" data-bigpicture='{"gallery":"#image_gallery"}'
                            data-bp="../../assets/img/gallery/34.png"><img class="rounded img-fluid w-100"
                                src="../../assets/img/gallery/34.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="overflow-hidden rotating-earth-container pb-md-0 pt-12">
            <div class="row px-lg-7 px-xxl-3">
                <div class="col-lg-6 text-center text-lg-start ">
                    <h5 class="text-info mb-3 heading-one">One-stop solution</h5>
                    <h2 class="mb-2 lh-base ">Used by millions of users</h2>
                    <h1 class="fs-4 fs-sm-2 mb-3 text-gradient-info fw-black ">
                        WORLDWIDE
                    </h1>
                    <p class="">
                        Keep it simple with SAARCCRM and help your organization grow with
                        the abundance you look for.
                    </p>
                </div>
            </div>
        </section>
        <section class="overflow-hidden rotating-earth-container pb-5 pb-md-0 ">
            <div class="container-small px-lg-7 px-xxl-3">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-start ">
                        <div class="row gy-6 ">
                            <div class="col-sm-6 text-center text-lg-start ">
                                <img class="mb-4 " src="{{ asset('assets/images/lightning-speed.png') }}"
                                    alt="" />
                                <h4 class="mb-2">Lightning Speed</h4>
                                <p>Grow fast with SAARCCRM!</p>
                            </div>
                            <div class="col-sm-6 text-center text-lg-start ">
                                <img class="mb-4 " src="{{ asset('assets/images/best-statistics.png') }}"
                                    alt="" />
                                <h4 class="mb-2">Best Statistics</h4>
                                <p>Get all reports at hand!</p>
                            </div>
                            <div class="col-sm-6 text-center text-lg-start ">
                                <img class="mb-4 " src="{{ asset('assets/images/all-night.png') }}"
                                    alt="" />
                                <h4 class="mb-2">All-night Protection</h4>
                                <p>Security Assured: Ensure data Safety with SAARCCRM!</p>
                            </div>
                            <div class="col-sm-6 text-center text-lg-start ">
                                <img class="mb-4 " src="{{ asset('assets/images/editable-features.png') }}"
                                    alt="" />
                                <h4 class="mb-2">Editable Features</h4>
                                <p>Edits made easy and safe!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <section class="counter-container feature">
            <div class="position-absolute start-0 end-0 w-100 counter-overlay" style="transform: skewY(-8deg)"></div>
            <div class="bg-holder d-none d-lg-block"
                style="
            background-image: url(../../assets/img/bg/bg-left-25.png);
            background-size: auto;
            background-position: left center;
          ">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder d-none d-lg-block"
                style="
            background-image: url(../../assets/img/bg/bg-right-25.png);
            background-size: auto;
            background-position: right center;
          ">
            </div>
            <!--/.bg-holder-->
            <div class="container-small position-relative feature">
                <div class="row gx-0 gy-8 justify-content-center">
                    <div
                        class="col-sm-6 col-md-auto me-md-5 pe-md-5 border-end-md border-translucent border-dashed text-center order-2 order-md-0">
                        <h1 class="fs-3 fs-lg-1 fw-bolder text-info mb-3">
                            <span>$</span><span data-countup='{"endValue":8976,"duration":5,"suffix":""}'></span>
                        </h1>
                        <h4>Revenue</h4>
                    </div>
                    <div
                        class="col-sm-6 col-md-auto me-md-5 pe-md-5 border-end-md border-translucent border-dashed text-center order-1 order-md-0">
                        <h1 class="fs-3 fs-lg-1 fw-bolder text-info mb-3">
                            <span data-countup='{"endValue":308,"duration":10,"suffix":""}'></span><span>K</span>
                        </h1>
                        <h4>User</h4>
                    </div>
                    <div
                        class="col-sm-6 col-md-auto me-md-5 pe-md-5 border-end-md border-translucent border-dashed text-center">
                        <h1 class="fs-3 fs-lg-1 fw-bolder text-info mb-3"
                            data-countup='{"endValue":12,"duration":0.5,"suffix":""}'></h1>
                        <h4>Countries</h4>
                    </div>
                    <div class="col-sm-6 col-md-auto text-center">
                        <h1 class="fs-3 fs-lg-1 fw-bolder text-info mb-3"
                            data-countup='{"endValue":125,"duration":15,"suffix":"+"}'></h1>
                        <h4>Stories</h4>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="position-static pt-15 pt-md-5 pt-lg-2 pricing">
            <div class="container-small px-lg-7 px-xxl-3">
                <div class="text-center mb-3 mb-lg-7">
                    <h5 class="text-info mb-3">Pricing</h5>
                    <h2 class="mb-2">Choose the best deal for you</h2>
                </div>
                <div class="row g-3 mb-7 mb-lg-11">
                    <div class="col-lg-4">
                        <div class="pricing-card">
                            <div class="card bg-transparent border-0">
                                <div class="card-body p-7">
                                    <h3 class="mb-5">Starter</h3>
                                    <h1 class="fs-3 d-flex align-items-center gap-1 mb-3">
                                        $15<span class="fs-8 fw-normal">/ month</span>
                                    </h1>
                                    <button class="btn btn-lg w-100 mb-7 btn-outline-primary">
                                        Buy
                                    </button>
                                    <h5 class="mb-4">What’s included</h5>
                                    <ul class="fa-ul ps-4 m-0 pricing">
                                        <li class="d-flex align-items-center mb-3">
                                            <span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span>
                                            <p class="mb-0">Timeline</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-3">
                                            <span class="fa-li"><span></span></span>
                                            <p class="mb-0">Advanced Search</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-3">
                                            <span class="fa-li"><span></span></span>
                                            <p class="mb-0">Custom fields</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-3">
                                            <span class="fa-li"><span></span></span>
                                            <p class="mb-0">Task dependencies</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-0">
                                            <span class="fa-li"><span></span></span>
                                            <p class="mb-0">Private teams &amp; projects</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pricing-card">
                            <div class="card bg-transparent border border-2 border-info rounded-4">
                                <div class="card-body p-7">
                                    <h3 class="mb-5">Business</h3>
                                    <h1 class="fs-3 d-flex align-items-center gap-1 mb-3">
                                        $23<span class="fs-8 fw-normal">/ month</span>
                                    </h1>
                                    <button class="btn btn-lg w-100 mb-7 btn-primary">
                                        Buy
                                    </button>
                                    <h5 class="mb-4">What’s included</h5>
                                    <ul class="fa-ul ps-4 m-0 pricing">
                                        <li class="d-flex align-items-center mb-3">
                                            <span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span>
                                            <p class="mb-0">Timeline</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-3">
                                            <span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span>
                                            <p class="mb-0">Advanced Search</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-3">
                                            <span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span>
                                            <p class="mb-0">Custom fields</p>
                                            <span class="badge badge-phoenix badge-phoenix-info ms-2 fs-10">Info</span>
                                        </li>
                                        <li class="d-flex align-items-center mb-3">
                                            <span class="fa-li"><span></span></span>
                                            <p class="mb-0">Task dependencies</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-0">
                                            <span class="fa-li"><span></span></span>
                                            <p class="mb-0">Private teams &amp; projects</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pricing-card">
                            <div class="card bg-transparent border-0">
                                <div class="card-body p-7">
                                    <h3 class="mb-5">Enterprise</h3>
                                    <h1 class="fs-3 d-flex align-items-center gap-1 mb-3">
                                        $40<span class="fs-8 fw-normal">/ month</span>
                                    </h1>
                                    <button class="btn btn-lg w-100 mb-7 btn-outline-primary">
                                        Buy
                                    </button>
                                    <h5 class="mb-4">What’s included</h5>
                                    <ul class="fa-ul ps-4 m-0 pricing">
                                        <li class="d-flex align-items-center mb-3">
                                            <span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span>
                                            <p class="mb-0">Timeline</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-3">
                                            <span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span>
                                            <p class="mb-0">Advanced Search</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-3">
                                            <span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span>
                                            <p class="mb-0">Custom fields</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-3">
                                            <span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span>
                                            <p class="mb-0">Task dependencies</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-0">
                                            <span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span>
                                            <p class="mb-0">Private teams &amp; projects</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card rounded-4 border-0 offer-card">
                    <div class="card-body d-md-flex align-items-center gap-4 py-5">

                        <div>
                            <p>
                                Business Starter, Business Standard, and Business Plus plans
                                can be purchased for a maximum of 300 users. There is no
                                minimum or maximum user limit for Enterprise plans.
                            </p>
                            <p class="mb-6">
                                Phoenix customers may have access to additional features for a
                                limited promotional period
                            </p>
                            <a class="btn btn-link me-2 p-0 fs-9" href="#!" role="button">Contact Support<i
                                    class="fa-solid fa-angle-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pb-8 pb-sm-10 pb-xl-14 " id="contact_us">
            <div class="container-small px-lg-7 px-xxl-3 pricing">
                <div class="text-center mb-7">
                    <h5 class="text-info mb-3">Contact</h5>
                    <h2 class="mb-2">Choose the best deal for you</h2>
                </div>
                <div class="row feature">
                    <div class="col-12 mb-10">
                        <div class="googlemap" data-googlemap="data-googlemap" data-gmap="data-gmap"
                            data-latlng="40.7228022,-74.0020158" data-scrollwheel="false" data-zoom="15"
                            style="height: 381px; border-radius: 1.5rem">
                            <div class="marker-content py-3">
                                <h5>Google map</h5>
                                <p>
                                    A nice template for your site.<br />Customize it as you
                                    want.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5 g-lg-5 feature">
                    <div class="col-md-6 mb-5 mb-md-0 text-center text-md-start">
                        <h3 class="mb-3">Stay connected</h3>
                        <p class="mb-5">
                            Stay connected with SAARCCRM's Help Center; SAARCCRM is available
                            for your necessities at all times.
                        </p>
                        <div class="d-flex flex-column align-items-center align-items-md-start gap-3 gap-md-0">
                            <div class="d-md-flex align-items-center">
                                <div class="icon-wrapper shadow-info">
                                    <span class="uil uil-phone text-primary fs-4 z-1 ms-2"
                                        data-bs-theme="light"></span>
                                </div>
                                <div class="flex-1 ms-3">
                                    <a class="link-900" href="tel:+871406-7509">(871) 406-7509</a>
                                </div>
                            </div>
                            <div class="d-md-flex align-items-center">
                                <div class="icon-wrapper shadow-info">
                                    <span class="uil uil-envelope text-primary fs-4 z-1 ms-2"
                                        data-bs-theme="light"></span>
                                </div>
                                <div class="flex-1 ms-3">
                                    <a class="fw-semibold text-body"
                                        href="mailto:phoenix@email.com">saarc@email.com</a>
                                </div>
                            </div>
                            <div class="mb-6 d-md-flex align-items-center">
                                <div class="icon-wrapper shadow-info">
                                    <span class="uil uil-map-marker text-primary fs-4 z-1 ms-2"
                                        data-bs-theme="light"></span>
                                </div>
                                <div class="flex-1 ms-3">
                                    <a class="fw-semibold text-body" href="#!">39163 Amir Drive Suite 802</a>
                                </div>
                            </div>
                            <div class="d-flex">
                                <a href="#!"><span
                                        class="fa-brands fa-facebook fs-6 text-primary me-3"></span></a><a
                                    href="#!"><span
                                        class="fa-brands fa-twitter fs-6 text-primary me-3"></span></a><a
                                    href="#!"><span
                                        class="fa-brands fa-linkedin-in fs-6 text-primary"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-md-start">
                        <h3 class="mb-3">Drop us a line</h3>
                        <p class="mb-7">
                            If you have any query or suggestion , we are open to learn from
                            you, Lets talk, reach us anytime.
                        </p>
                        <form class="row g-4">
                            <div class="col-12">
                                <input class="form-control bg-body-emphasis" type="text" name="name"
                                    placeholder="Name" required="required" />
                            </div>
                            <div class="col-12">
                                <input class="form-control bg-body-emphasis" type="email" name="email"
                                    placeholder="Email" required="required" />
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-body-emphasis" rows="6" name="message" placeholder="Message"
                                    required="required"></textarea>
                            </div>
                            <div class="col-12 d-grid">
                                <button class="btn btn-outline-primary" type="submit">
                                    Submit
                                </button>
                            </div>
                            <div class="feedback"></div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="bg-body dark__bg-gray-1000 pb-10 overflow-hidden feature">
            <div class="container-small px-lg-7 px-xxl-3">
                <div class="position-absolute w-100 h-100 start-0 end-0 opacity-50"
                    style="
              bottom: -350px;
              transform: skewY(-8deg);
              background: linear-gradient(
                102.27deg,
                #38abff 4.69%,
                #3874ff 106.27%
              );
            ">
                </div>
                <div class="bg-holder"
                    style="
              background-image: url(../../assets/img/bg/bg-left-24.png);
              background-size: auto;
              background-position: left center;
            ">
                </div>
                <!--/.bg-holder-->

                <div class="bg-holder"
                    style="
              background-image: url(../../assets/img/bg/bg-right-24.png);
              background-size: auto;
              background-position: right center;
            ">
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="card py-md-9 px-md-13 border-0 z-1 shadow-lg">
                            <div class="bg-holder"
                                style="
                    background-image: url(../../assets/img/bg/bg-38.png);
                    background-position: center;
                    background-size: 100%;
                  ">
                            </div>
                            <!--/.bg-holder-->

                            <div class="card-body position-relative">
                                <img class="img-fluid mb-5 "
                                    src="../../assets/img/spot-illustrations/37.png" width="260"
                                    alt="..." /><img class="img-fluid mb-5 d-light-none"
                                    src="../../assets/img/spot-illustrations/37_2.png" width="260"
                                    alt="..." />

                                <h1 class="fs-6 fs-sm-4 fs-lg-2 fw-bolder lh-sm mb-3">
                                    Join<span class="gradient-text-primary mx-2">SAARCCRM</span><span>Today</span>
                                </h1>
                                <form class="d-flex justify-content-center mb-3 px-xxl-15">
                                    <div class="d-grid d-sm-block"></div>
                                    <input class="form-control me-3" id="ctaEmail1" type="email"
                                        placeholder="Email" aria-describedby="ctaEmail1" />
                                    <button class="btn btn-primary" type="submit">
                                        Subscribe
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="bg-dark dark__bg-gray-1000 footer" data-bs-theme="dark">
            <div class="container-small px-lg-7 px-xxl-3">
                {{-- <div class="row gx-xxl-8 gy-5 align-items-center mb-5">
                    <div class="col-xl-auto text-center">
                        <a href="#"><img src="../../assets/img/icons/logo-white.png" height="48"
                                alt="" /></a>
                    </div>
                    <div class="col-xl-auto flex-1">
                        <ul
                            class="list-unstyled d-flex justify-content-center flex-wrap mb-0 border-end-xl border-dashed gap-3 gap-xl-8 pe-xl-5 pe-xxl-8 w-75 w-md-100 mx-auto">
                            <li>
                                <a class="text-light text-opacity-75" href="">Contact us</a>
                            </li>
                            <li><a class="text-light text-opacity-75" href="">Login</a></li>
                            <li>
                                <a class="text-light text-opacity-75" href="">Sign Up</a>
                            </li>
                            <li>
                                <a class="text-light text-opacity-75" href="">Support</a>
                            </li>
                            <li><a class="text-light text-opacity-75" href="">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-auto">
                        <div class="d-flex align-items-center justify-content-center gap-8">
                            <a class="text-white" href="#!">
                                <span class="fa-brands fa-facebook"></span></a><a class="text-white"
                                href="#!">
                                <span class="fa-brands fa-twitter"></span></a><a class="text-white"
                                href="#!">
                                <span class="fa-brands fa-linkedin-in"></span></a>
                        </div>
                    </div>
                </div> --}}
                {{-- <hr class="border-top" /> --}}
                <div class="d-sm-flex flex-between-center text-center">
                    <p class="text-body-tertiary mb-0">Copyright © SAARC</p>
                    <p class="text-body-tertiary mb-0">
                        Made with love by <a href="https://themewagon.com">SAARC</a>
                    </p>
                </div>
            </div>
            <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->
    </main>
    <div class="area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ assetWithCDN('vendors/popper/popper.min.js') }}"></script>
    <script src="{{ assetWithCDN('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ assetWithCDN('vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ assetWithCDN('vendors/is/is.min.js') }}"></script>
    <script src="{{ assetWithCDN('vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ assetWithCDN('vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ assetWithCDN('vendors/list.js/list.min.js') }}"></script>
    <script src="{{ assetWithCDN('vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ assetWithCDN('vendors/dayjs/dayjs.min.js') }}"></script>
    <script src="{{ assetWithCDN('js/phoenix.js') }}"></script>
    <script src="{{ assetWithCDN('vendors/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ assetWithCDN('vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ assetWithCDN('vendors/isotope-packery/packery-mode.pkgd.min.js') }}"></script>
    <script src="{{ assetWithCDN('vendors/bigpicture/BigPicture.js') }}"></script>
    <script src="{{ assetWithCDN('vendors/lottie/lottie.min.js') }}"></script>
    <script src="{{ assetWithCDN('vendors/countup/countUp.umd.js') }}"></script>
    <script src="{{ assetWithCDN('vendors/typed.js/typed.umd.js') }}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbaQGvhe7Af-uOMJz68NWHnO34UjjE7Lo&callback=initMap"
        async></script>
</body>
</html>
