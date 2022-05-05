<?php
include 'db_connect.php';

if(isset($_POST['submit']))
{
$n=$_POST["name"];
$add=$_POST["email"];
$ph=$_POST["aphone"];
$phn=$_POST["subj"];
$people=$_POST["msg"];

mysqli_query($con,"INSERT INTO `contact`(`name`, `email`, `phone`, `subject`, `message`) VALUES ('$n','$add','$ph','$phn','$people')");
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

    <title>Contact us</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <!-- Link external css-->
    <link rel="stylesheet" href="stylesheet/contact.css">

    <!-- font style -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


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
      textarea{
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      textarea{
      width: calc(100% - 10px);
      padding: 5px;
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
      
      .item i{
      position: absolute;
      font-size: 20px;
      color: #cc7a00;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
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

<!---------- Header Section starts ------------>
    
<header class="header">
        
            <a href="#" class="logo"><i class="fa fa-cutlery"></i>Delice</a>
            
            <nav class="navbar">
                <a href="home1.php">Home</a>
                
                <a href="categories.php">Menu</a>
                <a class="active" href="#contact">Contact</a>
                <a href="reserve.php">Reservation</a>
                <a href="logout.php">Logout</a>
            </nav>

            <div class="icons">
                <i class="fa fa-bars" id="menu-bars"></i>
            </div>   

</header><br><br><br><br><br><br>


<div class="testbox">
      <form action="contact.php" method="POST">
        <div class="item">
          <label for="name">Name<span>*</span></label>
          <input id="name" type="text" name="name" required/>
        </div>
        <div class="item">
          <label for="email">Email Address<span>*</span></label>
          <input id="email" type="email" name="email" required/>
        </div>
        <div class="item">
          <label for="bphone">Phone Number<span>*</span></label>
          <input id="bphone" type="text" name="aphone" required/>
        </div>
        <div class="item">
          <label for="subj">Subject<span>*</span></label>
          <input id="subj" type="text" name="subj" required/>
        </div>
        <div class="item">
          <label for="msg">Message<span>*</span></label>
          <textarea id="cmsg" name="msg"></textarea>
        </div>
        <div class="btn-block">
          <button name="submit">SEND</button>
        </div>
      </form>
    </div>

</body>
</html> 



<?php
}
?>