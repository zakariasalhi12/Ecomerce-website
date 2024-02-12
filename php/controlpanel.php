<?php

include("include.php");
session_start();
if(!isset($_SESSION['loggedAdmin'])){
    header('location: login.php');
}
$emm = $_SESSION['loggedAdmin'];
if(isset($_POST['submit'])){
    $img1 = $_FILES['img1'];
    $img2 = $_FILES['img2'];
    $img3 = $_FILES['img3'];

    $img1_location = $_FILES['img1']['tmp_name'];
    $img1_name = $_FILES['img1']['name'];
    $img1_up = "images/".$img1_name;

    $img2_location = $_FILES['img2']['tmp_name'];
    $img2_name = $_FILES['img2']['name'];
    $img2_up = "images/".$img2_name;

    $img3_location = $_FILES['img3']['tmp_name'];
    $img3_name = $_FILES['img3']['name'];
    $img3_up = "images/".$img3_name;

    $name = $_POST['name'];
    $price = $_POST['price'];
    $fullname = $_POST['fullname'];
    $description = $_POST['description'];
    $type1 = $_POST['type1'];
    $type2 = $_POST['type2'];
    $solded = $_POST['soldedprice'];

            $add = "INSERT INTO products(img1,img2,img3,name,price,solded,fullname,description,type1,type2)
             VALUES('$img1_up','$img2_up','$img3_up','$name','$price','$solded','$fullname','$description','$type1','$type2')";
            $query = mysqli_query($con,$add);
            if(move_uploaded_file($img1_location,'images/'.$img1_name) && move_uploaded_file($img2_location,'images/'.$img2_name) && move_uploaded_file($img3_location,'images/'.$img3_name)){
                echo "<script>alert('product added succesfuly')</script>";
            }else{
                echo "<script>alert('product didnt added')</script>";
            }
            header("location: allproduct.php");
        }


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/controll.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="../js/main.js"></script>
    <script defer src="../js/controllpanel.js"></script>
    <title>Controll panel</title>
</head>

<body>



    <div class="container-bb">
        <div class="controll">
            <div>
                <a id="activen" href="controlpanel.php"><span class="yours"><i
                            class="fa-solid fa-circle-plus"></i></span> Add
                    product</a>

                <a href="allproduct.php"><span class="yours"><i class="fa-solid fa-basket-shopping"></i></span> All
                    product</a>
                <a href="client.php"><span class="yours"><i class="fa-solid fa-clipboard-list"></i></span> Our
                    commond</a>

                <a href="logout2.php"><span class="yours"><i class="fa-solid fa-arrow-right-from-bracket"></i></span>
                    Logout</a>
            </div>
        </div>
    </div>



    <div class="add-product-container">
        <div class="add-product">
            <div>
                <form action="controlpanel.php" method="POST" enctype="multipart/form-data">


                    <input class="file" required type="file" name="img1" id="fill">
                    <input class="file" required type="file" name="img2" id="fill2">
                    <input class="file" required type="file" name="img3" id="fill3">
                    <div class="litl">
                        <label class="lab" for="fill">Main product img </label>
                        <label class="lab" for="fill2">Product Img 2</label>
                        <label class="lab" for="fill3">Product Img 3</label>
                    </div>
                    <div class="litl">

                        <img class="im">
                        <img class="im">
                        <img class="im">
                    </div>

                    <input type="text" required name="name" placeholder="Product Name">
                    <div class="select">
                        <input type="text" style="width:28.5%;" required name="price" placeholder="Sold price">
                        <input type="text" style="width:28.5%;" name="soldedprice" placeholder="Old price">
                    </div>
                    <input type="text" required name="fullname" placeholder="Full product name">
                    <textarea name="description" placeholder="Product description" cols="30" rows="8"></textarea>
                    <div class="select">
                        <select name="type1">
                            <option value="man">man</option>
                            <option value="woman">woman</option>
                        </select>
                        <select name="type2">
                            <option value="watch">Watch</option>
                            <option value="parfum">parfum</option>
                        </select>
                    </div>

                    <input id="add" name="submit" type="submit" value="Add product">
                </form>
            </div>
        </div>
    </div>




</body>

</html>