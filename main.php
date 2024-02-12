<?php

include("php/include.php");

$products = "SELECT * FROM `products` ORDER BY RAND() LIMIT 4";
$show = mysqli_query($con,$products);
?>

<?php

session_start();
if( !isset($_SESSION['loggedUser'])){
    echo'    <header class="login-header">
    <a href="php/login.php">Login</a>
    <a href="php/regist.php">Sing up</a>;
</header>';
}else{
    echo'<header class="login-header2">
    <a href="php/logout.php">Logout</a>
    </header>';
    $email = $_SESSION['loggedUser'];

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="js/main.js"></script>
    <title>Ultimate watches</title>
</head>

<body>


    <!--     header     -->
    <header class="simple-header">
        <div class="logo-container">
            <a href="main.php" style="color: white;">
                <h1>Ultimate <span>watches</span></h1>
            </a>
        </div>
        <div>
            <a href="main.php">
                <i class="fa-solid fa-house"></i>
                Home</a>
            <a href="php/shop.php">
                <i class="fa-solid fa-cart-shopping"></i>
                Shop</a>
            <a href="php/contact.php">
                <i class="fa-solid fa-phone"></i>
                Contact</a>
            <a href="php/about.php">
                <i class="fa-solid fa-address-card"></i>
                About us</a>
        </div>
    </header>

    <!--    phone header     -->

    <header class="phone-header">
        <div class="logo-container">
            <a href="main.php" style="color: white;">
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

        <a id="active" href="main.php">
            <i class="fa-solid fa-house"></i>
            Home</a>
        <a href="php/php/shop.php">
            <i class="fa-solid fa-cart-shopping"></i>
            Shop</a>
        <a href="php/contact.php">
            <i class="fa-solid fa-phone"></i>
            Contact</a>
        <a href="php/about.php">
            <i class="fa-solid fa-address-card"></i>
            About us</a>

    </nav>

    <!--     img section     -->

    <section class="main">
        <h1>New watches for 2022</h1>
        <h1>From <span>Ultamate watches</span></h1>
        <div>
            <a href="https://www.instagram.com/ultimate_watches.ma/" target="_blank"> <i
                    class="fa-brands fa-instagram icon"></i></a>
            <a href="https://web.facebook.com/Ultimate-WatchesMA-100153859329369/" target="_blank"> <i
                    class="fa-brands fa-facebook icon"></i> </a>
        </div>
        <img class="img" src="php/images/4.png" alt="">
    </section>

    <!--     some watches     -->


    <center>
        <h1 class="titre">New Arrival</h1>
    </center>

    <section>

        <div class="big-container">
            <?php while($row = mysqli_fetch_array($show)){

             echo   "
             <a href='php/info.php? id=$row[id]'>
                <div class='container'>
                    <img class='shop-img' src= php/$row[img1]>
                     
                         <h1 class='watch-title'> $row[name]</h1>
                         <div class='nf2'>
                             <h2 class='price'> $row[price] MAD</h2>
                             <p class='price-solded'> $row[solded] MAD</p>
                          </div>
                  </div>
                  </a>
              ";
 } ?>
            <!-- btn for more product -->

        </div>

    </section>

    <section class="big-btn">
        <h1>For see more product </h1>
        <a href="php/shop.php">Click here</a>
    </section>

<section class="timer">
    <h1>Big sold coming</h1>
    <p id="demo"></p>
</section>

    <!--     panier     -->
    <a href="php/panierr.php">
        <div class="panier"><i class="fa-solid fa-cart-shopping"></i></div>
    </a>


</body>

</html>