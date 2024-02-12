<?php

include("include.php");
session_start();
if( !isset($_SESSION['loggedAdmin'])){
    header('location: login.php');
}
$products = "SELECT * FROM `products`";
$show = mysqli_query($con,$products);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/controll.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="../js/main.js"></script>
    <title>All product</title>
</head>

<body>


    <div class="container-bb">
        <div class="controll">
            <div>
            <a  href="controlpanel.php"><span class="yours"><i class="fa-solid fa-circle-plus"></i></span> Add product</a>
          
                <a id="activen" href="allproduct.php"><span class="yours"><i class="fa-solid fa-basket-shopping"></i></span> All product</a>
                <a  href="client.php"><span class="yours"><i class="fa-solid fa-clipboard-list"></i></span> Our commond</a>
                <a href="logout2.php"><span class="yours"><i class="fa-solid fa-arrow-right-from-bracket"></i></span> Logout</a>
            </div>
        </div>
    </div>


    <div class="add-product-container">
        <div class="add-product">

            <div class="big-container">

<?php while($row = mysqli_fetch_array($show)){


             echo   "
                <div class='container'>
                    <img class='shop-img' src= $row[img1]>
                      <h1 class='watch-title'> $row[name]</h1>
                         <div class='nf2'>
                         <h2 class='price'> $row[price] MAD</h2>
                         <p class='price-solded'> $row[solded] MAD</p>
                      </div>
                     <a class='deletpr' href='delet.php? id=$row[id]'><i class='fa-solid fa-trash'></i></a>
                  </div>
              ";
 } ?>
            </div>

        </div>




</body>

</html>