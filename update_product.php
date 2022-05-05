<?php
include 'db_connect.php';
$id=$_GET["appu"];
$edit=mysqli_query($con, "SELECT * FROM `menu` WHERE id='$id'");
$row=mysqli_fetch_array($edit);
if(isset($_POST["submit"])){
  $n=$_POST["cat"];
  $s=$_POST["subcat"];
  $t=$_POST["title"];
  $d=$_POST["descr"];
  $p=$_POST["price"];
  if($_FILES["img"]["tmp_name"]!="")
      $i=$_FILES["img"]["name"];
  else 
      $i=$row['image'];
      move_uploaded_file($_FILES["img"]["tmp_name"],"images/".$_FILES["img"]["name"]);
      mysqli_query($con, "UPDATE `menu` SET `category`='$n', `sub_cat`='$s', `title`='$t', `description`='$d' `price`='$p',`image`='$i' WHERE id='$id'");

      header("location:product_details.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Update Product Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="stylesheet/update_product.css" >

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />



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
      top: 30px;
      bottom:2px;
      }
      form {
      width: 30%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px  #96fd81; 
      }
      input {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      .item input:hover{
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0 #96fd81;
      color: #96fd81;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #cc7a00;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
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
  <body><header id="header">
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
            <a href="update_product.php" class="sub_link">Update Product</a>
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
    </ul>
  </div>
    <a href="logout.php" class="sign-out">
      <i class="fas fa-sign-out-alt"></i>
      <span>Sign Out</span>
    </a>
  
  </nav>


<script src="js/main.js" defer></script>
<br><br><br><br>
    <div class="testbox">
      <form action="#" method="POST" enctype="multipart/form-data">
        <div class="item">
          <label for="name">Category<span>*</span></label>
          <input id="catname" type="text" name="cat" value="<?php echo $row["category"]; ?>" required>
        </div>
        <div class="item">
          <label for="email">Sub Category<span>*</span></label>
          <input id="subcatname" type="text" name="subcat" value="<?php echo $row["sub_cat"]; ?>" required>
        </div>
        <div class="item">
        <div class="item">
          <label for="email">Title<span>*</span></label>
          <input id="titlename" type="text" name="title" value="<?php echo $row["title"]; ?>" required>
        </div>
        <div class="item">
          <label for="email">Description<span>*</span></label>
          <input id="desname" type="text" name="descr" value="<?php echo $row["description"]; ?>" required>
        </div>
        <div class="item">
          <label for="email">Price<span>*</span></label>
          <input id="number" type="text" name="price" value="<?php echo $row["price"]; ?>" required>
        </div>
        <div class="item">
          <label for="address">Image<span>*</span></label>
          <input id="image" type="file" name="img" required/>
          <img src="images/<?php echo $row["image"];?>" height="100" width="100"/></img>
        </div>
        <div class="btn-block">
          <button type="submit" name="submit">UPDATE</button>
        </div>
      </form>
    </div>
  </body>
</html>

