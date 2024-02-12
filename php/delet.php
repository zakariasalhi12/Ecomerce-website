<?php
include("include.php");
$id = $_GET['id'];
mysqli_query($con,"DELETE FROM products WHERE id=$id");
header("location:allproduct.php")
?>