<?php include_once("config.php");
    session_destroy(); 
    header("Location: ".WEBSITEURL."login.php"); 
?>