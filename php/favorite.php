<?php
session_start();
include('include.php');
    if(!isset($_SESSION['loggedUser'])){
        header('location: login.php');
    }
    else{

        $email = $_SESSION['loggedUser'];
        $select = mysqli_query($con,"SELECT * FROM users WHERE email='$email'");
        while($row3 = mysqli_fetch_array($select)) {
            $id = $row3['id'] ;
        }
         
        $id2 = $id;
        $name = $_POST['name'];
        $img = $_POST['img'];
        $price = $_POST['price'];
        $send = mysqli_query($con,"INSERT INTO favorit(id,name,img,price) VALUES('$id2','$name','$img','$price')");
        header("location:panierr.php");
    }






?>