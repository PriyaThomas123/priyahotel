<?php
include 'db_connect.php';

if(isset($_POST['submit']))
{
$n=$_POST["name"];
$add=$_POST["email"];
$ph=$_POST["adate"];
$phn=$_POST["time"];
$people=$_POST["people"];

$check=mysqli_query($con,"SELECT * from reserve WHERE name='$n' AND email='$add'");
$checkrows=mysqli_num_rows($check);

if($checkrows>0) {
  echo '<script type="text/javascript">';
  echo ' alert("Customer exists")';
  echo '</script>';
} else{

mysqli_query($con,"INSERT INTO `reserve`(`name`, `email`, `date`, `time`, `people`) VALUES ('$n','$add','$ph','$phn','$people')");
}
}
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
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reservation Form</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <!-- Link external css-->
    <link rel="stylesheet" href="stylesheet/reserve.css">

    <!-- font style -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">

</head>
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
      .banner {
      position: relative;
      height: 300px;
      background-image: url("images/res.jpg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.2); 
      position: absolute;
      width: 100%;
      height: 100%;
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
      input[type="date"] {
      padding: 4px 5px;
      }
      
      .item:hover p, .item:hover i, .question label:hover, input:hover::placeholder {
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

  <header class="header">
        
            <a href="#" class="logo"><i class="fa fa-cutlery"></i>Delice</a>
            
            <nav class="navbar">
                <a href="home1.php">Home</a>
                
                <a href="categories.php">Menu</a>
                <a href="contact.php">Contact</a>
                <a class="active" href="#reserve">Reservation</a>
                <a href="logout.php">Logout</a>
                
            </nav>

            <div class="icons">
                <i class="fa fa-bars" id="menu-bars"></i>
            </div>   


</header>

<!---------- search form ------------>


<br><br>
<br><br>

    <div class="testbox">
      <form action="reserve.php" method="POST">
        <div class="banner">
          <h1>Reserve Now</h1>
        </div>
        <div class="item">
          <label for="name">Name<span>*</span></label>
          <input id="name" type="text" name="name" required/>
        </div>
        <div class="item">
          <label for="email">Email Address<span>*</span></label>
          <input id="email" type="email" name="email" required/>
        </div>
        <div class="item">
          <label for="bdate">Date of Arrival<span>*</span></label>
          <input id="bdate" type="date" name="adate" required/>
          <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="item">
          <label for="time">Time<span>*</span></label>
          <input id="time" type="time" name="time" required/>
        </div>
        <div class="item">
          <p>People</p>
          <select name="people">
            <option>-----</option>
            <option name="people">1</option>
            <option name="people">2</option>
            <option name="people">3</option>
            <option name="people">4</option>
            <option name="people">more</option>
          </select>
        </div>
        <div class="btn-block">
          <button name="submit">BOOK A TABLE</button>
        </div>
      </form>
    </div>



    <!----------      javascript file link    ------------>
    <script src="js/script.js"></script>

  </body>
</html>


<?php
}
?>