<?php

session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: account.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" href="house-favicon.png">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<!-- NAVIGATION MENUS -->
<nav class="navbar">
    <div class="logo"><a href="home.html">PropFinder</a></div>
    <ul class="nav-links">
        <div class="menu">
            <li><a href="/">Browse</a></li>
            <li><a href="/">About</a></li>
            <li><a href="/">Contact Us</a></li>
            <li><a href="account.html">Account</a></li>
        </div>
    </ul>
</nav>
<body>
<div class="welcome-wrapper">
    <div class="welcome">
        <h1>Hey! <b><?php echo htmlspecialchars($_SESSION["email"]); ?></b>. Welcome to the site.</h1>
        <p>
            <a href="logout.php" class="btn-logout"> Sign out of your Account</a>
        </p>
    </div>
</div>
</body>
<!--Footer-->
<div class="footer-container">
    <div class="footer">
        <div class="footer-heading footer-1">
            <h2>About Us</h2>
            <a href="#">Blog</a>
            <a href="#">Demo</a>
            <a href="#">Customers</a>
            <a href="#">Investors</a>
            <a href="#">Terms of Service</a>
        </div>
        <div class="footer-heading footer-2">
            <h2>Contact Us</h2>
            <a href="#">Jobs</a>
            <a href="#">Support</a>
            <a href="#">Contact</a>
            <a href="#">Sponsorships</a>
        </div>
        <div class="footer-heading footer-3">
            <h2>Social Media</h2>
            <a href="#">Instagram</a>
            <a href="#">Facebook</a>
            <a href="#">Youtube</a>
            <a href="#">Twitter</a>
        </div>
        <div class="footer-email-form">
            <h2>Join our newsletter</h2>
            <label for="footer-email"></label><input type="text" id="footer-email"
                                                     placeholder="Enter your email address">
            <input type="submit" id="footer-email-btn" value="Sign Up">
        </div>
    </div>
</div>
<!--Footer End-->
</html>
