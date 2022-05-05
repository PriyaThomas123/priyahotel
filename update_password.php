<?php 

include('db_connect.php'); 

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Link external css-->
<link rel="stylesheet" href="stylesheet/update_password.css">
</head>
<body>

<h3>Reset Password</h3>

<div class="container">
  <form action="" method="POST">
    <label for="lname">Name</label>
    <input type="text" id="name" name="username">  

    <label for="fname">Email Address</label>
    <input type="email" id="email" name="useremail">

    <label for="lname">New Password</label>
    <input type="text" id="npass" name="newpassword">

    <button class="button button1" name="submit" type="submit">Submit</button>
  </form>
</div>

<?php

if (isset($_POST['submit']))
{
    if(mysqli_query($con, "UPDATE register SET password = '$_POST[newpassword]' WHERE name = '$_POST[username]' AND email = '$_POST[useremail]' ;"))
    {
        ?>
        <script type="text/javascript">
            alert("The Password Updated Successfully.");
        </script>
        <?php

    }
}
?>


</body>
</html>
