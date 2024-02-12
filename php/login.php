<?php
include("include.php");

if(!empty($_GET['email']) & !empty($_GET['password'])){
    $em = $_GET['email'];
    $pas = $_GET['password'];
    echo "<p class='succes'><i class='fa-solid fa-check'></i>Accont added succes</p>";
}

if(isset($_POST['sub'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conect = "SELECT email,password FROM users WHERE email='$email' and password='$password'";
    $reseult = mysqli_query($con,$conect);
    $count = mysqli_num_rows($reseult);
    if($count == 1){
        if($email == "rafayelle2005@gmail.com"){
            session_start();
            $_SESSION['loggedAdmin'] = $email;
            header('location: controlpanel.php');
        }else{
            session_start();
            $_SESSION['loggedUser'] = $email;
            header('location: ../main.php');
        }
    }
    else{
        echo "<p class='error'>incorect password or email</p>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>

<a href="../main.php" class="circle">
        <i class="fa-solid fa-arrow-left"></i>
    </a>

    <div class="formater">
        <div class="fr">
            <center>
                <h1 class="titre">Login</h1>
            </center>

            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input name="email" value="<?php if(!empty($_GET['email'])){echo $em;} ?>" type="email"
                        class="form-control" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input name="password" value="<?php if(!empty($_GET['password'])){echo $pas;} ?>" type="password"
                        class="form-control">
                </div>
                <input type="submit" name="sub" class="btn btn-primary" value="login">
                <center>
                    <p>You dont have account ? <a href="regist.php">Sing up</a></p>
                </center>
            </form>
        </div>
    </div>

</body>

</html>