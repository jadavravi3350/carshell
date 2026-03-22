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

<!-- PREMIUM HERO SECTION -->
<section class="premium-hero" id="home">
    <div class="hero-overlay"></div>
    <div class="container hero-content-wrapper">
        <div class="hero-text-area">
            <span class="hero-subtitle">Elevate Your Drive</span>
            <h1>Discover <span class="text-highlight">Uncompromised</span> Luxury.</h1>
            <p>The most exclusive selection of premium and exotic vehicles, verified for excellence. Experience the thrill of perfection.</p>
            <a href="buy.php" class="btn">Browse Collection</a>
        </div>
    </div>
</section>

<!-- PREMIUM FEATURED CARS -->
<section class="premium-cars-section container" id="buy">
    <div class="section-header-split">
        <div>
            <span class="section-micro-title">Exclusive Collection</span>
            <h2 class="title-left">Featured Vehicles</h2>
        </div>
        <a href="buy.php" class="btn outline-btn view-all-btn">Explore Inventory <i class="fa-solid fa-arrow-right"></i></a>
    </div>
    
    <div class="premium-grid">
        <?php foreach ($featuredCars as $car): ?>
            <article class="premium-card">
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

<section class="content-section container">
    <div class="section-header-split" style="text-align:center; display:block; margin-bottom: 40px;">
        <span class="section-micro-title">Why DriveX</span>
        <h2 class="title-left">The Ultimate Standard</h2>
    </div>
    <div class="premium-grid" style="grid-template-columns: repeat(3, 1fr);">
        <div class="premium-card" style="padding: 30px; text-align: center;">
            <i class="fa-solid fa-shield-halved text-highlight" style="font-size: 3rem; margin-bottom: 20px;"></i>
            <h3 style="margin-bottom: 10px;">Verified Quality</h3>
            <p style="color: var(--text-muted); font-size: 0.95rem;">Every vehicle undergoes a rigorous 150-point inspection.</p>
        </div>
        <div class="premium-card" style="padding: 30px; text-align: center;">
            <i class="fa-solid fa-handshake-angle text-highlight" style="font-size: 3rem; margin-bottom: 20px;"></i>
            <h3 style="margin-bottom: 10px;">Concierge Service</h3>
            <p style="color: var(--text-muted); font-size: 0.95rem;">White-glove delivery and personalized buying experience.</p>
        </div>
        <div class="premium-card" style="padding: 30px; text-align: center;">
            <i class="fa-solid fa-sack-dollar text-highlight" style="font-size: 3rem; margin-bottom: 20px;"></i>
            <h3 style="margin-bottom: 10px;">Secure Financing</h3>
            <p style="color: var(--text-muted); font-size: 0.95rem;">Tailored financing solutions fitting your luxury lifestyle.</p>
        </div>
    </div>
</section>

<?php require 'includes/footer.php'; ?>
