<?php include "dbConnection.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="product.css">
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
                    <a href="" class="active">Home</a>
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
    
<section class="single-product grid">
    <div id="slider">
        <img src="../image/product-img.jpg" id="image">
        <button id="prevBtn"><i class="uil uil-arrow-left"></i></button>
        <button id="nextBtn"><i class="uil uil-arrow-right"></i></button>
    </div>

<div class="product-info grid">
    <h1>Ndegjuese</h1>
    <div class="star-icon flex">
        <div>
            <i class="uil-star"></i>
            <i class="uil-star"></i>
            <i class="uil-star"></i>
            <i class="uil-star"></i>
            <i class="uil-star"></i>
        </div>
        <div>
            <p class="review">(1 costumer review)</p>
        </div>
    </div>
    <div class="price">
        <p style="font-size: 30px;"><b> $ 189.00</b></p>
    </div>

    <div>
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus nihil ad aspernatur molestiae sed repudiandae voluptatum, iste non dolorum, molestias voluptatibus dolores dignissimos illo architecto reprehenderit quae tempore quod minima!</p>
    </div>

    <div class="product-button">
        <a href="payment.php"><button class="product-btn">
            Add to cart
        </button></a>
    </div>

    <div>
        <p style=>Category: <span style="color: #ff0038;">Headphone</span></p>
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

<script src="product.js"></script>
<script src="app.js"></script>

</body>
</html>