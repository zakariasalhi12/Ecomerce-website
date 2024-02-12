<?php
include("include.php");
$id = $_GET['id'];
$show = mysqli_query($con,"SELECT * FROM products WHERE id=$id");
$other = mysqli_query($con,"SELECT * FROM products WHERE id!=$id ORDER BY RAND() LIMIT 4");
if(mysqli_num_rows($show) == 0){
    header("location:../main.php");
}
?>
<?php
session_start();
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
    $select = mysqli_query($con,"SELECT * FROM users WHERE email='$email'");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="../js/main.js"></script>
    <title id="title">Product info</title>
</head>

<body>

    <!--     header     -->

    <header class="simple-header">
        <div class="logo-container">
            <a href="../main.php" style="color: white;">
                <h1>Ultimate <span>watches</span></h1>
            </a>
        </div>
        <div>
            <a href="../main.php">
                <i class="fa-solid fa-house"></i>
                Home</a>
            <a href="shop.php">
                <i class="fa-solid fa-cart-shopping"></i>
                Shop</a>
            <a href="contact.php">
                <i class="fa-solid fa-phone"></i>
                Contact</a>
            <a href="about.php">
                <i class="fa-solid fa-address-card"></i>
                About us</a>
        </div>
    </header>

    <!--    phone header     -->

    <header class="phone-header">
        <div class="logo-container">
            <a href="../main.php" style="color: white;">
                <h1>Ultimate <span>watches</span></h1>
            </a>
        </div>
        <div>
            <i id="menu" class="fa-solid fa-bars icon-phone"></i>
        </div>
    </header>

    <!--     nav bar     -->

    <nav id="hidden">
        <i id="exite" class="fa-solid fa-x exite-icon"></i>

        <a href="../main.php">
            <i class="fa-solid fa-house"></i>
            Home</a>
        <a href="shop.php">
            <i class="fa-solid fa-cart-shopping"></i>
            Shop</a>
        <a href="contact.php">
            <i class="fa-solid fa-phone"></i>
            Contact</a>
        <a id="active" href="about.php">
            <i class="fa-solid fa-address-card"></i>
            About us</a>

    </nav>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center>
        <h1 class="titre">Product info</h1>
    </center>

    <?php while($row = mysqli_fetch_array($show)) { ?>

    <div class="rayek">
        <div class="bigest-container">
            <div class="bigest">
                <div class="card-bigest-img">
                    <img class="im" src="<?php echo $row['img1'] ?>">
                </div>
                <div class="pictre">
                    <img class="pictures" src="<?php echo $row['img1']?>">
                    <img class="pictures" src="<?php echo $row['img2']?>">
                    <img class="pictures" src="<?php echo $row['img3']?>">
                </div>
            </div>

            <div class="info">
                <p class="ttl"><?php echo $row['fullname'] ?></p>
                <h2 class="prc" style="font-size: 30px;"><?php echo $row['price']?> MAD</h2>
                <div class="opt">
                    <p><?php echo $row['description'] ?></p>

                    <form action="panier.php" method="POST">
                        <?php if(isset(($_SESSION['loggedUser']))){
                    while($row2 = mysqli_fetch_array($select)) {
                        echo "<input type='hidden' name='id2' value='$row2[id]'>"; }} ?>

                        <input class="nf" type="number" name="contity" min="1" max="5" value="1">
                        <input type="hidden" name="prname" value="<?php echo $row['name']?>">
                        <input type="hidden" name="primg" value="<?php echo $row['img1']?>">
                        <input type="hidden" name="prprice" value="<?php echo $row['price']?>">
                        <div class="friends">
                            <button type="submit" class="add"><i class="fa-solid fa-cart-shopping"></i> Add to
                                panier</button>
                        
                    </form>
                    <form action="favorite.php" method="POST">
                        <?php if(isset(($_SESSION['loggedUser']))){
                    while($row3 = mysqli_fetch_array($select)) {
                        echo "<input type='hidden' name='id5' value='$row3[id]'>"; }} ?>
                        <input type="hidden" name="name" value="<?php echo $row['name']?>">
                        <input type="hidden" name="img" value="<?php echo $row['img1']?>">
                        <input type="hidden" name="price" value="<?php echo $row['price']?>">
                        <button class="ht" type="submit"><i class="fa fa-heart"></i></button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <center>
        <h1 class="titre">Other product</h1>
    </center>

    <section>
        <div class="big-container">



            <?php while($row2 = mysqli_fetch_array($other)){

     echo   "
     <a href='info.php? id=$row2[id]'>
        <div class='container'>
            <img class='shop-img' src= $row2[img1]>
             
                 <h1 class='watch-title'> $row2[name]</h1>
                 <div class='nf2'>
                      <h2 class='price'> $row2[price] MAD</h2>
                    <p class='price-solded'> $row2[solded] MAD</p>
              </div>
            
          </div>
          </a>
      ";
} ?>


    </section>





    <script>
    console.log("object");
    const im = document.getElementsByClassName("im")[0]
    const picture = document.querySelectorAll(".pictures")

    picture.forEach(item => {


        item.addEventListener("click", () => {

            let bb = item.src
            im.src = bb

        })

    });
    </script>
    <!--     panier     -->
    <?php include('include2.php') ?>

</body>

</html>