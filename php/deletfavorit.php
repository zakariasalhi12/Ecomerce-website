<?php
include("include.php");
$id = $_GET['id'];
mysqli_query($con,"DELETE FROM favorit WHERE bigid=$id");
header("location:panierr.php");
?>