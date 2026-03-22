<?php
$pageTitle = 'DriveX | Register';
$activePage = 'register';
require 'includes/header.php';
?>
<section class="container" style="min-height: 80vh; display: flex; align-items: center; justify-content: center; padding: 100px 0;">
    <div class="premium-card" style="width: 100%; max-width: 500px; padding: 50px 40px;">
        <div style="text-align: center; margin-bottom: 30px;">
            <h2 style="font-family: 'Space Grotesk', sans-serif; font-size: 2rem;">Join Exclusive Member</h2>
            <p style="color: var(--text-muted);">Unlock premium features and personalized services.</p>
        </div>
        
        <form action="#" method="post">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="fname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lname" class="form-control" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            
            <button class="btn" type="submit" style="width: 100%; margin-top: 20px;">Create Account</button>
            
            <p style="text-align: center; color: var(--text-muted); margin-top: 30px; font-size: 0.95rem;">
                Already have an account? <a href="login.php" style="color: var(--accent); font-weight: 500;">Sign in</a>
            </p>
        </form>
    </div>
</section>
<?php require 'includes/footer.php'; ?>