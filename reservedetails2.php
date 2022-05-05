<?php 
  include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="stylesheet/reservedetail.css" >

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Reserve Details</title>
   </head>
<body>
  <header id="header">
    <i class="fa fa-bars" id="nav-toggler"></i>
    <div>
      <i class="fa fa-user-alt"></i>
      <span>Admin</span>
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
        <a href="staff.php" class="nav_item-link">
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
            <a href="add_product2.php" class="sub_link">Add Products</a>
          </li>
          <li>
            <a href="product_details2.php" class="sub_link">Product Details</a>
          </li>
        </ul>
      </li>
      <li class="nav_item">
        <a href="regdetails2.php" class="nav_item-link">
          <i class="fa fa-home"></i>
          <span>Customers</span>
        </a>
      </li>
      <li class="nav_item">
        <a href="order_details2.php" class="nav_item-link">
          <i class="fa fa-home"></i>
          <span>Order</span>
        </a>
      </li>
      <li class="nav_item">
        <a href="#" class="nav_item-link">
          <i class="fa fa-home"></i>
          <span>Reservation</span>
        </a>
      </li>
    </ul>
  </div>
    <a href="login.php" class="sign-out">
      <i class="fas fa-sign-out-alt"></i>
      <span>Sign Out</span>
    </a>

  </nav><br><br>


<center>
<table id="customers">
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Date</th>
    <th>Time</th>
    <th>Total People</th>
  </tr>

  <?php
  $result = mysqli_query($con, "SELECT * FROM `reserve`");
  while($row=mysqli_fetch_array($result)){
	  //print_r($row);?>
  <tr>
    <td><?php echo $row["id"];?> </td>
    <td><?php echo $row["name"];?> </td>
	  <td><?php echo $row["email"];?> </td>
    <td><?php echo $row["date"];?> </td>
    <td><?php echo $row["time"];?> </td>
    <td><?php echo $row["people"];?> </td>
  </tr>

<?php
}
?>
  
</table>
</center>
<script src="js/main.js" defer></script>


</body>
</html>





