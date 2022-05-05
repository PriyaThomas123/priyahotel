<?php 
  include 'db_connect.php';
?>

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

    <title>Registration Details</title>
   </head>
<body>
  <header id="header">
    <i class="fa fa-bars" id="nav-toggler"></i>
    <div>
      <span><?php
            include 'db_connect.php';
                echo "<p class=display>".$_SESSION['name']."</p>";
            ?></span>
    </div>
  </header>

  <nav id="nav">
  <div>
    <div class="logo">
      <i class="fab fa-gg-circle"></i>
      <span>Delice</span>
    </div>

    <ul class="nav">

      <li class="nav_item">
        <a href="admin.php" class="nav_item-link">
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
            <a href="food.php" class="sub_link">Food Menu</a>
          </li>
          <li>
            <a href="product_details.php" class="sub_link">Products Details</a>
          </li>
        </ul>
      </li>
      <li class="nav_item">
        <a href="#" class="nav_item-link">
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
    </ul>
  </div>
    <a href="login2.php" class="sign-out">
      <i class="fas fa-sign-out-alt"></i>
      <span>Sign Out</span>
    </a>
  
  </nav><br><br>

  <center>
  
<table id="customers">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Status</th>
  </tr>

  <?php
  $result = mysqli_query($con, "SELECT * FROM `register`");
  while($row=mysqli_fetch_array($result)){
	  //print_r($row);?>
  <tr>
    <td><?php echo $row["name"];?> </td>
	  <td><?php echo $row["email"];?> </td>
    <td>
      <?php 
      if($row['status']==1){
        echo '<p><a href="status.php?id='.$row['id'].'&status=0"><button>Enable</button></a></p>';
      }else{
        echo '<p><a href="status.php?id='.$row['id'].'&status=1"><button>Disable</button></a></p>';
      }
      ?>
    </td>
  </tr>

<?php
}
?>
  
</table>
</center>



<script src="js/main.js" defer></script>


</body>
</html>


<?php
}
?>







