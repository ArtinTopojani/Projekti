<?php include "dbConnection.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="navbar.css">
    <script src="index.js"></script>
</head>
<body class="home">

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
                    <a href="dashboard.php">Dashboard</a>
                </li>
                <li>
                    <a href="index.php" class="active">Home</a>
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


    <!--        Hero Section        -->
    <main class="hero-section">
        <div>
            <h1>Welcome <br><span>To our <br></span> <span>Online shop</span></h1>
            
            <!-- <h4>Description</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate rem autem maiores eum architecto eligendi magni excepturi quis dolorum ipsa, sit reprehenderit voluptas iusto non iure veniam. Veritatis, quaerat nisi.</p> -->
        </div>
        <div>
            <img src="/image/image2.png" alt="foto1">
        </div>
    </main>
    <!--        /Hero Section        -->

    <!-- Offers  -->

<section class="offers-container">
    <h2>Best Offers!</h2>
    <p>Çmimet me te lira ne rajon</p>    
</section>

    <section class="offers">
        <!-- =================================== -->
       <a href="product.php" class="produkti-link"> <div class="product grid">
            <img src="/image/p-2.jpg" alt="p1">
            <p>  Ore e Menqur<p>
            <p> <b> 199.50 € </b></p>
        </div> </a>
        <!-- =================================== -->
        <!-- =================================== -->
        <div class="product grid">
            <img src="/image/p-3.jpg" alt="p1">
            <p>  Ore e Menqur<p>
            <p> <b> 199.50 € </b></p>
        </div>
        <!-- =================================== -->
        <!-- =================================== -->
        <div class="product grid">
            <img src="/image/p-4.jpg" alt="p1">
            <p>  Ore e Menqur<p>
            <p> <b> 199.50 € </b></p>
        </div>
        <!-- =================================== -->
        <!-- =================================== -->
        <div class="product grid">
            <img src="/image/p-5.jpg" alt="p1">
            <p>  Ore e Menqur<p>
            <p> <b> 199.50 € </b></p>
        </div>
        <!-- =================================== -->
        <!-- =================================== -->
        <div class="product grid">
            <img src="/image/p-7.jpg" alt="p1">
            <p>  Ore e Menqur<p>
            <p> <b> 199.50 € </b></p>
        </div>
        <!-- =================================== -->
        <!-- =================================== -->
        <div class="product grid">
            <img src="/image/p-7.jpg" alt="p1">
            <p>  Ore e Menqur<p>
            <p> <b> 199.50 € </b></p>
        </div>
        <!-- =================================== -->
        <!-- =================================== -->
        <div class="product grid">
            <img src="/image/p-4.jpg" alt="p1">
            <p>  Ore e Menqur<p>
            <p> <b> 199.50 € </b></p>
        </div>
        <!-- =================================== -->
        <!-- =================================== -->
        <div class="product grid">
            <img src="/image/p-2.jpg" alt="p1">
            <p>  Ore e Menqur<p>
            <p> <b> 199.50 € </b></p>
        </div>
        <!-- =================================== -->
    </section>
    <!-- /Offers -->


    <!-- Section 2 -->

        <!-- <section class="section-2">

            <div class="airpods">

                <h1 class="section-2-heading">AirPods</h1>

                <img src="/image/AirPods/airpods-1.png">
                <img src="/image/AirPods/airpods-2.png" class="img-with-bg">
                
                <div class="airpods-buttons">
                    <button class="airpods-btn">Learn More</button>
                    <button class="airpods-btn">Buy</button>
                </div>


            </div>

        </section> -->

    <!-- End of Section 2 -->

    <button onclick="topFunction()" id="scrollTopBtn" title="ScrollTop"><i class="uil-angle-up uil"></i></button>

    <hr>


        <!-- Section 3 -->

        <!--
        <section class="section-3">
            <div class="slideshow-container">
                <div class="slideShow fade">
                    <img class="slideShowIMG" src="/image/apple-iphone-14-pro-max-silver-mockup-free-png-11662640711kfi4yhf5qu.png" alt="">
                    <div class="text">iPhone 14 Pro Deep Purple</div>
                </div>

                <div class="slideShow fade">
                    <img class="slideShowIMG" src="/image/apple-iphone-14-pro-max-silver-mockup-free-png-11662640711kfi4yhf5qu.png" alt="">
                    <div class="text">iPhone 14 Pro Deep Purple</div>
                </div>

                <div class="slideShow fade">
                    <img class="slideShowIMG" src="/image/apple-iphone-14-pro-max-silver-mockup-free-png-11662640711kfi4yhf5qu.png" alt="">
                    <div class="text">iPhone 14 Pro Deep Purple</div>
                </div>

            </div>

            <br>

            <div>
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
              </div>
              
        </section> -->
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
                <a href="index.html"><li>Home</li></a>
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




    <script src="app.js">
     
    </script>
    
</body>
</html>