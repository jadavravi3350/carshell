<?php
if (!isset($pageTitle)) {
    $pageTitle = 'DriveX - Premium Car Marketplace';
}
if (!isset($activePage)) {
    $activePage = 'home';
}
?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($pageTitle); ?></title>
    <!-- DriveX Custom Favicon -->
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='20' fill='%230a0a0c'/><text x='50%' y='50%' font-family='sans-serif' font-weight='bold' font-size='60' fill='%23ff3f34' dominant-baseline='central' text-anchor='middle'>X</text></svg>">
    <!-- Use Preconnect for faster font loading -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Modern Premium Fonts: Outfit & Space Grotesk -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body class="smooth-scroll">
<div class="topbar">
    <div class="container topbar-flex">
        <div class="contact-info">
            <span><i class="fa-solid fa-phone"></i> +91 8238270948</span>
            <span><i class="fa-solid fa-envelope"></i> support@drivex.com</span>
        </div>
        <div class="topbar-links">
            <a href="dealer-login.php"><i class="fa-solid fa-user-tie"></i> Dealer Area</a>
            <a href="sell.php"><i class="fa-solid fa-handshake"></i> Become a Partner</a>
        </div>
    </div>
</div>

<div class="mobile-overlay" id="mobileOverlay"></div>

<header class="navbar" id="navbar">
    <div class="container nav-flex">
        <a class="logo" href="index.php">Drive<span>X</span></a>
        
        <div class="nav-right">
            <ul class="menu" id="navMenu">
                <li><a href="index.php" class="<?= $activePage === 'home' ? 'active' : '' ?>">Home</a></li>
                <li><a href="buy.php" class="<?= $activePage === 'buy' ? 'active' : '' ?>">Collection</a></li>
                <li><a href="sell.php" class="<?= $activePage === 'sell' ? 'active' : '' ?>">Sell</a></li>
                <li><a href="dealers.php" class="<?= $activePage === 'dealers' ? 'active' : '' ?>">Dealers</a></li>
                <li><a href="blog.php" class="<?= $activePage === 'blog' ? 'active' : '' ?>">Journal</a></li>
                <li><a href="contact.php" class="<?= $activePage === 'contact' ? 'active' : '' ?>">Contact</a></li>
                
                <!-- Mobile CTA inside menu for mobile view -->
                <li class="mobile-only-cta"><a href="sell.php" class="btn" style="color:#fff;">Consign Vehicle</a></li>
            </ul>
            
            <a href="sell.php" class="btn header-cta"><i class="fa-solid fa-plus"></i> Consign</a>
            
            <button id="themeToggleBtn" class="theme-toggle" aria-label="Toggle Theme">
                <i class="fa-regular fa-moon"></i>
            </button>
            
            <button class="menu-btn" id="menuBtn" aria-label="Open menu"><i class="fa-solid fa-bars"></i></button>
        </div>
    </div>
</header>