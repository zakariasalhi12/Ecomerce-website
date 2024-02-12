<?php

include("include.php");
include("include3.php");
if(isset($_POST['sub'])){
    $userid = $_POST['userid'];
    $price = $_POST['price'];
    $product = $_POST['product'];
    $username = $_POST['Username'];
    $useremail = $_POST['Useremail'];
    $usernumber = $_POST['Usernumber'];
    $usercity = $_POST['Usercity'];
    $useradress = $_POST['Useradress'];
    $userzip = $_POST['Userzip'];
    $delet = mysqli_query($con,"DELETE FROM panier WHERE id='$userid'");
    $snd = "INSERT INTO client(userid,price,product,username,useremail,usernumber,usercity,useradress,userzip) VALUES('$userid','$price','$product','$username','$useremail','$usernumber','$usercity','$useradress','$userzip')";
    if($userid != "" or $price != "" or $username != "" or $useremail != "" or $usernumber != "" or $usercity != "" or $useradress != ""){
        $send = mysqli_query($con,$snd);
    }

}else{
    header('location:../main.php');
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
    <title>Payment succes</title>
</head>

<body style='background-color: #c3ffc3;'>



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




    <div class="nice1">
        <div class="nice2">
            <div>
                <i class="fa-solid fa-check"></i>
                <h1>Payement succes</h1>
                <h3>Our team will contact you for confirm this domande</h3>
                <p>Thx for your understanding and compiantion</p>
            </div>
        </div>
    </div>


    <!--     Panier     -->

    <?php include('include2.php') ?>



</body>

</html>