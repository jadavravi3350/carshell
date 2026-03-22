<?php
$pageTitle = 'DriveX | The Journal';
$activePage = 'blog';
require 'includes/header.php';
?>
<section class="page-header">
    <div class="container">
        <h1 class="page-title text-gradient">The Journal</h1>
        <p class="page-desc">News, insights, and stories from the world of luxury automotive.</p>
    </div>
</section>

<section class="container" style="padding-bottom: 80px;">
    <div class="premium-grid">
        <article class="premium-card">
            <div class="img-wrapper" style="height:200px;">
                <span class="premium-badge" style="background:var(--accent);">Latest</span>
                <img src="https://images.unsplash.com/photo-1583121274602-3e2820c69888?auto=format&fit=crop&w=800&q=80" alt="Ferrari" loading="lazy">
                <div class="image-overlay-gradient"></div>
            </div>
            <div class="car-details">
                <p style="color:var(--accent); font-size:0.85rem; font-weight:600; margin-bottom:10px;">MARKET INSIGHTS</p>
                <h3 style="font-family:'Space Grotesk', sans-serif;">The Rise of Exotic EVs in 2024</h3>
                <p style="color:var(--text-muted); font-size:0.95rem; margin-bottom:20px;">Discover how electric powertrains are redefining what it means to be a supercar.</p>
                <a href="#" style="color:#fff; font-weight:500; text-decoration:underline;">Read Article</a>
            </div>
        </article>
        
        <article class="premium-card">
            <div class="img-wrapper" style="height:200px;">
                <img src="https://images.unsplash.com/photo-1549399542-7e3f8b79c341?auto=format&fit=crop&w=800&q=80" alt="Aston Martin" loading="lazy">
                <div class="image-overlay-gradient"></div>
            </div>
            <div class="car-details">
                <p style="color:var(--accent); font-size:0.85rem; font-weight:600; margin-bottom:10px;">REVIEWS</p>
                <h3 style="font-family:'Space Grotesk', sans-serif;">Driving the new Vantage</h3>
                <p style="color:var(--text-muted); font-size:0.95rem; margin-bottom:20px;">An uncompromising look at Aston Martin's latest masterpiece on the track.</p>
                <a href="#" style="color:#fff; font-weight:500; text-decoration:underline;">Read Article</a>
            </div>
        </article>

        <article class="premium-card">
            <div class="img-wrapper" style="height:200px;">
                <img src="https://images.unsplash.com/photo-1614200187524-dc4b892acf16?auto=format&fit=crop&w=800&q=80" alt="Porsche Interior" loading="lazy">
                <div class="image-overlay-gradient"></div>
            </div>
            <div class="car-details">
                <p style="color:var(--accent); font-size:0.85rem; font-weight:600; margin-bottom:10px;">LIFESTYLE</p>
                <h3 style="font-family:'Space Grotesk', sans-serif;">The Art of Bespoke Interiors</h3>
                <p style="color:var(--text-muted); font-size:0.95rem; margin-bottom:20px;">Why custom cabin materials are the new frontier of automotive luxury.</p>
                <a href="#" style="color:#fff; font-weight:500; text-decoration:underline;">Read Article</a>
            </div>
        </article>
    </div>
</section>
<?php require 'includes/footer.php'; ?>