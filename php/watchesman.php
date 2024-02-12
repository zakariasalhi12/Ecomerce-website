<?php

include("include.php");

$products = "SELECT * FROM products WHERE type2='watch' AND type1='man'";
$show = mysqli_query($con,$products);
?>
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
    <script defer src="../js/shop.js"></script>
    <title>Man watches</title>
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

    <header style="border-bottom: none;" class="phone-header">
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
        <a id="active" href="shop.php">
            <i class="fa-solid fa-cart-shopping"></i>
            Shop</a>
        <a href="contact.php">
            <i class="fa-solid fa-phone"></i>
            Contact</a>
        <a href="about.php">
            <i class="fa-solid fa-address-card"></i>
            About us</a>

    </nav>

    <!--     Shop     -->




    <div class="litle-header">
        <div class="wtc">
            <a  class="active" href="shop.php">All</a>
            <div class="popup-contianer">
                <a style="color: blue;" class="active"  style="padding: 10px;"nclick="watches()">Watches <i class="fa-solid fa-angle-down"></i></a>
                <div class="popup">
                    <a class="active"  href="watches.php">All</a>
                    <a class="active" id="activo" href="watchesman.php">Man</a>
                    <a class="active"  href="watcheswoman.php">Woman</a>
                </div>
            </div>
            <div class="popup-contianer">
                <a class="active" style="padding: 10px;">Perfum <i class="fa-solid fa-angle-down"></i></a>
                <div class="popup">
                    <a class="active"  href="parfum.php">All</a>
                    <a class="active"  href="parfumman.php">Man</a>
                    <a class="active"  href="parfumwoman.php">Woman</a>
                </div>
            </div>
        </div>
    </div>

    <br class="we-dont-use-it-again">
    <br class="we-dont-use-it-again">
    <br class="we-dont-use-it-again">


    <section>
        <center>
            <h1 class="titre">Man watches</h1>
        </center>
        <div class="big-container">
            <?php while($row = mysqli_fetch_array($show)){

             echo   "
             <a href='info.php? id=$row[id]'>
                <div class='container'>
                    <img class='shop-img' src= $row[img1]>
                     
                         <h1 class='watch-title'> $row[name]</h1>
                         <div class='nf2'>
                             <h2 class='price'> $row[price] MAD</h2>
                             <p class='price-solded'> $row[solded] MAD</p>
                          </div>
                  </div>
                  </a>
              ";
 } ?>
            <!--
-->

        </div>

        </div>
        </section>

    <!--     panier    -->
    <?php include('include2.php') ?>


</body>

</html>