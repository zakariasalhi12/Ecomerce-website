<?php
session_start();
include('include.php');


    if(!isset($_SESSION['loggedUser'])){
        header('location: login.php');
    }
    else{
        $email = $_SESSION['loggedUser'];
        $select = mysqli_query($con,"SELECT * FROM users WHERE email='$email'");
        $id2 = $_POST['id2'];
        $contity = $_POST['contity'];
        $prname = $_POST['prname'];
        $primg = $_POST['primg'];
        $prprice = $_POST['prprice'];
        $send = mysqli_query($con,"INSERT INTO panier(id,contity,prname,primg,prprice) VALUES('$id2','$contity','$prname','$primg','$prprice')");
        header("location:panierr.php");
    }






?>