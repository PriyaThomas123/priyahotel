<?php 
include 'db_connect.php';

$id = $_GET['id'];
$status = $_GET['status'];

$q = "UPDATE register SET status=$status WHERE id=$id";

mysqli_query($con, $q);

header('location:regdetails.php');

?>