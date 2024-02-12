<?php

include("include.php");
session_start();
if(!isset($_SESSION['loggedAdmin'])){
    header('location: login.php');
}
$products = "SELECT * FROM `client`";
$show = mysqli_query($con,$products);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/controll.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="../js/main.js"></script>
    <title>Commend</title>
</head>

<body>


    <div class="container-bb">
        <div class="controll">
            <div>
            <a  href="controlpanel.php"><span class="yours"><i class="fa-solid fa-circle-plus"></i></span> Add product</a>
          
                <a href="allproduct.php"><span class="yours"><i class="fa-solid fa-basket-shopping"></i></span> All product</a>
                <a id="activen" href="client.php"><span class="yours"><i class="fa-solid fa-clipboard-list"></i></span> Our commond</a>
                <a href="logout2.php"><span class="yours"><i class="fa-solid fa-arrow-right-from-bracket"></i></span> Logout</a>
            </div>
        </div>
    </div>


    <div class="add-product-container">
        <div class="add-product">

            <div class="big-container2">

<?php while($row = mysqli_fetch_array($show)){


             echo   "
             <div class='min'>
                <div class='cont'>
                <center><span style='color:red;font-weight:bolder;'>$row[time]</span></center>
                      <p><span class='nm'>Price : </span>$row[price]</p>
                      <p><span class='nm'>Product : </span>$row[product]</p>
                      <p><span class='nm'>User name : </span>$row[username]</p>
                      <p><span class='nm'>User email : </span>$row[useremail]</p>
                      <p><span class='nm'>User number : </span>$row[usernumber]</p>
                      <p><span class='nm'>User City : </span>$row[usercity]</p>
                      <p><span class='nm'>User adress : </span>$row[useradress]</p>
                      <p><span class='nm'>User zip : </span>$row[userzip]</p>
                      <a class='deletpr' href='deletclient.php? id=$row[id]'><i class='fa-solid fa-trash'></i></a>
                </div>
              </div>
              ";
 } ?>
            </div>

        </div>




</body>

</html>