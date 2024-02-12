<?php
session_start();
include('include.php');
if( !isset($_SESSION['loggedUser'])){
    echo'    <header class="login-header">
    <a href="login.php">Login</a>
    <a href="regist.php">Sing up</a>;
</header>';
}else{
    echo'<header class="login-header2">
    <a href="logout.php">Logout</a>
    </header>';
    $email = $_SESSION['loggedUser'];

}

?>