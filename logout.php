<?php 
session_start();
unset($_SESSION["deliceSession"]);
session_destroy();
header("location: front_page.php");
?>