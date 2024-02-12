<?php
include('include.php');
$bigid = $_GET['bigid'];
$buf = $_POST['buf'];
$send = mysqli_query($con,"UPDATE `panier` SET `contity` = '$buf' WHERE `panier`.`bigid` = $bigid");
header("location:panierr.php")


?>