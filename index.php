<?php
$pageTitle = "DriveX - Premium Car Marketplace";
$activePage = 'home';

// High-end car images for a premium feel
$featuredCars = [
    ["name" => "Porsche 911 Carrera", "price" => "₹1.80 Crore", "img" => "https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1000&q=80", "year" => "2023", "fuel" => "Petrol", "type" => "Automatic"],
    ["name" => "Audi RS7 Sportback", "price" => "₹2.20 Crore", "img" => "https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?auto=format&fit=crop&w=1000&q=80", "year" => "2022", "fuel" => "Petrol", "type" => "Automatic"],
    ["name" => "Range Rover Velar", "price" => "₹89 Lakh", "img" => "https://images.unsplash.com/photo-1563720223185-11003d516935?auto=format&fit=crop&w=1000&q=80", "year" => "2023", "fuel" => "Diesel", "type" => "Automatic"],
    ["name" => "Mercedes-Benz G-Class", "price" => "₹2.55 Crore", "img" => "https://images.unsplash.com/photo-1520031441872-265e4ff70366?auto=format&fit=crop&w=1000&q=80", "year" => "2021", "fuel" => "Diesel", "type" => "Automatic"],
];

require 'includes/header.php'; 
?>

<!-- 🌟 NEW SPLIT-LAYOUT FLOATING HERO 🌟 -->
<section class="split-hero" id="home">
    <div class="container hero-grid">
        <div class="hero-text-content reveal-up">
            <span class="hero-subtitle">The New Standard of Luxury</span>
            <h1>Expect the <br><span class="text-gradient">Exceptional.</span></h1>
            <p>Elevate your lifestyle with our curated selection of verified exotic, premium, and luxury vehicles. Your dream garage awaits.</p>
            <div class="hero-buttons">
                <a href="buy.php" class="btn"><i class="fa-solid fa-car"></i> View Collection</a>
                <a href="sell.php" class="btn outline-btn"><i class="fa-solid fa-tag"></i> Consign Vehicle</a>
            </div>
        </div>
        <div class="hero-media-wrapper reveal-up" style="transition-delay: 0.2s;">
            <div class="hero-floating-card"></div>
        </div>
    </div>
</section>

<!-- 🌟 BRANDS MARQUEE 🌟 -->
<section class="brands-section reveal-up">
    <div class="container">
        <p>Curating the World's Best Marques</p>
        <div class="brands-grid">
            <i class="fa-brands fa-porsche"></i>
            <i class="fa-solid fa-car-side"></i> <!-- Fallbacks for brands lacking exact free FA icons -->
            <i class="fa-solid fa-car-burst"></i>
            <i class="fa-brands fa-jedi-order"></i> <!-- Decorative substitution -->
            <i class="fa-solid fa-car-rear"></i>
        </div>
    </div>
</section>

<!-- PREMIUM FEATURED CARS (Existing section with reveal up) -->
<section class="premium-cars-section container reveal-up" id="buy" style="padding-top: 100px;">
    <div class="section-header-split">
        <div>
            <span class="section-micro-title">Exclusive Collection</span>
            <h2 class="title-left">Featured Vehicles</h2>
        </div>
        <a href="buy.php" class="btn outline-btn view-all-btn">Full Inventory <i class="fa-solid fa-arrow-right"></i></a>
    </div>
    
    <div class="premium-grid">
        <?php foreach ($featuredCars as $car): ?>
            <article class="premium-card reveal-up">
                <div class="img-wrapper">
                    <span class="premium-badge">Available</span>
                    <img src="<?= htmlspecialchars($car['img']); ?>" alt="<?= htmlspecialchars($car['name']); ?>" loading="lazy" />
                    <div class="image-overlay-gradient"></div>
                </div>
                <div class="car-details">
                    <h3><?= htmlspecialchars($car['name']); ?></h3>
                    <p class="price"><?= htmlspecialchars($car['price']); ?></p>
                    
                    <div class="car-specs-minimal">
                        <span><?= $car['year']; ?></span> • 
                        <span><?= $car['fuel']; ?></span> • 
                        <span><?= $car['type']; ?></span>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<!-- 🌟 HOW IT WORKS 🌟 -->
<section class="how-it-works">
    <div class="container">
        <div class="reveal-up">
            <span class="section-micro-title" style="text-align: center; margin-bottom: 15px;">Process</span>
            <h2 class="title-left" style="text-align: center;">How DriveX Works</h2>
        </div>
        <div class="steps-grid">
            <div class="step-card reveal-up" style="transition-delay: 0.1s;">
                <div class="step-number">1</div>
                <h3>Browse & Select</h3>
                <p>Explore our exclusive digital showroom containing hundreds of 150-point inspected premium vehicles.</p>
            </div>
            <div class="step-card reveal-up" style="transition-delay: 0.2s;">
                <div class="step-number">2</div>
                <h3>Concierge Purchase</h3>
                <p>Our dedicated advisors handle the paperwork, financing, and legal transfers so you don't have to lift a finger.</p>
            </div>
            <div class="step-card reveal-up" style="transition-delay: 0.3s;">
                <div class="step-number">3</div>
                <h3>White-Glove Delivery</h3>
                <p>Your vehicle is detailed to perfection and delivered directly to your driveway via covered transport.</p>
            </div>
        </div>
    </div>
</section>

<!-- 🌟 VIP TESTIMONIALS 🌟 -->
<section class="testimonials">
    <div class="container">
        <div class="section-header-split reveal-up">
            <div>
                <span class="section-micro-title">Client Stories</span>
                <h2 class="title-left">The DriveX Experience</h2>
            </div>
        </div>
        
        <div class="testimonials-grid">
            <div class="testimonial-card reveal-up" style="transition-delay: 0.1s;">
                <p class="quote">"Absolutely phenomenal service. I consigned my Ferrari 488 and DriveX found a verified buyer in less than two weeks. Seamless process from start to finish."</p>
                <div class="testimonial-author">
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=150&q=80" alt="Avatar 1" loading="lazy">
                    <div class="author-info">
                        <h4>Arjun Mehta</h4>
                        <span>Mumbai, Maharashtra</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-card reveal-up" style="transition-delay: 0.3s;">
                <p class="quote">"Buying my first Porsche sight-unseen felt risky, but the DriveX 150-point inspection and video walkthrough eased all my concerns. The car arrived in pristine condition."</p>
                <div class="testimonial-author">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=150&q=80" alt="Avatar 2" loading="lazy">
                    <div class="author-info">
                        <h4>Priya Sharma</h4>
                        <span>Delhi NCR</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require 'includes/footer.php'; ?>
