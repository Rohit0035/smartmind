<!-- footer start -->

<?php include 'header.php';?>


<!-- footer close -->
<style>
.offer-banner {
    background: linear-gradient(to right, #ff416c, #ff4b2b);
    color: white;
    text-align: center;
    padding: 15px;
    font-size: 1.4rem;
    font-weight: 600;
}

.property-image {
    border-radius: 1rem;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    /* max-height: 350px; */
    object-fit: cover;
}

.highlight-box {
    background-color: #fff;
    border-left: 5px solid #0d6efd;
    padding: 20px;
    margin-top: 20px;
    border-radius: 0.5rem;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
}

.amenity-icon {
    font-size: 1.3rem;
    color: #198754;
    margin-right: 10px;
}

.cta-btn {
    font-size: 1.1rem;
    padding: 10px 20px;
}

.grid-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 15px;
    padding: 0;
    list-style: none;
}

.grid-list li {
    background-color: #ffffff;
    padding: 12px 16px;
    border-radius: 0.5rem;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.06);
    display: flex;
    align-items: center;
    gap: 10px;
    transition: transform 0.2s ease;
    border-left: 4px solid #2c719a;

}

.grid-list li:hover {
    transform: translateY(-3px);
}
</style>

<main class="main">

    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">🎉 !!! SPECIAL OFFER !!! – 2% DLD WAIVER</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.php">Home</a></li>
                <li class="active">🎉 !!! SPECIAL OFFER !!! – 2% DLD WAIVER</li>
            </ul>
        </div>
    </div>

    <section class="my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="assets/img/common/grid-home-1.jpg" class="img-fluid property-image"
                        alt="Violet 4 Unit Image" width="100%" />
                </div>
                <div class="col-lg-6">
                    <h1 class="fw-bold mb-3">🏡 Violet 4 – 4BR Luxury Unit</h1>
                    <p class="lead">Located in the heart of <strong>Damac Hills 2</strong>, one of Dubai’s largest
                        master
                        communities (55M+ sqft) with stunning lifestyle amenities.</p>

                    <div class="highlight-box mt-4">
                        <p><i class="bi bi-aspect-ratio-fill me-2 text-primary"></i><strong>Area:</strong> 2352 sqft
                            (approx
                            220 m²)</p>
                        <p><i class="bi bi-cash-coin me-2 text-success"></i><strong>Price:</strong> 1,994,000 AED</p>
                        <p><i class="bi bi-calendar2-check me-2 text-info"></i><strong>Completion:</strong> August 2027
                        </p>
                    </div>

                    <a href="tel:+971XXXXXXXXX" class="btn btn-primary cta-btn mt-4">
                        <i class="bi bi-telephone-forward-fill me-2"></i> Contact Now
                    </a>
                </div>
            </div>

            <hr class="my-5" />

            <div class="mb-5">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">SmartMind</span>
                    <h2 class="site-title">🌟 Unique Amenities</h2>
                </div>
                <ul class="grid-list">
                    <li><i class="bi bi-water amenity-icon"></i> Lazy River</li>
                    <li><i class="bi bi-beach amenity-icon"></i> Malibu Beach</li>
                    <li><i class="bi bi-boat amenity-icon"></i> Boating Lake</li>
                    <li><i class="bi bi-tsunami amenity-icon"></i> Wave Surfing</li>
                    <li><i class="bi bi-heart-pulse amenity-icon"></i> Jogging Track & Gym</li>
                    <li><i class="bi bi-fire amenity-icon"></i> BBQ Areas</li>
                    <li><i class="bi bi-shield-check amenity-icon"></i> Pet Farm</li>
                    <li><i class="bi bi-emoji-smile amenity-icon"></i> Children’s Playground</li>
                    <li><i class="bi bi-trophy amenity-icon"></i> Volleyball, Basketball, Tennis & Paddle Courts</li>
                    <li><i class="bi bi-dribbble amenity-icon"></i> Football & Cricket Fields</li>
                    <li><i class="bi bi-buildings amenity-icon"></i> Community Centre</li>
                    <li><i class="bi bi-fish amenity-icon"></i> Fishing Lake</li>
                </ul>
            </div>
        </div>
    </section>


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
</main>


<!-- footer start -->

<?php include 'footer.php';?>

<!-- footer close -->