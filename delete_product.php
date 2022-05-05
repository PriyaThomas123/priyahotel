
<?php
include_once 'db_connect.php';
$id= $_GET['id'];
$sql= mysqli_query($con,"SELECT `image` FROM menu WHERE id='$id'");
$row=mysqli_fetch_array($sql);
mysqli_query($con,"DELETE FROM `menu` WHERE id='$id'");
unlink("images/".$row['image']);

header("Location:product_details.php");

?>
