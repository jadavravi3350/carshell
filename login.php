<?php
$pageTitle = 'DriveX | Client Portal Login';
$activePage = 'login';
require 'includes/header.php';
?>
<section class="container" style="min-height: 80vh; display: flex; align-items: center; justify-content: center; padding: 100px 0;">
    <div class="premium-card static-card" style="width: 100%; max-width: 450px; padding: 50px 40px;">
        <div style="text-align: center; margin-bottom: 30px;">
            <h2 style="font-family: 'Space Grotesk', sans-serif; font-size: 2rem;">Welcome Back</h2>
            <p style="color: var(--text-muted);">Access your DriveX portfolio.</p>
        </div>
        
        <form action="#" method="post">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            
            <div class="form-group">
                <div style="display: flex; justify-content: space-between;">
                    <label for="password">Password</label>
                    <a href="#" style="color: var(--text-muted); font-size: 0.85rem; text-decoration: underline;">Forgot?</a>
                </div>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            
            <button class="btn" type="submit" style="width: 100%; margin-top: 20px;">Sign In</button>
            
            <p style="text-align: center; color: var(--text-muted); margin-top: 30px; font-size: 0.95rem;">
                New to DriveX? <a href="register.php" style="color: var(--accent); font-weight: 500;">Create an account</a>
            </p>
        </form>
    </div>
</section>
<?php require 'includes/footer.php'; ?>