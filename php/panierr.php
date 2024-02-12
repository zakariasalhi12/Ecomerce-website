<?php
session_start();
include('include.php');
if( !isset($_SESSION['loggedUser'])){
    echo'    <header class="login-header">
    <a href="login.php">Login</a>
    <a href="regist.php">Sing up</a>;
</header>';
header('location:login.php');
}else{
    echo'<header class="login-header2">
    <a href="logout.php">Logout</a>
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
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="../js/main.js"></script>
    <script defer src="../js/totalprice.js"></script>
    <title>About us</title>
</head>

<body style="background:#171122;">

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





    <div class="panier-container">

        <center>
            <h1 class="titre2">Your panier</h1>
        </center>
        <div class="contt">
            <?php
                if(isset($_SESSION['loggedUser'])){
                    $panier = mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
                    $ron = mysqli_fetch_array($panier);
                        $id = $ron['id'];
                        $png = mysqli_query($con,"SELECT * FROM panier WHERE id='$id'");
                        while($showpanier = mysqli_fetch_array($png)){
                        echo "
                        <div class='panier-bn'>
                          <div class='idks'>
                            <img class='panier-img' src='$showpanier[primg]'>
                            <h1 class='mrg'>$showpanier[prname]</h1>
                            <div>
                            <form action='up.php? bigid=$showpanier[bigid]' method='post'>
                            <input name='buf' class='in' type='number' min=1 max=5 value='$showpanier[contity]' >
                            <button type='submit' class='up'>Update</button>
                            </form>
                            </div>
                        </div>
                        <div>
                            <h2 class='prci'>$showpanier[prprice] MAD</h2>
                        </div>
                        <a class='deleet' href='panierdelet.php? bigid=$showpanier[bigid]'>Remove</a>
                    </div>";
                        }}  
        
              ?>

        </div>
        <center>
            <h1>Your total price is : <span id="total">0 MAD</span></h1>
        </center>
        <button class="buyy">Buy</button>
        
        <center>
            
            <h1 class="titre2">Favorite</h1>
        </center>
        <div class="favorite-container">
            <?php
 if(isset($_SESSION['loggedUser'])){
    $nd = mysqli_query($con,"SELECT * FROM favorit WHERE id=$id");
    while($noob = mysqli_fetch_array($nd)){
        echo "
        <div class='favorite'>
        <div class='friends'>
            <img class='img5' src='$noob[img]'>
            <h1 class='nm'>$noob[name]</h1>
        </div>
        <div>
            <h2 class='price'>$noob[price] MAD</h2>
        </div>
        <div>
            <a href='deletfavorit.php? id=$noob[bigid]' class='deleet'>delet</a>
        </div>
    </div>";
    }
}
   ?>
        </div>
    </div>

    <div class="cach">
        <div class="method">
            <p><i class="fa-solid fa-truck"></i> Cach on delevery</p>
        </div>
        <div class="indo">
            <div>
                <form action="paymentgo.php" method="POST">
                    <h1>Price : <span id="sq"></span></h1>
                    <div class="inputsx">
                        <input id="inp1" type="hidden" name="price" value="">
                        <input type='hidden' name='product' value='
                        <?php
                if(isset($_SESSION['loggedUser'])){
                    $pan = mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
                    $ro = mysqli_fetch_array($pan);
                        $id = $ro['id'];
                        $p = mysqli_query($con,"SELECT * FROM panier WHERE id='$id'");
                        while($showpa = mysqli_fetch_array($p)){
                        echo " $showpa[prname] x $showpa[contity],";
                    }}
                         ?>
                        '>
                        <?php
                if(isset($_SESSION['loggedUser'])){
                    $pano = mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
                    $roo = mysqli_fetch_array($pano);
                        $id = $ro['id'];
                        $po = mysqli_query($con,"SELECT * FROM panier WHERE id='$id'");
                        while($showpao = mysqli_fetch_array($po)){
                        echo "<input type='hidden' name='userid' value='$showpao[id]'>";
                    }}
                         ?>
                        <input type="text" required  placeholder="Full name" name="Username" id="">
                        <input type="email" required  placeholder="Email" name="Useremail" id="">
                        <input type="num"  required placeholder="Phone number" name="Usernumber" id="">
                        <input type="text" required  placeholder="City" name="Usercity" id="">
                        <input type="text" required  placeholder="Adress" name="Useradress" id="">
                        <input type="text" required  placeholder="ZIP code" name="Userzip" id="">
                        <input name="sub" class="buyy" type="submit" value="Buy now">
                    </div>
                </form>
                        <button class="buyy b">Cancel</button>

            </div>
        </div>
    </div>




</body>

</html>