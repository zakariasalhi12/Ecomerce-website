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
    <title>About us</title>
</head>

<body>

    <!--     header     -->

    <header class="simple-header">
        <div class="logo-container">
            <a href="../main.php" style="color: white;">
                <h1>Ultimate <span>watches</span></h1>
            </a>
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
            <a href="../main.php" style="color: white;">
                <h1>Ultimate <span>watches</span></h1>
            </a>
        </div>
        <div>
            <i id="menu" class="fa-solid fa-bars icon-phone"></i>
        </div>
    </header>

    <!--     nav bar     -->

    <nav id="hidden">
        <i id="exite" class="fa-solid fa-x exite-icon"></i>

        <a href="../main.php">
            <i class="fa-solid fa-house"></i>
            Home</a>
        <a href="shop.php">
            <i class="fa-solid fa-cart-shopping"></i>
            Shop</a>
        <a href="contact.php">
            <i class="fa-solid fa-phone"></i>
            Contact</a>
        <a id="active" href="about.php">
            <i class="fa-solid fa-address-card"></i>
            About us</a>

    </nav>

    <br>
    <br>


    <!--     Panier     -->

    <?php include('include2.php') ?>





</body>

</html>