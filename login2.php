<?php 
    include('db_connect.php');
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="stylesheet/style.css"/>
</head>
<body>
    <br><br><br><br>

<div class="login">



    <form class="form" method="POST" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" name="username" class="login-input" placeholder="Username" autofocus="true"/>
        <input type="password" name="password" class="login-input" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <a href="update_password.php">Reset Password</a>
        <p class="link"><a href="reg1.php">New Registration</a></p>
  </form>

    </div>  

</body>
</html>

<?php

if(isset($_POST['submit'])){

    //process for login
    //1. Get the data from Login form
    $username = $_SESSION['user'] = $_POST['username'];
    $password = $_POST['password'];

    //2. SQL to check whether the user with username and password exists or not
    $sql = "SELECT * FROM register WHERE name='$username' AND password='$password'";

    //3. Execute the query
    $res = mysqli_query($con, $sql);

    
    if(mysqli_num_rows($res)>0){
        $d=mysqli_fetch_assoc($res);
        $_SESSION['deliceSession']=session_id();
        $_SESSION['name']=$d['name'];
        
        if(($d['status'] == "1"))
        {
            header('location:home1.php');
        }
        else if(($username == "admin"))
        {
            header('location:admin.php');
        }
        else if(($d['status'] == "2"))
        {
            header('location:staff.php');
        }
    }

}

?>