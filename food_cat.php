<?php
session_start();
if(isset($_SESSION["deliceSession"]) != session_id()){
    header("Location: front_page.php");
    die();
}
else{
?>



<?php
include 'db_connect.php';
if(isset($_POST["submit"]))
{
  $n=$_POST["name"];

  $check=mysqli_query($con,"SELECT * FROM food_cat WHERE catname='$n'");
  $checkrows=mysqli_num_rows($check);

  if($checkrows > 0){
    $_SESSION['success_message'] = "Category exists.";
    header("Location: food_cat.php");
    exit();
  }else{

  mysqli_query($con,"INSERT INTO `food_cat`(`catname`) VALUES ('$n')");

  $_SESSION['success_message'] = "Category added successfully.";
  header("Location: food_cat.php");
  exit();
  }
} 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="stylesheet/admin.css" >

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Add Category</title>


    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, label { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 40px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 30%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px  #96fd81; 
      }
    
      input{
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
     
      select{
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      select{
      width: calc(100% - 10px);
      padding: 5px;
      }
      
      .item:hover p, .item:hover i{
      color: #cc7a00;
      }
      .item input:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0 #cc7a00;
      color: #cc7a00;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      
     
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #298857;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #1f0150;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>


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
            <a href="#" class="sub_link">Food Category</a>
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
        <a href="#" class="nav_item-link">
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
  

  <div class="testbox">
    
      <form action="food_cat.php" method="POST">


      <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
        <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
        <?php
          unset($_SESSION['success_message']);
      }
      ?>

        <div class="item">
          <label for="name">Category Name<span>*</span></label><br>
          <select class="text" name="name">
            <option disabled selected>-- Select Category --</option>
   	    		<option value="veg">Veg</option>
   	    		<option value="nonveg">Non-veg</option>
   	    		<option value="desserts">Desserts</option>
   	    		<option value="bev">Beverages</option>
   	    	</select>
        </div>
        
        <div class="btn-block">
          <button name="submit">SUBMIT</button>
        </div>
      </form>
    </div>

  


<script src="js/main.js" defer></script>


</body>
</html>

<?php
}
?>