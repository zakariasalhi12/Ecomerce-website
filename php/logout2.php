<?php

include("include.php");
session_start();
if(isset($_SESSION['loggedAdmin'])){
    unset($_SESSION['loggedAdmin']);
    header("location:../main.php");

}else{
    header("location:../main.php");
}


?>