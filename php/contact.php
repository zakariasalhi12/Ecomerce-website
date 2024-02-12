<?php
include("include3.php")

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="../js/main.js"></script>
    <title>Conact us</title>
</head>

<body>

<!--     header     -->

    <header class="simple-header">
        <div class="logo-container">
            <a href="../main.php" style="color: white;"><h1>Ultimate <span>watches</span></h1></a>
        </div>
        <div>
            <a href="../main.php">
                <i class="fa-solid fa-house"></i>
              Home</a>
            <a href="shop.php">
                <i class="fa-solid fa-cart-shopping"></i>
                Shop</a>
            <a href="contact.php">
                <i class="fa-solid fa-phone"></i>
                Contact</a>
            <a href="about.php">
                <i class="fa-solid fa-address-card"></i>
                About us</a>
        </div>
    </header>
    
<!--    phone header     -->

    <header class="phone-header">
        <div class="logo-container">
            <a href="../main.php" style="color: white;"><h1>Ultimate <span>watches</span></h1></a>
        </div>
        <div>
            <i id="menu" class="fa-solid fa-bars icon-phone"></i>
        </div>
    </header>

<!--     nav bar     -->

    <nav id="hidden">
        <i id="exite" class="fa-solid fa-x exite-icon"></i>
    
            <a href="index.php">
                <i class="fa-solid fa-house"></i>
                Home</a>
            <a href="shop.php">
                <i class="fa-solid fa-cart-shopping"></i>
                Shop</a>
            <a id="active" href="contact.php">
                <i class="fa-solid fa-phone"></i>
                Contact</a>
            <a href="about.php">
                <i class="fa-solid fa-address-card"></i>
                About us</a>

    </nav>


<!--     Social    -->

<br>
<br>


<center><h1 class="titre">Social</h1></center>
<div class="social-container">
     
<a href="tel:+212620665284" target="_blank">
    <div class="cardes">
        <i style="color: #c900f1;" class="fa-solid fa-phone"></i>
        <h1 style="color: #c900f1;; margin: 10px 0;">Phone number</h1>
        <h3>+212 620-665284</h3>
    </div>
</a>

<a href="http://wa.me/+212620665284" target="_blank">
    <div class="cardes">
        <i class="fa-brands fa-whatsapp"></i>
        <h1 style="color: #73ff00; margin: 10px 0;">Whatsap</h1>
        <h3>+212 620-665284</h3>
    </div>
</a>

<a href="https://web.facebook.com/Ultimate-WatchesMA-100153859329369/" target="_blank">
    <div class="cardes">
        <i style="color: #4040e7;" class="fa-brands fa-facebook"></i>
        <h1 style="color: #4040e7; margin: 10px 0;">Facebook</h1>
        <h3>Ultimate whatches</h3>
    </div>
</a>

<a href="https://www.instagram.com/ultimate_watches.ma/" target="_blank">
    <div class="cardes">
        <i style="color: #fd07ab;" class="fa-brands fa-instagram"></i>
        <h1 style="color: #ee00ba; margin: 10px 0;">Instagram</h1>
        <h3>Ultimate whatches</h3>
    </div>
</a>


</div>






<!--     Contact form    -->


<form class="form"  action="https://formspree.io/f/xbjwaagp" method="POST">
<center><h1 style="width: 100%;" class="titre">Contact form</h1></center>

    <div class="form-container">

        <label for="">Full name</label>
        <div class="input-container">
            <i class="fa-solid fa-user"></i>
            <input class="input" name="name" type="text" placeholder="Full name" required>
        </div>

        <label for="">Phone number</label>
        <div class="input-container">
            <i class="fa-solid fa-phone"></i>
            <input class="input" name="phone number" inputmode="tel" type="text" placeholder="Phone number" required>
        </div>


        <label for="">Email</label>
        <div class="input-container">
            <i class="fa-solid fa-envelope"></i>
            <input class="input" name="email" type="email" placeholder="Email" required>
        </div>
        <label for="">Your subject</label>
        <div class="input-container">
            <textarea class="textarea" name="subject" name="" placeholder="Description"  cols="80" rows="5" required></textarea>
        </div>

        <button type="submit" class="send-btn">Send</button>

    </div>
</form>


    <!--     Panier     -->
    <?php include('include2.php') ?>



</body>

</html>