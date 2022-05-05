<br><br><br><br><br><br>
<?php
include "db_connect.php";

session_start();

if(isset($_GET['action']) == "add"){
    $id = $_GET['id'];


    if(isset($_SESSION['mycart'][$id])){
        $previous = $_SESSION['mycart'][$id]['qty'];
        $_SESSION['mycart'][$id] = array("id"=>$id,"qty"=>$previous+$_POST['quantity']);
    }
    else{
        $_SESSION['mycart'][$id] = array("id"=>$id,"qty"=>$_POST['quantity']);
    }
    header("location:cart.php");

}

?>

<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Menu</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <!-- Link external css-->
    <link rel="stylesheet" href="stylesheet/menu.css">

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
                <a href="home1.php">Home</a>
                <a href="#about">About</a>
                <a class="active" href="#menu">Menu</a>
                <a href="#contact">Contact</a>
                <a href="reserve.php">Reservation</a>
                <a href="logout.php">Logout</a>
            </nav>

            <div class="icons">
                <i class="fa fa-bars" id="menu-bars"></i>
                <a href="cart.php" class="fa fa-shopping-cart" id="cart-btn"></a>
            </div>   

</header><br><br><br><br><br><br>

<!---------- Home Section starts ------------>
<br><br><br><br><br><br><p><center><span>
<?php

    if(isset($_SESSION['mycart'])){
        echo "<a href='cart.php'>".count($_SESSION['mycart'])."</a>";
    }
    else{
        echo 0;
    }

?></span>Item/s in Cart</p>

<?php
    include "db_connect.php";
        $result=mysqli_query($con,"SELECT *  FROM `product`");
        $check = mysqli_num_rows($result)>0;
        if($check){
            ?>
            <div id="tab1cards">
<?php            while($row=mysqli_fetch_array($result))
            {

            ?>
                            <div class="card" style="width: 20rem;">
                                <form  action="menu.php?action=add&id=<?php echo $row['id']?>" method="POST" enctype="multipart/form-data">
                                    <img src="images/<?php echo $row['image']; ?>" class="productviewindex" name="img" ></img><br><br>
                                    <h4 class="producttext" name="prdname"><?php echo $row['name']; ?></h4>
                                    <p class="producttextprice" name="prdprice">$ <?php echo $row['price']; ?></p>
                                    <input type="number" class="product-quantity" name="quantity" value="1" size="2" /><br>
                                    <input type="submit" class="btn btn-success" name="btncart" value="ADD TO CART" />


                                    


                                </form>
                            </div>
            <?php


                
            }
?>  </div>
<?php
        }
        else
        {
            echo"No product";
        }
        
        
    ?>
 




</body>
</html> 
