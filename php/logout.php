<?php
session_start();
unset($_SESSION["loggedUser"]);
header('location:../main.php');

?>