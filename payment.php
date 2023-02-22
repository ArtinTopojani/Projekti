<?php include "dbConnection.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="payment.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>

<!-- NAVBAR -->
<header class="nav">
    <div class="logo">
        <img src="" alt="">
    </div>

    <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <div class="nav-bar">
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="aboutus.html">About Us</a>
            </li>
            <li>
                <a href="#footer">Contact</a>
            </li>
            <li>
                <a href="login.php">Log in</a>
            </li>
        </ul>
    </div>
</header>
<!-- END OF NAVBAR -->

<div>
    <h1 style="text-align: center">Payment Info</h1>
</div>

<section class="single-product grid">
    <div>
        <img src="/image/product-img.jpg">
    </div>

    <div class="product-info grid">
        <h1 id="productName">Ndegjuese</h1>



        <div class="inputs">
            <div>
                <input type="text" placeholder="First name..." id="name"> <input type="text" placeholder="Last name..." id="lastname">
            </div>
            <div>
                <input type="text" placeholder="Phone number..." id="numer"> <input type="text" placeholder="Company...(Optional)" id="company">
            </div>
            <div>
                <input type="text" placeholder="Address..." id="Address"> <input type="text"placeholder="City..." id="city">
            </div>
            <div>
                <input type="text"placeholder="State..." id="State"> <input type="text"placeholder="Zip code..." id="zipcode">
            </div>
        </div>







        <div class="price">
            <p>Product: <b>$<span id="paymentProductPrice">0</span></b></p>
            <p>Quantity: <span id="quantity"><b>1</b> </span> pcs </p>
            <hr>
            <h2 id="totaliPrice">Totali: <b> $189.00</b></h2>
        </div>

        <div class="product-button">
            <button id="confirmBtn"> Confirm</button>
        </div>

    </div>
</section>
<hr>

<!-- Footer Section -->


<footer id="footer">

    <section class="footer-section">

        <div class="footer-thank">
            <h3>Thank You!</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat nobis quam non ad exercitationem ex ut tempore pariatur, quas culpa assumenda vero dolorem iste voluptates magni at quaerat nemo eligendi.</p>
            <a href="https://facebook.com"><i class="uil-facebook-f uil"></i></a>
            <a href="https://instagram.com"><i class="uil-instagram uil"></i></a>
            <a href="https://linkedin.com"><i class="uil-linkedin uil"></i></a>
            <a href="https://twitter.com"><i class="uil-twitter uil"></i></a>
        </div>

        <div class="footer-contact">
            <h3>Contact</h3>
            <p>+383 49 494 494 Prishtina, Rruga B 71000, Kosove </p>
        </div>

        <div class="footer-menu">
            <h3>Quick Links</h3>
            <ul>
                <a href="index.php"><li>Home</li></a>
                <a href="aboutus.html"><li>About Us</li></a>
                <a href="login.php"><li>Log in</li></a>

            </ul>
        </div>

    </section>

    <section class="copyRight-section">
        <div class="copyRight">
            <p>© 2022 Projekti Web. All rights reserved.</p>
        </div>
    </section>

</footer>

<!-- End of Footer Section -->


<script src="app.js"></script>
<script src="payment.js"></script>

</body>
</html>