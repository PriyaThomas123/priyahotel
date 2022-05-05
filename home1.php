<?php
session_start();
if(isset($_SESSION["deliceSession"]) != session_id()){
    header("Location: front_page.php");
    die();
}
else{
?>

<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <!-- Link external css-->
    <link rel="stylesheet" href="stylesheet/styles1.css">

    <!-- font style -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body> 

<!---------- Header Section starts ------------>
    
<header class="header">
        
            <a href="#" class="logo"><i class="fa fa-cutlery"></i>Delice</a>
            
            <nav class="navbar">
                <a class="active" href="#home">Home</a>
                
                <a href="categories.php">Menu</a>
                <a href="contact.php">Contact</a>
                <a href="reserve.php">Reservation</a>
                <a href="logout.php">Logout</a>
            </nav>

            <div class="icons">
                <i class="fa fa-bars" id="menu-bars"></i>

                <?php 
                    $count=0;
                    if(isset($_SESSION['cart']))
                    {
                        $count=count($_SESSION['cart']);
                    }
                ?>
                <a href="cart2.php" class="fa fa-shopping-cart" id="cart-btn"> (<?php echo $count; ?>) </a>
            </div>   

            <?php
            include 'db_connect.php';
                echo "<p class=display>".$_SESSION['name']."</p>";
            ?>


</header>

<!---------- search form ------------>


<!---------- Home Section starts ------------>
<section class="home" id="home">

    <div class="swiper home-slider">
        <div class="swiper-wrapper wrapper">
            
            <div class="swiper-slide slide">
                <div class="content">
                    <span>Our special dish</span>
                    <h3>Try It</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a href="categories.php" class="btn">Order Now</a>
                </div>
                <div class="image">
                    <img src="images/menu_1.jpg" alt="">
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>


<!----------    About Section starts     ------------>

<section class="about" id="about">
    <h3 class="sub-heading">about us</h3>
    <h1 class="heading">why choose us</h1>

    <div class="row">

        <div class="image">
            <img src="images/about.jpg" alt="">
        </div>

        <div class="content">
            <h3>best food in the country</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit 
                esse dolore eu fugiat nulla pariatur.
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>

            <div class="icons-container">
                <div class="icons">
                    <i class="fa fa-truck"></i>
                    <span>free delivery</span>
                </div>
                <div class="icons">
                    <i class="fa fa-dollar"></i>
                    <span>easy payments</span>
                </div>
                <div class="icons">
                    <i class="fa fa-headphones"></i>
                    <span>24/7 service</span>
                </div>
            </div>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<!----------      Menu Section starts      ------------>


<!----------     Product Section starts     ------------>



<!----------      contact starts     ------------>




<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!----------      javascript file link    ------------>
<script src="js/script.js"></script>

</body>
</html> 


<?php
}
?>