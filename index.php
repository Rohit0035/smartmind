<!-- header start -->

<?php include 'header.php';?>


<!-- header close -->


<main class="main">

    <!-- hero area -->
    <div class="hero-section">
        <div class="hero-slider owl-carousel owl-theme">
            <div class="hero-single" style="background: url(assets/img/hero/hero-1.jpg)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 mx-auto">
                            <div class="hero-content text-center">
                                <div class="hero-content-wrapper">
                                    <h1 class="hero-title mb-2" data-animation="fadeInUp" data-delay=".25s">Find Your
                                        Dream
                                        Home</h1>
                                    <p class="mt-0" data-animation="fadeInUp" data-delay=".50s">
                                        Discover a wide range of new and featured properties in your local city.
                                    </p>
                                    <div class="hero-btn d-block" data-animation="fadeInUp" data-delay=".75s">
                                        <a href="#" class="theme-btn">Browse Dream House <i
                                                class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-single" style="background: url(assets/img/hero/hero-2.jpg)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 mx-auto">
                            <div class="hero-content text-center">
                                <div class="hero-content-wrapper">
                                    <h1 class="hero-title mb-2" data-animation="fadeInUp" data-delay=".25s"> Smart
                                        Investments
                                        <span>Secure</span> Future
                                    </h1>
                                    <p class="mt-0" data-animation="fadeInUp" data-delay=".50s">
                                        Invest in prime properties with high returns.
                                    </p>
                                    <div class="hero-btn d-block" data-animation="fadeInUp" data-delay=".75s">
                                        <a href="#" class="theme-btn">Explore Investment Options <i
                                                class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="hero-single" style="background: url(assets/img/hero/hero-3.jpg)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 mx-auto">
                            <div class="hero-content text-center">
                                <div class="hero-content-wrapper">
                                    <h1 class="hero-title mb-2" data-animation="fadeInUp" data-delay=".25s"> Personalized
                                        Interiors
                                        <span>Luxury</span> Living
                                    </h1>
                                    <p  class="mt-0" data-animation="fadeInUp" data-delay=".50s">
                                        Transform your home with bespoke interior designs that reflect your style.
                                    </p>
                                    <div class="hero-btn d-block" data-animation="fadeInUp" data-delay=".75s">
                                        <a href="#" class="theme-btn">Get Inspired <i
                                                class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
    <!-- hero area end -->


    <!-- section for serach filter start -->

    <div class="search-area">
        <div class="container">
            <div class="search-wrapper bg-light px-3 py-4 rounded-5">
                <div class="search-nav">
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-tab-1" data-bs-toggle="pill"
                                data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                aria-selected="true">For Buy</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-tab-3" data-bs-toggle="pill" data-bs-target="#pills-3"
                                type="button" role="tab" aria-controls="pills-3" aria-selected="false">For Rent</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-tab-1"
                        tabindex="0">
                        <div class="search-form">
                            <form action="#">
                                <div class="row align-items-center">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <select class="select">
                                                <option value="">Location</option>
                                                <option value="1">Bangalore</option>
                                                <option value="2">Hyderabad</option>
                                            </select>
                                            <i class="far fa-location-dot"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <select class="select">
                                                <option value="">Property Type</option>
                                                <option value="apartment">Apartment</option>
                                                <option value="house-flat">House / Flat</option>
                                                <option value="villa">Villa</option>
                                                <option value="plot">Plot</option>
                                                <option value="residential">Residential</option>
                                                <option value="commercial">Commercial</option>
                                                <option value="1bhk">1 BHK</option>
                                                <option value="2bhk">2 BHK</option>
                                                <option value="3bhk">3 BHK</option>
                                                <option value="4bhk">4 BHK</option>
                                                <option value="5bhk">5 BHK</option>
                                                <option value="5plusbhk">5+ BHK</option>
                                            </select>
                                            <i class="far fa-home"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <select class="select">
                                                <option value="">Budget</option>
                                                <option value="5lac">₹5 Lac – ₹10 Lac</option>
                                                <option value="10lac">₹10 Lac – ₹25 Lac</option>
                                                <option value="25lac">₹25 Lac – ₹50 Lac</option>
                                                <option value="50lac">₹50 Lac – ₹1 Crore</option>
                                                <option value="1cr">₹1 Crore – ₹2 Crore</option>
                                                <option value="2cr">₹2 Crore – ₹5 Crore</option>
                                                <option value="5cr">₹5 Crore – ₹10 Crore</option>
                                                <option value="10cr">₹10 Crore – ₹20 Crore</option>
                                                <option value="20crplus">Above ₹20 Crore</option>
                                            </select>
                                            <i class="far fa-home"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <button type="submit" class="theme-btn"><span
                                                class="far fa-search"></span>Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-tab-3" tabindex="0">
                        <div class="search-form">
                            <form action="#">
                                <div class="row align-items-center">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <select class="select">
                                                <option value="">Location</option>
                                                <option value="1">Bangalore</option>
                                                <option value="2">Hyderabad</option>
                                            </select>
                                            <i class="far fa-location-dot"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <select class="select">
                                                <option value="">Property Type</option>
                                                <option value="apartment">Apartment</option>
                                                <option value="house-flat">House / Flat</option>
                                                <option value="villa">Villa</option>
                                                <option value="plot">Plot</option>
                                                <option value="residential">Residential</option>
                                                <option value="commercial">Commercial</option>
                                                <option value="1bhk">1 BHK</option>
                                                <option value="2bhk">2 BHK</option>
                                                <option value="3bhk">3 BHK</option>
                                                <option value="4bhk">4 BHK</option>
                                                <option value="5bhk">5 BHK</option>
                                                <option value="5plusbhk">5+ BHK</option>
                                            </select>
                                            <i class="far fa-home"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <select class="select">
                                                <option value="">Budget</option>
                                                <option value="5lac">₹5 Lac – ₹10 Lac</option>
                                                <option value="10lac">₹10 Lac – ₹25 Lac</option>
                                                <option value="25lac">₹25 Lac – ₹50 Lac</option>
                                                <option value="50lac">₹50 Lac – ₹1 Crore</option>
                                                <option value="1cr">₹1 Crore – ₹2 Crore</option>
                                                <option value="2cr">₹2 Crore – ₹5 Crore</option>
                                                <option value="5cr">₹5 Crore – ₹10 Crore</option>
                                                <option value="10cr">₹10 Crore – ₹20 Crore</option>
                                                <option value="20crplus">Above ₹20 Crore</option>
                                            </select>
                                            <i class="far fa-home"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <button type="submit" class="theme-btn"><span
                                                class="far fa-search"></span>Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- section search filter close -->


    <!-- category area -->
    <div class="category-area py-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto wow fadeInDown" data-wow-duration="1s" data-wow-delay=".25s">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">SmartMind</span>
                        <h2 class="site-title">Our all Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="category-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <a href="#">
                            <div class="category-icon">
                                <i class="flaticon-apartment"></i>
                            </div>
                            <div class="category-content">
                                <h4 class="category-title">Apartment</h4>
                                <span class="category-property">
                                    <img src="assets/img/common/arrows.gif" alt="" width="20px" />
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="category-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">
                        <a href="#">
                            <div class="category-icon">
                                <i class="flaticon-business-and-trade"></i>
                            </div>
                            <div class="category-content">
                                <h4 class="category-title">Offices</h4>
                                <span class="category-property">
                                    <img src="assets/img/common/arrows.gif" alt="" width="20px" />
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="category-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
                        <a href="#">
                            <div class="category-icon">
                                <i class="flaticon-home"></i>
                            </div>
                            <div class="category-content">
                                <h4 class="category-title">My House</h4>
                                <span class="category-property">
                                    <img src="assets/img/common/arrows.gif" alt="" width="20px" />
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="category-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                        <a href="#">
                            <div class="category-icon">
                                <i class="flaticon-villa"></i>
                            </div>
                            <div class="category-content">
                                <h4 class="category-title">Villas</h4>
                                <span class="category-property">
                                    <img src="assets/img/common/arrows.gif" alt="" width="20px" />
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="category-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.25s">
                        <a href="#">
                            <div class="category-icon">
                                <i class="flaticon-living-room"></i>
                            </div>
                            <div class="category-content">
                                <h4 class="category-title">Rooms</h4>
                                <span class="category-property">
                                    <img src="assets/img/common/arrows.gif" alt="" width="20px" />
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="category-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.50s">
                        <a href="#">
                            <div class="category-icon">
                                <i class="flaticon-houses"></i>
                            </div>
                            <div class="category-content">
                                <h4 class="category-title">Garage</h4>
                                <span class="category-property">
                                    <img src="assets/img/common/arrows.gif" alt="" width="20px" />
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- category area end -->




    <!-- about area -->
    <div class="about-area py-50 mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="about-img">
                            <img src="assets/img/about/01.jpg" alt="">
                        </div>
                        <!-- <div class="about-experience">
                            <h1>20 <span>+</span></h1>
                            <span class="about-experience-text">Years Of Experience</span>
                        </div> -->
                        <div class="about-shape">
                            <img src="assets/img/shape/01.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline">About Us</span>
                            <h2 class="site-title">
                                About SmartMind Real Estate
                            </h2>
                        </div>
                        <p class="about-text">
                            At SmartMind Real Estate, we redefine property investment and homeownership with
                            intelligent,
                            data-driven solutions. Our team of experienced professionals is dedicated to making real
                            estate
                            transactions seamless, efficient, and rewarding. Whether you’re buying, selling, or
                            investing,
                            we ensure every decision is backed by strategic insights and expert guidance.
                        </p>
                        <div class="about-list-wrapper">
                            <ul class="about-list list-unstyled">
                                <li>
                                    <div class="about-icon"><span class="fas fa-check-circle"></span></div>
                                    <div class="about-list-text">
                                        <p>Honesty and transparency in every transaction.s</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-icon"><span class="fas fa-check-circle"></span></div>
                                    <div class="about-list-text">
                                        <p>Using smart technology to simplify real estate processes.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-icon"><span class="fas fa-check-circle"></span></div>
                                    <div class="about-list-text">
                                        <p>Tailoring solutions to meet client needs.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="about-bottom">
                            <a href="about.php" class="theme-btn">Read More <i class="far fa-arrow-right"></i></a>
                            <!-- <div class="about-call">
                                <div class="about-call-icon">
                                    <i class="fal fa-user-headset"></i>
                                </div>
                                <div class="about-call-content">
                                    <span>Call Us Anytime</span>
                                    <h5 class="about-call-number"><a href="tel:+919110231169">+91-9110231169</a></h5>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->



    <!-- property area -->
    <div class="property-listing pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto wow fadeInDown" data-wow-duration="1s" data-wow-delay=".25s">
                    <div class="site-heading text-center mb-30">
                        <span class="site-title-tagline">Featured Listing</span>
                        <h2 class="site-title">Our Featured Listing</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active fs-4" id="pills-bengaluru-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-bengaluru" type="button" role="tab"
                                aria-controls="pills-bengaluru" aria-selected="true">Bengaluru</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fs-4" id="pills-dubai-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-dubai" type="button" role="tab" aria-controls="pills-dubai"
                                aria-selected="false">Dubai</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-bengaluru" role="tabpanel"
                            aria-labelledby="pills-bengaluru-tab">
                            <div class="property-listing-slider owl-carousel owl-theme">
                                <div class="listing-item">
                                    <div class="card border-0 shadow-sm mb-4">
                                        <img src="assets/img/common/list-ban-a.jpg" class="card-img-top"
                                            alt="Whitefield Heights" style="height:216px">
                                        <div class="card-body">
                                            <h5 class="card-title">Whitefield Heights</h5>
                                            <p class="card-text"><i class="bi bi-geo-alt"></i> Whitefield, Bangalore</p>
                                            <p class="fw-bold text-warning">FROM INR 1.8 CRORES*</p>
                                            <button data-bs-toggle="modal" data-bs-target="#enquiryModal"
                                                class="theme-btn mt-2 w-100"><i class="bi bi-envelope"></i> ENQUIRE
                                                NOW</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-item">
                                    <div class="card border-0 shadow-sm mb-4">
                                        <img src="assets/img/common/ban-list-b.jpg" class="card-img-top"
                                            alt="Sarjapur Signature Villas" style="height:216px">
                                        <div class="card-body">
                                            <h5 class="card-title">Sarjapur Signature Villas</h5>
                                            <p class="card-text"><i class="bi bi-geo-alt"></i> Sarjapur Road, Bangalore
                                            </p>
                                            <p class="fw-bold text-warning">FROM INR 2.3 CRORES*</p>
                                            <button data-bs-toggle="modal" data-bs-target="#enquiryModal"
                                                class="theme-btn mt-2 w-100"><i class="bi bi-envelope"></i> ENQUIRE
                                                NOW</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-item">
                                    <div class="card border-0 shadow-sm mb-4">
                                        <img src="assets/img/common/ban-3-c.jpg" class="card-img-top"
                                            alt="Hebbal Lake Residences" style="height:216px">
                                        <div class="card-body">
                                            <h5 class="card-title">Hebbal Lake Residences</h5>
                                            <p class="card-text"><i class="bi bi-geo-alt"></i> Hebbal, Bangalore</p>
                                            <p class="fw-bold text-warning">FROM INR 2.5 CRORES*</p>
                                            <button data-bs-toggle="modal" data-bs-target="#enquiryModal"
                                                class="theme-btn mt-2 w-100"><i class="bi bi-envelope"></i> ENQUIRE
                                                NOW</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-item">
                                    <div class="card border-0 shadow-sm mb-4">
                                        <img src="assets/img/common/ban-loc-d.jpg" class="card-img-top"
                                            alt="Devanahalli Premium Plots" style="height:216px">
                                        <div class="card-body">
                                            <h5 class="card-title">Devanahalli Premium Plots</h5>
                                            <p class="card-text"><i class="bi bi-geo-alt"></i> Devanahalli, Near
                                                Bangalore Airport</p>
                                            <p class="fw-bold text-warning">FROM INR 85 LAKHS*</p>
                                            <button data-bs-toggle="modal" data-bs-target="#enquiryModal"
                                                class="theme-btn mt-2 w-100"><i class="bi bi-envelope"></i> ENQUIRE
                                                NOW</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-dubai" role="tabpanel" aria-labelledby="pills-dubai-tab">
                            <div class="property-listing-slider owl-carousel owl-theme">
                                <div class="listing-item">
                                    <div class="card border-0 shadow-sm mb-4">
                                        <img src="assets/img/common/gallery/dh-1.jpg" class="card-img-top "
                                            alt="DAMAC Riverside Views">
                                        <div class="card-body">
                                            <h5 class="card-title">DAMAC Riverside Views</h5>
                                            <p class="card-text"><i class="bi bi-geo-alt"></i> Dubai Investment Park 2,
                                                UAE</p>
                                            <p class="fw-bold text-warning">FROM INR 2.1 CRORES*</p>
                                            <button data-bs-toggle="modal" data-bs-target="#enquiryModal"
                                                class="theme-btn mt-2 w-100"><i class="bi bi-envelope"></i> ENQUIRE
                                                NOW</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-item">
                                    <div class="card border-0 shadow-sm mb-4">
                                        <img src="assets/img/common/gallery/dh-2.jpg" class="card-img-top"
                                            alt="DAMAC Islands">
                                        <div class="card-body">
                                            <h5 class="card-title">DAMAC Islands</h5>
                                            <p class="card-text"><i class="bi bi-geo-alt"></i> Dubailand, Dubai, UAE</p>
                                            <p class="fw-bold text-warning">FROM INR 5.3 CRORES*</p>
                                            <button data-bs-toggle="modal" data-bs-target="#enquiryModal"
                                                class="theme-btn mt-2 w-100"><i class="bi bi-envelope"></i> ENQUIRE
                                                NOW</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-item">
                                    <div class="card border-0 shadow-sm mb-4">
                                        <img src="assets/img/common/gallery/dh-3.jpg" class="card-img-top "
                                            alt="Violet">
                                        <div class="card-body">
                                            <h5 class="card-title">Violet</h5>
                                            <p class="card-text"><i class="bi bi-geo-alt"></i> DAMAC Hills 2, Dubai, UAE
                                            </p>
                                            <p class="fw-bold text-warning">FROM INR 4.5 CRORES*</p>
                                            <button data-bs-toggle="modal" data-bs-target="#enquiryModal"
                                                class="theme-btn mt-2 w-100"><i class="bi bi-envelope"></i> ENQUIRE
                                                NOW</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-item">
                                    <div class="card border-0 shadow-sm mb-4">
                                        <img src="assets/img/common/gallery/dh-4.jpg" class="card-img-top "
                                            alt="DAMAC Lagoons - Mykonos">
                                        <div class="card-body">
                                            <h5 class="card-title">DAMAC Lagoons – Mykonos</h5>
                                            <p class="card-text"><i class="bi bi-geo-alt"></i> Dubailand, Dubai, UAE</p>
                                            <p class="fw-bold text-warning">FROM INR 6.8 CRORES*</p>
                                            <button data-bs-toggle="modal" data-bs-target="#enquiryModal"
                                                class="theme-btn mt-2 w-100"><i class="bi bi-envelope"></i> ENQUIRE
                                                NOW</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- property area end -->



    <!-- video area -->
    <div class="video-area pb-0">
        <div class="container-fluid px-0">
            <div class="video-content" style="background-image: url(assets/img/video/01.jpg);">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="video-wrapper">
                            <!-- <a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=ckHzmP1evNU">
                                <i class="fas fa-play"></i>
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video area end -->




    <!-- location area -->
    <!-- <div class="location-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto wow fadeInDown" data-wow-duration="1s" data-wow-delay=".25s">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Location</span>
                        <h2 class="site-title">Our Top Location</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-6">
                    <div class="location-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="location-img">
                            <img src="assets/img/location/01.jpg" alt="">
                        </div>
                        <div class="location-info">
                            <h3>New York City</h3>
                            <span>56 Properties</span>
                        </div>
                        <a href="#" class="location-btn"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="location-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">
                        <div class="location-img">
                            <img src="assets/img/location/02.jpg" alt="">
                        </div>
                        <div class="location-info">
                            <h3>San Francisco</h3>
                            <span>25 Properties</span>
                        </div>
                        <a href="#" class="location-btn"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="location-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
                        <div class="location-img">
                            <img src="assets/img/location/03.jpg" alt="">
                        </div>
                        <div class="location-info">
                            <h3>Las Vegas</h3>
                            <span>30 Properties</span>
                        </div>
                        <a href="#" class="location-btn"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="location-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="location-img">
                            <img src="assets/img/location/04.jpg" alt="">
                        </div>
                        <div class="location-info">
                            <h3>Los Angeles</h3>
                            <span>35 Properties</span>
                        </div>
                        <a href="#" class="location-btn"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="location-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">
                        <div class="location-img">
                            <img src="assets/img/location/05.jpg" alt="">
                        </div>
                        <div class="location-info">
                            <h3>Sydney</h3>
                            <span>28 Properties</span>
                        </div>
                        <a href="#" class="location-btn"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="location-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
                        <div class="location-img">
                            <img src="assets/img/location/06.jpg" alt="">
                        </div>
                        <div class="location-info">
                            <h3>New Orleans</h3>
                            <span>50 Properties</span>
                        </div>
                        <a href="#" class="location-btn"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- location area end -->



    <!-- choose area -->
    <div class="choose-area bg pt-70 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto wow fadeInDown" data-wow-duration="1s" data-wow-delay=".25s">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Choose</span>
                        <h2 class="site-title">Why Choose Us</h2>
                    </div>
                </div>
            </div>
            <div class="choose-wrapper">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="choose-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                            <div class="choose-icon">
                                <i class="flaticon-discord"></i>
                            </div>
                            <h4 class="choose-title">Trusted By Thousands</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="choose-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">
                            <div class="choose-icon">
                                <i class="flaticon-calculator"></i>
                            </div>
                            <h4 class="choose-title">Financing Made Easy</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="choose-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
                            <div class="choose-icon">
                                <i class="flaticon-house"></i>
                            </div>
                            <h4 class="choose-title">Wide Renge Of Properties</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- choose area end -->



    <!-- team-area -->
    <!-- <div class="team-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto wow fadeInDown" data-wow-duration="1s" data-wow-delay=".25s">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Agents</span>
                        <h2 class="site-title">Our Featured Agents</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="team-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="team-img">
                            <img src="assets/img/team/01.jpg" alt="thumb">
                        </div>
                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="#">Edna Craig</a></h5>
                                <span>Estate Agent</span>
                            </div>
                            <div class="team-social">
                                <ul class="team-social-btn">
                                    <li><span><i class="far fa-share-alt"></i></span></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="team-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">
                        <div class="team-img">
                            <img src="assets/img/team/02.jpg" alt="thumb">
                        </div>
                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="#">Jeffrey Cox</a></h5>
                                <span>CEO & Founder</span>
                            </div>
                            <div class="team-social">
                                <ul class="team-social-btn">
                                    <li><span><i class="far fa-share-alt"></i></span></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="team-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
                        <div class="team-img">
                            <img src="assets/img/team/03.jpg" alt="thumb">
                        </div>
                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="#">Audrey Gadis</a></h5>
                                <span>Area Agent</span>
                            </div>
                            <div class="team-social">
                                <ul class="team-social-btn">
                                    <li><span><i class="far fa-share-alt"></i></span></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="team-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="team-img">
                            <img src="assets/img/team/04.jpg" alt="thumb">
                        </div>
                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="#">Rodger Garza</a></h5>
                                <span>Area Agent</span>
                            </div>
                            <div class="team-social">
                                <ul class="team-social-btn">
                                    <li><span><i class="far fa-share-alt"></i></span></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- team-area end -->



    <!-- testimonial-area -->
    <div class="testimonial-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto wow fadeInDown" data-wow-duration="1s" data-wow-delay=".25s">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Testimonials</span>
                        <h2 class="site-title text-white">What Our Client Say's</h2>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider owl-carousel owl-theme">
                <div class="testimonial-single">
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="assets/img/common/user-test.png" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>John Doe, Dubai Investor</h4>
                            <p>Clients</p>
                        </div>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            SmartMind Real Estate delivered an outstanding experience from start to finish. Their
                            expertise
                            and personalized service made buying my dream property in Dubai a breeze.
                        </p>
                        <div class="testimonial-quote-icon">
                            <img src="assets/img/icon/quote.svg" alt="">
                        </div>
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-single">
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="assets/img/common/user-test.png" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Sarah Williams, Homeowner</h4>
                            <p>Clients</p>
                        </div>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            I was thoroughly impressed with the level of professionalism and market insight provided
                            by SmartMind. They truly understand the Dubai real estate market.
                        </p>
                        <div class="testimonial-quote-icon">
                            <img src="assets/img/icon/quote.svg" alt="">
                        </div>
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-single">
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="assets/img/common/user-test.png" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Ahmed Al Mansoori</h4>
                            <p>Clients</p>
                        </div>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            The flexible payment options and quality property selections exceeded my expectations.
                            I feel confident in my investment thanks to SmartMind Real Estate.
                        </p>
                        <div class="testimonial-quote-icon">
                            <img src="assets/img/icon/quote.svg" alt="">
                        </div>
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-single">
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="assets/img/common/user-test.png" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Emily Davis, Investor</h4>
                            <p>Clients</p>
                        </div>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            From the first consultation to closing the deal, SmartMind was supportive and informative.
                            Their commitment to client satisfaction is unmatched.
                        </p>
                        <div class="testimonial-quote-icon">
                            <img src="assets/img/icon/quote.svg" alt="">
                        </div>
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-single">
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="assets/img/common/user-test.png" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Michael Smith, Investor</h4>
                            <p>Clients</p>
                        </div>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            I appreciate the detailed market analysis and honest advice provided. It made the process
                            seamless and stress-free, ensuring I found the perfect property in Dubai.
                        </p>
                        <div class="testimonial-quote-icon">
                            <img src="assets/img/icon/quote.svg" alt="">
                        </div>
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial-area end -->






    <!-- cta-area -->
    <div class="cta-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <div class="cta-text">
                        <h1>Looking For Buy Or Sale Or Rent Property?</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet leo tris commodo
                            leo sed, scelerisque turpis. Ut in finibus tellus. </p>
                    </div>
                    <a href="#" class="theme-btn mt-30">Contact Now <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- cta-area end -->




    <!-- blog-area -->
    <!-- <div class="blog-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto wow fadeInDown" data-wow-duration="1s" data-wow-delay=".25s">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Our Blog</span>
                        <h2 class="site-title">Our Latest News & Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="blog-item-img">
                            <img src="assets/img/blog/01.jpg" alt="Thumb">
                        </div>
                        <div class="blog-item-info">
                            <h4 class="blog-title">
                                <a href="#">There are many variations of passages available suffer</a>
                            </h4>
                            <div class="blog-item-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                    <li><a href="#"><i class="far fa-calendar-alt"></i> May 12, 2024</a></li>
                                </ul>
                            </div>
                            <p>
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form.
                            </p>
                            <a class="theme-btn" href="#">Read More<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">
                        <div class="blog-item-img">
                            <img src="assets/img/blog/02.jpg" alt="Thumb">
                        </div>
                        <div class="blog-item-info">
                            <h4 class="blog-title">
                                <a href="#">There are many variations of passages available suffer</a>
                            </h4>
                            <div class="blog-item-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                    <li><a href="#"><i class="far fa-calendar-alt"></i> May 12, 2024</a></li>
                                </ul>
                            </div>
                            <p>
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form.
                            </p>
                            <a class="theme-btn" href="#">Read More<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
                        <div class="blog-item-img">
                            <img src="assets/img/blog/03.jpg" alt="Thumb">
                        </div>
                        <div class="blog-item-info">
                            <h4 class="blog-title">
                                <a href="#">There are many variations of passages available suffer</a>
                            </h4>
                            <div class="blog-item-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                    <li><a href="#"><i class="far fa-calendar-alt"></i> May 12, 2024</a></li>
                                </ul>
                            </div>
                            <p>
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form.
                            </p>
                            <a class="theme-btn" href="#">Read More<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- blog-area end -->



</main>




<!-- footer start -->


<?php include 'footer.php';?>


<!-- footer close -->