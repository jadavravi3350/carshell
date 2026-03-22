<?php
$pageTitle = 'DriveX | Contact Concierge';
$activePage = 'contact';
require 'includes/header.php';
?>
<section class="page-header">
    <div class="container">
        <h1 class="page-title">Personal Concierge</h1>
        <p class="page-desc">Our dedicated team is available 24/7 to assist you with inquiries, test drive arrangements, and exclusive viewing appointments.</p>
    </div>
</section>

<section class="container" style="padding-bottom: 80px;">
    <div class="premium-grid" style="grid-template-columns: 1fr 1.5fr; gap: 50px;">
        <div class="contact-info-block">
            <h2 style="font-family: 'Space Grotesk', sans-serif; margin-bottom: 30px;">Get in Touch</h2>
            <div style="margin-bottom: 20px;">
                <h4 style="color:var(--accent); margin-bottom:5px;"><i class="fa-solid fa-location-dot"></i> Headquarters</h4>
                <p style="color:var(--text-muted);">DriveX Premium Automotive<br>SG Highway, Ahmedabad<br>Gujarat, India 380015</p>
            </div>
            <div style="margin-bottom: 20px;">
                <h4 style="color:var(--accent); margin-bottom:5px;"><i class="fa-solid fa-phone"></i> VIP Support line</h4>
                <p style="color:var(--text-muted);">+91 8238270948</p>
            </div>
            <div style="margin-bottom: 20px;">
                <h4 style="color:var(--accent); margin-bottom:5px;"><i class="fa-solid fa-envelope"></i> Email</h4>
                <p style="color:var(--text-muted);">concierge@drivex.com</p>
            </div>
        </div>

        <div class="premium-card" style="padding: 40px;">
            <form action="#" method="post">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="John Doe" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="john@example.com" required>
                </div>
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" class="form-control" rows="5" placeholder="How can we assist you today?" required></textarea>
                </div>
                <button class="btn" type="submit" style="width: 100%; margin-top: 10px;"><i class="fa-solid fa-paper-plane"></i> Send Message</button>
            </form>
        </div>
    </div>
</section>
<?php require 'includes/footer.php'; ?>