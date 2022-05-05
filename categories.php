<?php
include "db_connect.php";
session_start();
if(isset($_SESSION["deliceSession"]) != session_id()){
    header("Location: front_page.php");
    die();
}
else{
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Categories Page</title>
        <link rel="stylesheet" href="stylesheet/categories.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

        <!-- font style -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--  Bootstsrap css  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" >

    </head>
    <body>

    <!---------- Header Section starts ------------>

    <header>

    <a href="#" class="logo"><i class="fa fa-cutlery"></i>Delice</a>
    
    <nav class="navbar">
      <a href="home1.php">Home</a>
     
      <a class="active" href="#categories">Menu</a>
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

    </header><br><br><br><br><br><br>


    


    <div class="row inner-menu-box">    
        <div class="side-navbar">
            <a class="nav-link active" href="#home" id="act">All</a>
            <a class="nav-link2" href="#about" id="ab">Veg</a>
            <a class="nav-link3" href="#menu" id="me">Non-veg</a>
            <a class="nav-link4" href="#contact" id="co">Desserts</a>
            <a class="nav-link5" href="#areas" id="ar">Beverages</a>
        </div>

        <div class="content-area">
            <div class="wrapper">

                <?php
                  include "db_connect.php";
                  $result=mysqli_query($con,"SELECT *  FROM `menu`");
                  $check = mysqli_num_rows($result)>0;
                  if($check){
                  ?>
                  <div id="home" class="banner">
                    <?php            while($row=mysqli_fetch_array($result))
                    {

                    ?>
                    <div class="card" style="width: 18rem;">
                        <form  action="manage_cart.php" method="POST" enctype="multipart/form-data">
                                    <img src="images/<?php echo $row['image']; ?>" class="productviewindex" name="img" ></img>
                                    <h4 class="producttext" name="prdname"><?php echo $row['sub_cat']; ?></h4>
                                    <h4 class="producttext" name="prdtitle"><?php echo $row['title']; ?></h4>
                                    <h4 class="producttext" name="prddes"><?php echo $row['description']; ?></h4>
                                    <p class="producttextprice" name="prdprice"> $ <?php echo $row['price']; ?></p>
                                    <input type="number" value="1" class="product-quantity" name="quantity" min=1 size="2" /><br>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>

                                    <input type="hidden" name="Item_name" value="<?php echo $row['sub_cat']?>">
                                    <input type="hidden" name="Price" value="<?php echo $row['price']?>">


                        </form>
                    </div>
                    <?php
                     }
                ?>
            </div>
            <?php } ?>  
            </div>
        </div>


        <div class="content-area">
            <div class="wrapper">
               <?php
                  include "db_connect.php";
                  $result=mysqli_query($con,"SELECT *  FROM menu WHERE category='veg'");
                  $check = mysqli_num_rows($result)>0;
                  if($check){
                  ?>
                  <div id="about" class="banner2">
                    <?php            while($row=mysqli_fetch_array($result))
                    {

                    ?>
                    <div class="card" style="width: 18rem;">
                    <form  action="manage_cart.php" method="POST" enctype="multipart/form-data">
                                    <img src="images/<?php echo $row['image']; ?>" class="productviewindex" name="img" ></img>
                                    <h4 class="producttext" name="prdname"><?php echo $row['sub_cat']; ?></h4>
                                    <h4 class="producttext" name="prdtitle"><?php echo $row['title']; ?></h4>
                                    <h4 class="producttext" name="prddes"><?php echo $row['description']; ?></h4>
                                    <p class="producttextprice" name="prdprice">$ <?php echo $row['price']; ?></p>
                                    <input type="number" class="product-quantity" name="quantity" min=1 size="2" /><br>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>


                                    <input type="hidden" name="Item_name" value="<?php echo $row['sub_cat']?>">
                                    <input type="hidden" name="Price" value="<?php echo $row['price']?>">

                                </form>
                    </div>
                    <?php
                }
                ?>
            </div>
            <?php } ?>
                
            </div>
        </div>


        <div class="content-area">
            <div class="wrapper">
               <?php
                  include "db_connect.php";
                  $result=mysqli_query($con,"SELECT *  FROM menu WHERE category='nonveg'");
                  $check = mysqli_num_rows($result)>0;
                  if($check){
                  ?>
                  <div id="menu" class="banner3">
                    <?php            while($row=mysqli_fetch_array($result))
                    {

                    ?>
                    <div class="card" style="width: 18rem;">
                    <form  action="manage_cart.php" method="POST" enctype="multipart/form-data">
                                    <img src="images/<?php echo $row['image']; ?>" class="productviewindex" name="img" ></img>
                                    <h4 class="producttext" name="prdname"><?php echo $row['sub_cat']; ?></h4>
                                    <h4 class="producttext" name="prdtitle"><?php echo $row['title']; ?></h4>
                                    <h4 class="producttext" name="prddes"><?php echo $row['description']; ?></h4>
                                    <p class="producttextprice" name="prdprice">$ <?php echo $row['price']; ?></p>
                                    <input type="number" class="product-quantity" name="quantity" min=1 size="2" /><br>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>


                                    <input type="hidden" name="Item_name" value="<?php echo $row['sub_cat']?>">
                                    <input type="hidden" name="Price" value="<?php echo $row['price']?>">

                                </form>
                    </div>
                    <?php
                }
                ?>
            </div>
            <?php } ?>
                
            </div>
        </div>


        <div class="content-area">
            <div class="wrapper">
               <?php
                  include "db_connect.php";
                  $result=mysqli_query($con,"SELECT *  FROM menu WHERE category='desserts'");
                  $check = mysqli_num_rows($result)>0;
                  if($check){
                  ?>
                  <div id="contact" class="banner2">
                    <?php            while($row=mysqli_fetch_array($result))
                    {

                    ?>
                    <div class="card" style="width: 18rem;">
                    <form  action="manage_cart.php" method="POST" enctype="multipart/form-data">
                                    <img src="images/<?php echo $row['image']; ?>" class="productviewindex" name="img" ></img>
                                    <h4 class="producttext" name="prdname"><?php echo $row['sub_cat']; ?></h4>
                                    <h4 class="producttext" name="prdtitle"><?php echo $row['title']; ?></h4>
                                    <h4 class="producttext" name="prddes"><?php echo $row['description']; ?></h4>
                                    <p class="producttextprice" name="prdprice">$ <?php echo $row['price']; ?></p>
                                    <input type="number" class="product-quantity" name="quantity" min=1 size="2" /><br>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>


                                    <input type="hidden" name="Item_name" value="<?php echo $row['sub_cat']?>">
                                    <input type="hidden" name="Price" value="<?php echo $row['price']?>">

                                </form>
                    </div>
                    <?php
                }
                ?>
            </div>
            <?php } ?>
                
            </div>
        </div>


        <div class="content-area">
            <div class="wrapper">
               <?php
                  include "db_connect.php";
                  $result=mysqli_query($con,"SELECT *  FROM menu WHERE category='bev'");
                  $check = mysqli_num_rows($result)>0;
                  if($check){
                  ?>
                  <div id="areas" class="banner2">
                    <?php            while($row=mysqli_fetch_array($result))
                    {

                    ?>
                    <div class="card" style="width: 18rem;">
                    <form  action="manage_cart.php" method="POST" enctype="multipart/form-data">
                                    <img src="images/<?php echo $row['image']; ?>" class="productviewindex" name="img" ></img>
                                    <h4 class="producttext" name="prdname"><?php echo $row['sub_cat']; ?></h4>
                                    <h4 class="producttext" name="prdtitle"><?php echo $row['title']; ?></h4>
                                    <h4 class="producttext" name="prddes"><?php echo $row['description']; ?></h4>
                                    <p class="producttextprice" name="prdprice">$ <?php echo $row['price']; ?></p>
                                    <input type="number" class="product-quantity" name="quantity" min=1 size="2" /><br>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>


                                    <input type="hidden" name="Item_name" value="<?php echo $row['sub_cat']?>">
                                    <input type="hidden" name="Price" value="<?php echo $row['price']?>">

                                </form>
                    </div>
                    <?php
                }
                ?>
            </div>
            <?php } ?>
                
            </div>
        </div>


    </div>


    <script>
    $(document).ready(function() {
    $('a').click(function(event) {
    var id = $(this).attr("id");

    if (id == 'act') {
      $('#home').show();
      $('#about').hide();
      $('#menu').hide();
      $('#contact').hide();
      $('#areas').hide();
    }
    if (id == 'ab') {
      $('#about').show();
      $('#home').hide();
      $('#menu').hide();
      $('#contact').hide();
      $('#areas').hide();
    }
    if (id == 'me') {
      $('#menu').show();
      $('#home').hide();
      $('#about').hide();
      $('#contact').hide();
      $('#areas').hide();
    }
    if (id == 'co') {
      $('#contact').show();
      $('#home').hide();
      $('#about').hide();
      $('#menu').hide();
      $('#areas').hide();
    }
    if (id == 'ar') {
      $('#areas').show();
      $('#home').hide();
      $('#about').hide();
      $('#menu').hide();
      $('#contact').hide();
    }
  });
});
    </script>


    </body>
</html>


<?php
}
?>