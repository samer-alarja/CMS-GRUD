<?php 
    session_start(); 
    include 'db.php'; 

    if(isset($_POST['username']) === true && $_POST['username'] != ''){
      

 
            mysqli_query($link , 'UPDATE users  
                                       SET 
                                       username="'.$_POST['username'].'",
                                       password="'.$_POST['password'].'",
                                       active="'.$_POST['active'].'",
                                       created_date="'.$_POST['created_date'].'",
                                       role="'.$_POST['role'].'"
                                       WHERE id='.$_GET['id']);
       header('location:listuser.php');
    }
    ?> 