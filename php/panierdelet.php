<?php
include("include.php");
$bigid = $_GET['bigid'];
mysqli_query($con,"DELETE FROM panier WHERE bigid=$bigid");
header("location:panierr.php")
?>