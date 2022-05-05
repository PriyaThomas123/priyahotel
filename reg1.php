<?php
include 'db_connect.php';

if(isset($_POST["submit"]))
{
$n=$_POST["username"];
$add=$_POST["email"];
$ph=$_POST["password"];


$check=mysqli_query($con,"SELECT * from register WHERE name='$n' AND email='$add'");
$checkrows=mysqli_num_rows($check);

if($checkrows>0) {
  //echo '<script type="text/javascript">';
  //echo ' alert("customer exists")';
  //echo '</script>';
} else{
  mysqli_query($con,"INSERT INTO `register`(`name`, `email`, `password`, `status`, `role`) VALUES ('$n','$add','$ph',1,'customer')");
  echo 'alert("Successful")';
}

}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="stylesheet/style.css"/>
</head>
<body>
<br><br>
    <form class="form" action="reg1.php" name="myform" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" id="name" placeholder="Username" onblur="validation()" required>
        <font color="red"><p id = "ename"></p></font>
        <input type="email" class="login-input" name="email" id="email" placeholder="Email Adress" onblur="validation2()" required>
        <font color="red"><p id = "eemail"></p></font>
        <input type="password" class="login-input" name="password" id="pass" placeholder="Password" onblur="validation3()" required>
        <font color="red"><p id = "epass"></p></font>
        <input type="password" class="login-input" name="cpassword" id="cpass" placeholder="Confirm Password" onblur="validation4()" required>
        <font color="red"><p id = "ecpass"></p></font>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login2.php">Click to Login</a></p>
    </form>
</body>

<script>
    function validation(){  
var name = document.forms["myform"]["name"];  
var pattern=/^[A-Za-z\s]+$/;
  if(name.value == ""){
    uname="Required field";
    document.getElementById("ename").innerHTML=uname;
    name.focus();
    return false;
  }
  else if(name.value.match(pattern)){
    document.getElementById("ename").innerHTML="";
    document.myform.email.focus();
    return true;
  }
  else{
    document.getElementById("ename").innerHTML="Invalid";
    name.focus();
    return false;
  }
}  

function validation2(){  
var name2 = document.forms["myform"]["email"];  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(name2.value == ""){
    uemail="Required field";
    document.getElementById("eemail").innerHTML=uemail;
    name2.focus();
    return false;
  }
  else if(name2.value.match(mailformat)){
    document.getElementById("eemail").innerHTML="";
    document.myform.pass.focus();
    return true;
  }
  else{
    document.getElementById("eemail").innerHTML="Invalid Format";
    name2.focus();
    return false;
  }
}  

function validation3()
  {
    var paswd = document.forms["myform"]["password"];
    var pwd = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
            
    if(paswd.value == ""){
      document.getElementById("epass").innerHTML="Required field";
      paswd.focus();
      return false;
    }
    else if(paswd.value.match(pwd)){
      document.getElementById("epass").innerHTML="";
      document.myform.cpass.focus();
      return true;
    }
    else{
      document.getElementById("epass").innerHTML="Invalid Format";
      paswd.focus();
      return false;
    }
  }

function validation4()
  {
    var confirm = document.forms["myform"]["password"];
    var cpaswd = document.forms["myform"]["cpassword"];
            
    if(cpaswd.value == ""){
      document.getElementById("ecpass").innerHTML = "Please enter your password";
      cpaswd.focus();
      return false;
    }
            
    if(confirm.value == cpaswd.value){
            
      document.getElementById("ecpass").innerHTML = "";
      document.myform.submit.focus();
      return true;
    }
    else{
      window.alert( "Password's Doesn't Match");
      cpaswd.focus();
      return false;
    }
  }
            

</script>


</html>
