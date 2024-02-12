<?php

include("include.php");

if(isset($_POST['submite'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $chech = "SELECT email FROM users WHERE email='$email'";
    $nm = "SELECT phone FROM users WHERE phone='$phone'";
    $que = mysqli_query($con,$chech);
    $que2 = mysqli_query($con,$nm);
if($name == "" or $phone == "" or $email == "" or $password == ""){
    echo "<p class='error'>PLS ENTER A REAL VALUES</p>";
}else if(mysqli_num_rows($que) > 0){
    echo "<p class='error'>Thise email already used</p>";
}else if(mysqli_num_rows($que2) > 0){
    echo "<p class='error'>Thise number already used</p>";
}else{
    $data = "INSERT INTO users(name,phone,email,password) VALUES('$name','$phone','$email','$password')";
    $send = mysqli_query($con,$data);
    header("location:login.php? password=$password&& email=$email");
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
    <title>Sing up</title>
</head>

<body>

    <a href="../main.php" class="circle">
        <i class="fa-solid fa-arrow-left"></i>
    </a>

    <div class="formater">
        <div class="fr">
            <center>
                <h1 class="titre">Sing up</h1>
            </center>
            <form action="regist.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Full name</label>
                    <input required name="name" type="texte" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input required name="phone" type="tel" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input required name="email" type="email" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input required name="password" type="password" class="form-control">
                </div>
                <input name="submite" type="submit" class="btn btn-primary" value="sing up">
                <center>
                    <p>You alreay have account ? <a href="login.php">Login</a></p>
                </center>
            </form>
        </div>
    </div>

</body>

</html>