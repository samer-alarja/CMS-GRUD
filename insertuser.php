<?php 
include "db.php";


    $insert_product = mysqli_query($link , 'INSERT INTO users(username,password,active,created_date,role) 
                                VALUES ( "'.$_POST['username'].'","'. $_POST['password'].'",
                                         "'.$_POST['active'].'","'.$_POST['created_date'].'",
                                         "'.$_POST['role'].'")');


header('location:panel.php')
?>