<?php
include("include.php");
$id = $_GET['id'];
mysqli_query($con,"DELETE FROM client WHERE id=$id");
header("location:client.php")
?>