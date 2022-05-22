<?php 
session_start();
unset($_SESSION['username']); //unsetting username effectively logs user out
session_destroy(); //destroy entire session

header("location: ./homepage.php"); //redirect to home page
?>