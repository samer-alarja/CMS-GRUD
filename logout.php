<?php 
session_Start();
session_destroy();
header('location:welcome.php');
?>