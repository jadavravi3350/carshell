<?php
$pageTitle = 'DriveX | Premium Collection';
$activePage = 'buy';
require 'includes/header.php';

// Updated array with more premium details
$carsForSale = [
    ["name" => "Nissan GT-R", "price" => "₹2.12 Crore", "img" => "https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?auto=format&fit=crop&w=1000&q=80", "year" => "2020", "fuel" => "Petrol", "type" => "Automatic"],
    ["name" => "Mercedes-Benz S-Class", "price" => "₹1.71 Crore", "img" => "https://images.unsplash.com/photo-1563720223185-11003d516935?auto=format&fit=crop&w=1000&q=80", "year" => "2023", "fuel" => "Diesel", "type" => "Automatic"],
    ["name" => "BMW M8 Competition", "price" => "₹2.44 Crore", "img" => "https://images.unsplash.com/photo-1556800572-1b8aeef2c54f?auto=format&fit=crop&w=1000&q=80", "year" => "2022", "fuel" => "Petrol", "type" => "Automatic"],
    ["name" => "Audi Q8", "price" => "₹1.43 Crore", "img" => "https://images.unsplash.com/photo-1541899481282-d53bffe3c35d?auto=format&fit=crop&w=1000&q=80", "year" => "2023", "fuel" => "Petrol", "type" => "Automatic"],
    ["name" => "Porsche Panamera", "price" => "₹1.68 Crore", "img" => "https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1000&q=80", "year" => "2022", "fuel" => "Hybrid", "type" => "Automatic"],
    ["name" => "Land Rover Defender", "price" => "₹1.30 Crore", "img" => "https://images.unsplash.com/photo-1520031441872-265e4ff70366?auto=format&fit=crop&w=1000&q=80", "year" => "2023", "fuel" => "Diesel", "type" => "Automatic"],
];
?>
<section class="page-header">
    <div class="container">
        <h1 class="page-title text-gradient">The Collection</h1>
        <p class="page-desc">Curated excellence. Browse our current inventory of world-class, verified luxury vehicles.</p>
    </div>
</section>

<section class="premium-cars-section container" style="padding-top: 20px;">
    <div class="premium-grid">
        <?php foreach ($carsForSale as $car): ?>
            <article class="premium-card">
                <div class="img-wrapper">
                    <span class="premium-badge"><i class="fa-solid fa-check-circle" style="color: #4cd137;"></i> Verified</span>
                    <img src="<?= htmlspecialchars($car['img']); ?>" alt="<?= htmlspecialchars($car['name']); ?>" loading="lazy">
                    <div class="image-overlay-gradient"></div>
                </div>
                <div class="car-details">
                    <h3><?= htmlspecialchars($car['name']); ?></h3>
                    <p class="price"><?= htmlspecialchars($car['price']); ?></p>
                    <div class="car-specs-minimal" style="margin-bottom: 20px;">
                        <span><i class="fa-regular fa-calendar"></i> <?= $car['year']; ?></span>
                        <span><i class="fa-solid fa-gas-pump"></i> <?= $car['fuel']; ?></span>
                        <span><i class="fa-solid fa-gear"></i> <?= $car['type']; ?></span>
                    </div>
                    <button class="btn outline-btn" style="width: 100%;"><i class="fa-solid fa-phone"></i> Inquire Now</button>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<?php require 'includes/footer.php'; ?>