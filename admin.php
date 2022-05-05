<?php
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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="stylesheet/admin.css" >

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c8ee3dd930.js"></script>



    <title>Admin Dashboard</title>
   </head>
<body>
  <header id="header">
    <i class="fa fa-bars" id="nav-toggler"></i>
    <div>
      <i class="fa fa-user-alt"></i>
      <span><?php
            include 'db_connect.php';
                echo "<p class=display>".$_SESSION['name']."</p>";
            ?></span>
    </div>
  </header>

  <div class="container">
      <div class="card">
        <h2 class="card-head">Customers</h2>
        <center>
          <p><?php
          include "db_connect.php";

          $query = "SELECT * FROM register ORDER BY id";
          $query_run = mysqli_query($con, $query);

          $row = mysqli_num_rows($query_run);
          echo "<h1>$row</h1>";
         ?>
         </p>
      </div>

      <div class="card2">
        <h2 class="card-head">Categories</h2>
        <center>
          <p><?php
          include "db_connect.php";

          $query = "SELECT * FROM food_cat ORDER BY id";
          $query_run = mysqli_query($con, $query);

          $row = mysqli_num_rows($query_run);
          echo "<h1>$row</h1>";
         ?>
         </p>
      </div>

      <div class="card3">
        <h2 class="card-head">Sub-Categories</h2>
        <center>
          <p><?php
          include "db_connect.php";

          $query = "SELECT * FROM menu ORDER BY id";
          $query_run = mysqli_query($con, $query);

          $row = mysqli_num_rows($query_run);
          echo "<h1>$row</h1>";
         ?>
         </p>
      </div>

  </div>
      
  


  <nav id="nav">
  <div>
    <div class="logo">
      <i class="fab fa-gg-circle"></i>
      <span>Delice</span>
    </div>

    <ul class="nav">

      <li class="nav_item">
        <a href="#" class="nav_item-link">
          <i class="fa fa-home"></i>
          <span>Home</span>
        </a>
      </li>
      <li class="nav_item">
        <a href="#" class="nav_item-link">
          <i class="fa fa-home"></i>
          <span>Products <i class="fa fa-angle-down"></i></span>
        </a>
        <ul class="d-none">
          <li>
            <a href="food_cat.php" class="sub_link">Food Category</a>
          </li>
          <li>
            <a href="food_cat.php" class="sub_link">Food Menu</a>
          </li>
          <li>
            <a href="product_details.php" class="sub_link">Products Details</a>
          </li>
        </ul>
      </li>
      <li class="nav_item">
        <a href="regdetails.php" class="nav_item-link">
          <i class="fa fa-home"></i>
          <span>Customers</span>
        </a>
      </li>
      <li class="nav_item">
        <a href="order_details.php" class="nav_item-link">
          <i class="fa fa-home"></i>
          <span>Order</span>
        </a>
      </li>
      <li class="nav_item">
        <a href="reservedetails.php" class="nav_item-link">
          <i class="fa fa-home"></i>
          <span>Reservation</span>
        </a>
      </li>
      <li class="nav_item">
        <a href="contactdetails.php" class="nav_item-link">
          <i class="fa fa-home"></i>
          <span>Messages</span>
        </a>
      </li>
      <li class="nav_item">
        <a href="#" class="nav_item-link">
          <i class="fa fa-home"></i>
          <span>Staff</span>
        </a>
        <ul class="d-none">
          <li>
            <a href="add_staff.php" class="sub_link">Add Staff</a>
          </li>
          <li>
            <a href="view_staff" class="sub_link">View_staff</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
    <a href="logout.php" class="sign-out">
      <i class="fas fa-sign-out-alt"></i>
      <span>Sign Out</span>
    </a>
  
  </nav>


<script src="js/main.js" defer></script>


</body>
</html>



<?php
}
?>