<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Daughters Of Malaya | Ecommerce Website Design </title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<?php include 'config.php'; ?>

    <section id="header">
        <a href="home.php"><img src="img/logo.png" width="167" height="115" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="home.php">Home</a></li>
                <li><a href="products.php">Shops</a></li>
                <li><a href="BehindTheBrand.php">About</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="cart.php"><i class='bx bxs-cart'></i></a></li>
                <li><a href="login.php"><i class='bx bxs-user'></i></a></li>
            </ul>
        </div>
    </section>



    <section id="hero">
        <h4>New-Stock</h4>
        <h2>Get glowing, healthy skin in 2<br> simple steps.<br> Yes, it's that easy!</h2>
        <h1>Breakout Combo</h1>
        <p>The PBRS* & SCLM** duo brightens your skin,<br> fades post-acne marks, and repairs your skin barrier.<br><br>

            They feature potent, synergistic ingredients and are formulated to be comfortable on the skin.<br> 
            Think non-sticky and lightweight, perfect for tropical weather!<br><br>
            
            <br>*PBRS: Post-Breakout Recovery Serum
            <br>**SCLM: Summertime Ceramide Liquid Moisturizer</p>
        <a href="SingleProduct6.php"><button class="normal">Shop Now</button></a>
    </section>



    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/freeshipping.png" width="100" height="100" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/online shops.png" width="100" height="100" alt="">
            <h6>Online Shops</h6>
        </div>
        <div class="fe-box">
            <img src="img/saving money.png" width="100" height="100" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/promotion.png" width="100" height="100" alt="">
            <h6>Promotion</h6>
        </div>
        <div class="fe-box">
            <img src="img/happysell.png" width="100" height="100" alt="">
            <h6>Earn Income</h6>
        </div>
        <div class="fe-box">
            <img src="img/support.png" width="100" height="100" alt="">
            <h6>Support</h6>
        </div>
    </section>



    <section id="product1" class="section-p1">
        <h2>Daughters Of Malaya Products</h2>
        <p>SKIN ESSENTIALS</p>
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='SingleProduct.php';">
                <img src="img/SCLM.jpg" alt="">
                <div class="des">
                   <span>Daughters Of Malaya</span>
                   <h5>Summertime Ceramide Liquid Moisturizer 165ml</h5>
                   <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                   </div>
                   <h4>RM 59.00</h4>
                </div>
                <a href="Cart.php"><i class='bx bxs-cart cart'></i></a>
            </div>
            <div class="pro" onclick="window.location.href='SingleProduct2.php';">
                <img src="img/PBRS.jpg" alt="">
                <div class="des">
                   <span>Daughters Of Malaya</span>
                   <h5>Post-Breackout Recovery Serum 30ml</h5>
                   <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                   </div>
                   <h4>RM 59.00</h4>
                </div>
                <a href="Cart.php"><i class='bx bxs-cart cart'></i></a>
            </div>
            <div class="pro" onclick="window.location.href='SingleProduct3.php';">
                <img src="img/SSDL.jpg" alt="">
                <div class="des">
                   <span>Daughters Of Malaya</span>
                   <h5>Sulfur Spot Drying Lotion 30ml</h5>
                   <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                   </div>
                   <h4>RM 35.00</h4>
                </div>
                <a href="Cart.php"><i class='bx bxs-cart cart'></i></a>
            </div>
            <div class="pro" onclick="window.location.href='SingleProduct4.php';">
                <img src="img/SCLM Pocket Size.jpg" alt="">
                <div class="des">
                   <span>Daughters Of Malaya</span>
                   <h5>SCLM Pocket Size 50ml</h5>
                   <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                   </div>
                   <h4>RM 35.00</h4>
                </div>
                <a href="Cart.php"><i class='bx bxs-cart cart'></i></a>
            </div>
            <div class="pro" onclick="window.location.href='SingleProduct5.php';">
                <img src="img/COMBO SCLM + SSDL.jpg" alt="">
                <div class="des">
                   <span>Daughters Of Malaya</span>
                   <h5>COMBO SCLM + SSDL</h5>
                   <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                   </div>
                   <h4>RM 90.00</h4>
                </div>
                <a href="Cart.php"><i class='bx bxs-cart cart'></i></a>
            </div>
            <div class="pro" onclick="window.location.href='SingleProduct6.php';">
                <img src="img/COMBO SCLM + PBRS.jpg" alt="">
                <div class="des">
                   <span>Daughters Of Malaya</span>
                   <h5>COMBO SCLM + PBRS</h5>
                   <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                   </div>
                   <h4>RM 115.00</h4>
                </div>
                <a href="Cart.php"><i class='bx bxs-cart cart'></i></a>
            </div>
            <div class="pro" onclick="window.location.href='SingleProduct7.php';">
                <img src="img/COMBO PBRS + SSDL.jpg" alt="">
                <div class="des">
                   <span>Daughters Of Malaya</span>
                   <h5>COMBO PBRS + SSDL</h5>
                   <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                   </div>
                   <h4>RM 90.00</h4>
                </div>
                <a href="Cart.php"><i class='bx bxs-cart cart'></i></a>
            </div>
            <div class="pro" onclick="window.location.href='SingleProduct8.php';">
                <img src="img/COCG.jpg" alt="">
                <div class="des">
                   <span>Daughters Of Malaya</span>
                   <h5>Charcoal Oil Cleansing Gel 65ml</h5>
                   <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                   </div>
                   <h4>RM 52.00</h4>
                </div>
                <a href="Cart.php"><i class='bx bxs-cart cart'></i></a>
            </div>
        </div>
    </section>
    

    
    <!----banner
    <section id="banner" class="section-m1">
        <h4>Let's Join Affiliate</h4>
        <h2>Hey there! Thanks for your interest to be our Affiliate.<br> Our Affiliate Program is still in beta phase and for now, the program is <span>only open via invitation.</span></h2>
        <button class="normal"><a href="RegisterPage.html">Register here</a></button>
    </section>
    --banner-->


    <!----newsletter
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up for Newsletter</h4> 
            <p>Get E-mail updates about our latest products and <span>special offers</span></p>
        </div>
        <div class="form"></div>
           <input type="text" placeholder="your E-mail address">
           <button class="normal"><a href="LoginPage.html" style="color:whitesmoke">Sign Up</a></button>
        </div>
    </section>
    --newsletter-->
    

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" width="150" height="111" alt="">
            <h4>Our Philosophy</h4>
            <p><strong>No fancy for nothing<br>
            At Daughters of Malaya, our philosophy is to make<br>  
            simple and affordable skincare products based on ingredients<br> 
            that are proven effective and market them using<br> 
            no-nonsense claims.</strong></p>
            <div class="follow">
                <h4>follow us</h4>
                <div class="icon">
                    <a href="https://twitter.com/domskincare"><i class='bx bxl-twitter bx-md'></a></i>
                    <a href=""><i class='bx bxl-instagram-alt bx-md'></a></i>
                    <a href="https://www.tiktok.com/@daughtersofmalaya"><i class='bx bxl-tiktok bx-md'></a></i>
                    <a href="https://www.facebook.com/daughtersofmalaya"><i class='bx bxl-facebook-circle bx-md'></a></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>Information</h4>
            <a href="BehindTheBrand.php">Behind the Brand</a>
            <a href="OurCommitment.php">Our Commitment</a>
            <a href="BeautyBlog.php">Beauty Blog</a>
            <a href="Contact.php">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="MyAccount.php">My Account</a>
            <a href="ReceiptUpload.php">Receipt Upload</a>
        </div>
        
        <div class="col">
            <h4>Policies</h4>
            <a href="Terms&Conditions.php">Terms & Conditions</a>
            <a href="PrivacyPolicy.php">Privacy Policy</a>
            <a href="Shipping&Delivery.php">Shipping & Delivery</a>
            <a href="Return&Refund.php">Return & Refund Policy</a>
            <a href="InfluencerReviewPolicy.php">Influencer Review Policy</a>
        </div>

        <div class="col install">
            <h4>Payment Method</h4>
            <img src="img/billplz2.png" width="100" height="50" alt="">
            <img src="img/secure encryption.png" width="150" height="80" alt="">
        </div>

        <div class="copyright">
            <p>Copyright © 2023 Daughters of Malaya. All rights reserved.</p>
        </div>
    </footer>


</body>
</html>