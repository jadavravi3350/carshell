<?php
$pageTitle = 'DriveX | Consign Your Vehicle';
$activePage = 'sell';
require 'includes/header.php';
?>
<section class="page-header">
    <div class="container">
        <h1 class="page-title">Sell & Consign</h1>
        <p class="page-desc">Partner with DriveX to sell your premium vehicle to our exclusive network of buyers.</p>
    </div>
</section>

<section class="container" style="padding-bottom: 80px;">
    <div class="premium-card static-card" style="max-width: 600px; margin: 0 auto; padding: 40px;">
        <form action="#" method="post">
            <h2 style="margin-bottom: 30px; text-align: center; font-family: 'Space Grotesk', sans-serif;">Vehicle Details</h2>
            
            <div class="form-group">
                <label for="model"><i class="fa-solid fa-car"></i> Vehicle Make & Model</label>
                <input type="text" id="model" name="model" class="form-control" placeholder="e.g. Porsche 911 GT3" required>
            </div>
            
            <div class="form-group">
                <label for="year"><i class="fa-regular fa-calendar-days"></i> Manufacturing Year</label>
                <input type="number" id="year" name="year" class="form-control" placeholder="e.g. 2022" required>
            </div>
            
            <div class="form-group">
                <label for="price"><i class="fa-solid fa-tag"></i> Expected Valuation (₹)</label>
                <input type="text" id="price" name="price" class="form-control" placeholder="e.g. 1,50,00,000" required>
            </div>
            
            <div class="form-group">
                <label for="fuel"><i class="fa-solid fa-gas-pump"></i> Powertrain Type</label>
                <select id="fuel" name="fuel" class="form-control" required style="appearance: none;">
                    <option value="" disabled selected>Select Option</option>
                    <option>Petrol</option>
                    <option>Diesel</option>
                    <option>Hybrid</option>
                    <option>Electric</option>
                </select>
            </div>
            
            <div class="form-group" style="margin-top: 30px;">
                <button class="btn" type="submit" style="width: 100%;"><i class="fa-solid fa-paper-plane"></i> Submit Request</button>
            </div>
        </form>
    </div>
</section>
<?php require 'includes/footer.php'; ?>